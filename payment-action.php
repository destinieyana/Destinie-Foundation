<?php
require_once('./bootstrap.php');
require_once $_SERVER['DOCUMENT_ROOT'] . ROOT_URL . '/authorize.php';


class AnetController {

    // Holds a database connection
    private $database;

    /**
     * This relay should only be used to determine where we should redirect the user
     */
    public function index() {

        // PROCESS TRANSACTION
        if (count($_POST)) {
            $response = new AuthorizeNetSIM;
            // Im not being hacked right ?
            if ($response->isAuthorizeNet()) {

                // Was this approved
                if ($response->approved) {

                    $return_url = $this->getURLForSuccessfulTransaction();

                } else {
                    // TRANSACTION NOT APPROVED
                    $return_url = $this->getURLForFailedTransaction();
                }

                echo AuthorizeNetDPM::getRelayResponseSnippet($return_url);
            } else {
                // This may be a hack
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

            // Im not being hacked right ?
            if ($response->isAuthorizeNet()) {

                if ($response->approved) {

                    $this->processSuccessfulTransaction();

                } else {
                    // TRANSACTION NOT APPROVED
                    $this->processFailedTransaction();
                }
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
    }

    public function test_index() {

        $this->recreateSession();

        if (true) {
            $return_url = $this->getURLForSuccessfulTransaction();
        } else {
            $return_url = $this->getURLForFailedTransaction();
        }

        header("Location: $return_url");
    }

    public function test_silent() {

        echo "Silent!\n";

        $this->recreateSession();

        $this->saveToDatabase();
    }

    private function saveToDatabase() {
        
        $amount = $_POST['x_amount'];
        $session_id = $_SESSION['user_record']['id']; 
        // TRANSACTION APPROVED
        $sql= "INSERT INTO donations(`amount`, `user_id`, `ip`) VALUES(:amount ,:user_id, :ip);";

        //connect to database in bootstrap?
        $pdoStmt = $this->database->prepare($sql);
        $pdoStmt->bindValue(":amount", $amount);
        $pdoStmt->bindValue(":user_id", $session_id);
        $pdoStmt->bindValue(":ip", $_SERVER['REMOTE_ADDR']);
        $pdoStmt->execute(); 
    }

    private function getURLForSuccessfulTransaction() {

        // Redirect to Thank you
        return ROOT_URL . 'thankyou.php';
    }

    private function getURLForFailedTransaction() {

        // Redirect to Failed
        return ROOT_URL . 'sorry.php';
    }

    private function recreateSession() {

        // If no session has been started...
        if (session_status() == PHP_SESSION_NONE) {
            // Check if we passed a session id via post
            if(!isset($_POST['des_temp_index'])){
                throw new Error('under attack!');
            } else {
                // If so, resume the session that we passed via post SESSION_ID_INDEX and SESSION_HASH_INDEX
                $cookie = filter_input(INPUT_POST, 'des_temp_index', FILTER_SANITIZE_STRING);
                $hash = filter_input(INPUT_POST, 'des_temp_hash_index', FILTER_SANITIZE_STRING);
                // Prevent session hijacking
                if($this->verifyHash($cookie,$hash)){
                    $this->startSession($cookie);
                } else {
                    throw new Error('under attack!');
                }
            }
        }
    }

    private function verifyHash($value, $hash) {
        return crypt($value, $hash) == $hash;
    }

    public function setConnection($conn) {
        $this->database = $conn;
    }
}

$anetController = new AnetController();
$anetController->setConnection($conn);
$anetController->test_index();
$anetController->test_silent();

