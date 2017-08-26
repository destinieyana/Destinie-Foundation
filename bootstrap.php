<?php

echo "BOOTSTRAPPED!\n";

$localConfig = require('./config/local.php');

define('ROOT_URL', $localConfig['root_url']);
