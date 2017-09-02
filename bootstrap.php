<?php

session_start();

$localConfig = require('./config/local.php');

define('ROOT_URL', $localConfig['root_url']);
