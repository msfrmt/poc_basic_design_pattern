<?php 

require_once('Logger.php');
require_once('Registry.php');

Registry::set('logger', new Logger());

$logger = Registry::get('logger');

$logger->log("data");