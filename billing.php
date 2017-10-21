<?php require_once('./bootstrap.php');?>
<?php require_once('./authorize.php');?>

<?php
// This sets the fingerprint
$data = array();
$data['transaction_amount'] = ($_POST['amount'] || $_POST['other-amt']);
$time = time();
$fp_sequence = $time;
$fp = AuthorizeNetDPM::getFingerprint(AUTHORIZENET_API_LOGIN_ID, AUTHORIZENET_TRANSACTION_KEY, $data['transaction_amount'], $fp_sequence, $time);
$sim = new AuthorizeNetSIM_Form(
    array(
        'x_amount' => $data['transaction_amount'],
        'x_fp_sequence' => $fp_sequence,
        'x_fp_hash' => $fp,
        'x_fp_timestamp' => $time,
        'x_relay_response' => "TRUE",
        'x_relay_url' => ANET_RELAY_URL,
        'x_test_request' => AUTHORIZENET_TEST_REQUEST,
        'x_login' => AUTHORIZENET_API_LOGIN_ID,
    )
);
$sim_hidden_fields_string = $sim->getHiddenFieldString();
$amount = $data['transaction_amount'];
$session_id = $_COOKIE['PHPSESSID'];
$session_id_hash = strtoupper(md5('dest_temp_salt' . $_COOKIE['PHPSESSID']));
var_dump($_POST);
?>

<?php //if ('production' != ENVIRONMENT) echo 'sending payment to ' . PAY_URL . '<br />Relay = ' . ANET_RELAY_URL; ?>

<link rel="stylesheet" type="text/css" href="donate.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">

<form id="form_payment" method="POST" action="<?php echo PAY_URL; ?>">
    <?php echo $sim_hidden_fields_string; ?>

    <input type="hidden" name="form" value="form_payment" />
    <input type="hidden" name="orig_x_amount" value="<?php echo $amount; ?>" />
    <input type="hidden" name="orig_x_fp_hash" value="<?php echo $fp; ?>" />

    <input type="hidden" name="<?php echo 'des_temp_index'; ?>" value="<?php echo $session_id; ?>" />
    <input type="hidden" name="<?php echo 'des_temp_hash_index'; ?>" value="<?php echo $session_id_hash; ?>" />

    <div class= "formPaymentElement">
        <div class="sec3 sec">
            <h2>Billing Information</h2>
            <div class="billing form">
                <div class="col1 col">
                    <label>First Name
                        <span class="req">*</span>
                         <input type="text" class="text required" id="x_first_name" size="15" name="x_first_name" value="fail"></input>
                    </label>
                    <label>Address Line 1
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_address" size="26" name="x_address" value="123 Main Street"></input>
                    </label>				
                    <label>City
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_city" size="8" name="x_city" value="Beverly Hills"></input>
                    </label>
                    <label>Zip/Postal Code
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_zip" size="9" name="x_zip" value="90210"></input>
                    </label>
                    <label>Phone
                        <input type="text" name="phone">
                        </label>
                </div>
                <div class="col2 col">
                    <label>Last Name
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_last_name" size="14" name="x_last_name" value="Doe"></input>
                    </label>
                    <label>Address Line 2
                        <input type="text" class="text required" id="x_address2" size="26" name="x_address"></input>
                    </label>
                    <label>State/Province
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_state" size="4" name="x_state" value="California"></input>
                    </label>
                    <label>Country
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_country" size="17" name="x_country" value="USA"></input>
                    </label>
                    <label>Email
                        <span class="req">*</span>
                        <input type="email" name="email">
                    </label>
                </div>
            </div>
        </div>
        <div class="sec4 sec">
            <h2>Payment Information</h2>
            <img src="Images/logos_cc.png" alt="Credit Cards">
            <div class="payment form">
                <div class="col3">
                    <label>Debit or Credit Card Number
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_card_num" size="15" name="x_card_num" value="<?php if('production' != ENVIRONMENT) echo '4007000000027'; ?>">
                    </label>
                    <label>Card Security Code
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_card_code" size="4" name="x_card_code" value="<?php if('production' != ENVIRONMENT) echo '123'; ?>"></input>
                    </label>
                </div>
                <div class="col4">
                    <label>Expiration Date
                        <span class="req">*</span>
                        <input type="text" class="text required" id="x_exp_date" size="4" name="x_exp_date" value="<?php if('production' != ENVIRONMENT) echo '1/25'; ?>"></input>
                    </label> 
                </div>
            </div>
        </div>
        <div class="sec5">
            <div class="submit-pay donate"><button type="submit">DONATE NOW</button></div> 
        </div>
        <div class="sec6 sec">
            <p>By clicking the above button you agree to have your debit or credit card charged by Project C.U.R.E. Please review your submission, click Donate Now ONLY ONCE and allow a few moments for us to process your card. Your donation is secure and encrypted.</p>
        </div>
    </div>
</form>
