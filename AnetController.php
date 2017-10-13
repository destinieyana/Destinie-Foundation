<?php

/*
 * For general use in Mediacon software products.
 * Author : Erickson Joseph | 2014 Mediacon LLC 
 * ----------------------------------------------
 */

App::uses('AppController', 'Controller');
App::uses('Product', 'Model');
require_once APP . '/Lib/Cart.php';
require_once APP . '/Config/authorize.php';


/**
 * CakePHP ShopController
 * @author Eli
 */
class AnetController extends AppController {

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
        
        $this->render(false);

        // POST TO THE SILENT RELAY
        $this->development_gateway_silent();
        
        // PROCESS TRANSACTION
        if (count($_POST)) {
            if (!strstr($_POST['x_first_name'],'md5')) {
                if (!strstr($_POST['x_first_name'],'fail')) {

                    $return_url = ANET_SITE_ROOT . '/shop/success';
                } else {
                    // TRANSACTION NOT APPROVED
                    $return_url = ANET_SITE_ROOT . '/shop/checkout?response_reason_code=001&response_code=001&response_reason_text=you are the weakest link';
                }

                $this->redirect($return_url, 200);
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
        
    }

    public function development_gateway_silent() {

        // PROCESS TRANSACTION
        if (count($_POST)) {
            if (!strstr($_POST['x_first_name'],'md5')) {
                if (!strstr($_POST['x_first_name'],'fail')) {

                        
                    $this->logFile('debug.log', 'Processed Transaction');

                    $this->transaction_id = '0000000000';
                    $this->total_paid = filter_input(INPUT_POST, 'x_amount', FILTER_SANITIZE_STRING);

                    $this->processTransaction();
                        
                } else {
                    // TRANSACTION NOT APPROVED
                }
            } else {
                echo "MD5 Hash failed. Transaction has not been processed";
            }
        }
    }

    /**
     * processTransaction
     *
     * @TODO make sure session was successfully recovered
     *
     * @access private
     * @return void
     */
    private function processTransaction() {
        $Cart = mediacon\Cart\Cart::getInstance();
        $Cart->clear();
        $this->logFile('transactions.log', 'Transaction'."\r\n");
    }

}
