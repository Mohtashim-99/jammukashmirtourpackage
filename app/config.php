<?php
// Load environment variables from .env file
require_once ($_SERVER['DOCUMENT_ROOT'] . '/app/vendor/autoload.php');
Dotenv\Dotenv::createImmutable(__DIR__)->load();

// Mail Configuration from .env
define('MAIL_HOST', $_ENV['MAIL_HOST']);
define('MAIL_USERNAME', $_ENV['MAIL_USERNAME']);
define('MAIL_PASSWORD', $_ENV['MAIL_PASSWORD']);
define('MAIL_PORT', $_ENV['MAIL_PORT']);
define('MAIL_RECEIVE',$_ENV['MAIL_RECEIVE']);
?>