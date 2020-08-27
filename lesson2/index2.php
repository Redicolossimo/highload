<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('./vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

// add records to the log
$log->warning('War');
$log->error('Err');