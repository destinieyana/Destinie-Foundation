<?php

session_start();

require __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/vendor/authorizenet/authorizenet/AuthorizeNet.php';

$localConfig = require('./config/local.php');

define('ROOT_URL', $localConfig['root_url']);
define('ENVIRONMENT', 'development');
define('FULL_URL', 'localhost:8888');
?>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
