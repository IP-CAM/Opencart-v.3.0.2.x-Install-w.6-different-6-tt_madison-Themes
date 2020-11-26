<?php
// Version
define('VERSION', '3.0.2.0');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('https://bffkantho.herokuapp.com/catalog/')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once('/system/startup.php');

start('catalog');