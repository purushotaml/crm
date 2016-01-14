<?php
/** This is a bootstrap file for PHPUnit which is used to set 
 *  application path. environment and autoloaders 
 */
ini_set ( 'session.gc_maxlifetime', '259200');
ini_set ('max_execution_time', 300);
ini_set('memory_limit', '-1');

date_default_timezone_set('UTC');
error_reporting(E_ALL ^ E_NOTICE);

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../src'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'unittest'));