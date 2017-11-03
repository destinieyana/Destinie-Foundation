<?php
require_once('./bootstrap.php');
require_once $_SERVER['DOCUMENT_ROOT'] . ROOT_URL . '/authorize.php';

ob_start();

$amount = $data['transaction_amount'];
$session_id = $_cookie['phpsessid'];

class AnetController {
    /**
     * This relay should only be used to determine where we should redirect the user
     */
    public function index() {

        // PROCESS TRANSACTION
        if (count($_POST)) {
            $response = new AuthorizeNetSIM;
            if ($response->isAuthorizeNet()) {
                if ($response->approved) {

                    $return_url = $this->processSuccessfulTransaction();

                } else {
                    // TRANSACTION NOT APPROVED
                    $return_url = $this->processFailedTransaction();
                }

                echo AuthorizeNetDPM::getRelayResponseSnippet($return_url);
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
    }

    /**
     * Do your heavy lifting in here
     */
   

    public function silent() {

        // PROCESS TRANSACTION
        if (count($_POST)) {
            $response = new AuthorizeNetSIM;
            if ($response->isAuthorizeNet()) {
                if ($response->approved) {

                    // TRANSACTION APPROVED
                    $sql= "INSERT INTO donations(`amount`, `user_id`) VALUES(:amount ,:user_id);";

                    $pdoStmt = $conn->prepare($sql);
                    $pdoStmt->bindValue(":amount", $amount);
                    $pdoStmt->bindValue(":user_id", $session_id);
                    $exResults = $pdoStmt->execute(); 
                    var_dump($amount);

                } else {
                    // TRANSACTION NOT APPROVED
                }
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
    }

    public function development_gateway_silent() {
        echo "Silent!\n";
        var_dump($_POST);
    }

    public function development_gateway() {

        $testResult = true;

        if ($testResult) {
            $return_url = $this->processSuccessfulTransaction();
        } else {
            $return_url = $this->processFailedTransaction();
        }

        header("Location: $return_url");
    }

    private function processSuccessfulTransaction() {

        // Redirect to Thank you
        return $_SERVER['DOCUMENT_ROOT'] . ROOT_URL . '/thankyou.php';
    }

    private function processFailedTransaction() {

        // Redirect to Failed
        return "url/to/failed/page.php";
    }

    private function checkSession() {

        // If no session has been started...
        if (session_status() == PHP_SESSION_NONE) {
            // Check if we passed a session id via post
            if(!isset($_POST[self::SESSION_ID_INDEX])){
                $this->debug('no cookie');
                // If not, start a new session
                $this->startSession();
            } else {
                $this->debug('passed cookie');
                // If so, resume the session that we passed via post SESSION_ID_INDEX and SESSION_HASH_INDEX
                $cookie = filter_input(INPUT_POST, self::SESSION_ID_INDEX, FILTER_SANITIZE_STRING);
                $hash = filter_input(INPUT_POST, self::SESSION_HASH_INDEX, FILTER_SANITIZE_STRING);
                // Prevent session hijacking
                if($this->verifyHash($cookie,$hash)){
                    $this->debug('HASH GOOD');
                    $this->startSession($cookie);
                } else {
                    $this->debug('HASH NO GOOD');
                }
                
            }
        }
    }
}

$anetController = new AnetController();
$anetController->development_gateway();
$anetController->development_gateway_silent();

?>
