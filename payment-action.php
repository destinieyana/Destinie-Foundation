<?php
require_once('./bootstrap.php');
require_once $_SERVER['DOCUMENT_ROOT'] . ROOT_URL . '/authorize.php';

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

                    $return_url = ANET_SITE_ROOT . 'shop';
                } else {
                    // TRANSACTION NOT APPROVED
                    $return_url = ANET_SITE_ROOT . 'shop?response_reason_code=' . $response->response_reason_code . '&response_code=' . $response->response_code . '&response_reason_text=' . $response->response_reason_text;
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
                } else {
                    // TRANSACTION NOT APPROVED
                }
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
    }
    
    public function development_gateway() {

        echo "Loud!\n";
        var_dump($_POST);
    }

    public function development_gateway_silent() {

        echo "Silent!\n";
        var_dump($_POST);
    }

}

$anetController = new AnetController();
$anetController->development_gateway();
$anetController->development_gateway_silent();
