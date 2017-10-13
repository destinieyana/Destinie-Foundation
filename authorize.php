<?php

/*
 * For general use on OTI websites and in API
 * IT Team 2014 - 2015 Overseas Travel International
 * --------------------------------------------------------
 */

// AUTHORIZE CONFIGURATION
//	You can use any of the following test credit card numbers. The expiration date must be set to the present date or later:
//
//	American Express Test Card 	370000000000002
//	Discover Test Card              6011000000000012
//	Visa Test Card                  4007000000027 or 4012888818888
//	JCB                             3088000000000017
//	Diners Club/ Carte Blanche 	38000000000006
//	MasterCard                      5424000000000015
// Include authorize framework
require_once ROOT . '/vendors/authorize/anet_php_sdk/AuthorizeNet.php';

if ('development' == ENVIRONMENT) {
    // IF WE ARE ON LOCAL
    define("AUTHORIZENET_API_LOGIN_ID", "8w9AGq3W7799");
    define("AUTHORIZENET_TRANSACTION_KEY", "3P49MjT3H35tVv8x");
    define("AUTHORIZENET_SANDBOX", "TRUE");
    define("AUTHORIZENET_TEST_REQUEST", "FALSE");
    define("AUTHORIZENET_MD5_SETTING", "");
    //define('PAY_URL', FULL_URL.'/anet/development_gateway');
    define('PAY_URL', 'https://test.authorize.net/gateway/transact.dll');
    define('ANET_SITE_ROOT', FULL_URL);
} else {
    // IF WE ARE NOT ON LOCAL
    if (PAYMENT_PAGE_TEST_MODE) {
        define("AUTHORIZENET_API_LOGIN_ID", "29LxF8na8qu");
        define("AUTHORIZENET_TRANSACTION_KEY", "7uM44xedT5Hv72uV");
        define("AUTHORIZENET_SANDBOX", "TRUE");
        define("AUTHORIZENET_TEST_REQUEST", "FALSE");
        define("AUTHORIZENET_MD5_SETTING", "adb9f8b61819");
        define('PAY_URL', 'https://test.authorize.net/gateway/transact.dll');
        define('ANET_SITE_ROOT', FULL_URL);
    } else {
        define("AUTHORIZENET_API_LOGIN_ID", "89N7v9Mpr3SL");
        define("AUTHORIZENET_TRANSACTION_KEY", "6f88tFJF69QbEc4c");
        define("AUTHORIZENET_SANDBOX", "FALSE");
        define("AUTHORIZENET_TEST_REQUEST", "FALSE");
        define("AUTHORIZENET_MD5_SETTING", "");
        define('PAY_URL', 'https://secure.authorize.net/gateway/transact.dll');
        define('ANET_SITE_ROOT', FULL_URL);
    }
}

/**
 *  when returning from authorize
 */
define('ANET_RELAY_URL', ANET_SITE_ROOT . "/anet");

if (AUTHORIZENET_API_LOGIN_ID == "") {
    die('Enter your merchant credentials');
}
