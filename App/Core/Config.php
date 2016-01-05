<?php

/**
 * Main Config
 */
namespace Core;

class Config
{

	public function __construct()
	{

		ob_start();

		define('DIR', '/');

		define('DEFAULT_CONTROLLER', 'index');

		define('DEFAULT_METHOD', 'index');

		define('TEMPLATE', 'default');

		define('DB_TYPE', 'mysql');

		define('DB_HOST', 'localhost');

		define('DB_NAME', 'fastapp');

		define('DB_USER', 'root');

		define('DB_PASS', 'root');

		define('LOG_SQL', true);


	}

}