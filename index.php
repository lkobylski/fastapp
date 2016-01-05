<?php
/**
 * FastApp Framework
 * version 0.1
 */
 
 defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__)).'/');


if (file_exists(APPLICATION_PATH.'vendor/autoload.php')) {
    require APPLICATION_PATH.'vendor/autoload.php';
} else {
    echo "<h1>Please install via composer.json</h1>";    
    exit;
}

/**
 * Set application environment 
 */
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

if(!APPLICATION_ENV){
	die('Please set your APPLICATION_ENV value!');
}

if(APPLICATION_ENV == 'development'){
	 error_reporting(E_ALL);
}else {
	 error_reporting(0);
}

new Core\Config();

require APPLICATION_PATH.'App/Core/routes.php';