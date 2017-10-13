<?php
// This sets the fingerprint
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
$session_id_hash = strtoupper(md5(SALT . $_COOKIE['PHPSESSID']));
?>

<!-- https://developer.authorize.net/tools/paramdump/index.php -->
<?php //if ('production' != ENVIRONMENT) echo 'sending payment to ' . PAY_URL . '<br />Relay = ' . ANET_RELAY_URL; ?>

<?= $this->Html->css('elements/form-payment.css', array('inline' => false)) ?>
<?= $this->Html->script('elements/form-payment.js', array('inline' => false)) ?>
<div class="formPaymentElement">
    <form id="form_payment" method="post" action="<?php echo PAY_URL; ?>">
        <?php echo $sim_hidden_fields_string; ?>

        <input type="hidden" name="form" value="form_payment" />
        <input type="hidden" name="orig_x_amount" value="<?php echo $amount; ?>" />
        <input type="hidden" name="orig_x_fp_hash" value="<?php echo $fp; ?>" />

        <input type="hidden" name="<?php echo SESSION_ID_INDEX; ?>" value="<?php echo $session_id; ?>" />
        <input type="hidden" name="<?php echo SESSION_HASH_INDEX; ?>" value="<?php echo $session_id_hash; ?>" />

        <div class="section z">
            <div class="title a">Product Information</div>
            <fieldset>
                <div class="group">
                    <div class="a">Total:</div>
                    <div class="b"><?= $amount ?></div>
                </div>
            </fieldset>
        </div>

        <div class="section a">
            <div class="title a">Payment Information</div>
            <fieldset class="a">
                <div class="cards"></div>

                <div class="group c">
                    <label>Credit Card Number</label>
                    <input type="text" class="text required" id="x_card_num" size="15" name="x_card_num" value="<?php if('production' != ENVIRONMENT) echo '4007000000027'; ?>"></input>
                </div>
                <div class="group d">
                    <label>Security Code</label>
                    <input type="text" class="text required" id="x_card_code" size="4" name="x_card_code" value="<?php if('production' != ENVIRONMENT) echo '123'; ?>"></input>
                </div>
                <div class="group e">
                    <label>Exp.</label>
                    <input type="text" class="text required" id="x_exp_date" size="4" name="x_exp_date" value="<?php if('production' != ENVIRONMENT) echo '1/25'; ?>"></input>
                </div>
            </fieldset>
        </div>

        <div class="section b half">
            <div class="title b">Billing Information</div>
            <fieldset class="b">
                <div class="group a">
                    <label>First Name</label>
                    <input type="text" class="text required" id="x_first_name" size="15" name="x_first_name" value="fail"></input>
                </div>
                <div class="group b">
                    <label>Last Name</label>
                    <input type="text" class="text required" id="x_last_name" size="14" name="x_last_name" value="Doe"></input>
                </div>
                <div class="group g">
                    <label>Address</label>
                    <input type="text" class="text required" id="x_address" size="26" name="x_address" value="123 Main Street"></input>
                </div>
                <div class="group f">
                    <label>Country</label>
                    <input type="text" class="text required" id="x_country" size="17" name="x_country" value="USA"></input>
                </div>
                <div class="group h">
                    <label>City</label>
                    <input type="text" class="text required" id="x_city" size="8" name="x_city" value="Beverly Hills"></input>
                </div>
                <div class="group i">
                    <label>State</label>
                    <input type="text" class="text required" id="x_state" size="4" name="x_state" value="California"></input>
                </div>
                <div class="group j">
                    <label>Postal Code</label>
                    <input type="text" class="text required" id="x_zip" size="9" name="x_zip" value="90210"></input>
                </div>
            </fieldset>
        </div>

        <div class="section c half">
            <div class="title b">Shipping Information</div>
            <fieldset class="c">
                <div class="group k">
                    <span>Same as billing information</span>
                    <input type="checkbox" class="checkbox" id="same" name="same" />
                </div>
                <div class="group g">
                    <label>Address</label>
                    <input type="text" class="text required" id="s_address" size="26" name="s_address" value=""></input>
                </div>
                <!--
                <div class="group f">
                    <label>Country</label>
                    <input type="text" class="text required" id="s_country" size="17" name="s_country" value=""></input>
                </div>
                -->
                <div class="group h">
                    <label>City</label>
                    <input type="text" class="text required" id="s_city" size="8" name="s_city" value=""></input>
                </div>
                <div class="group i">
                    <label>State</label>
                    <input type="text" class="text required" id="s_state" size="4" name="s_state" value=""></input>
                </div>
                <div class="group j">
                    <label>Postal Code</label>
                    <input type="text" class="text required" id="s_zip" size="9" name="s_zip" value=""></input>
                </div>
            </fieldset>
        </div>

        <div class="group l">
            <button type="" class="submit payment btn-success">Confirm Payment</button>
            <input checked type="checkbox" class="checkbox required" id="agree" name="agree" />
            <label>I have read and agree to the <a class="terms-conditions">Terms & Conditions</a></label>
        </div>
    </form>
</div>




