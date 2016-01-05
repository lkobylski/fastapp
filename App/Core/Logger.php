<?php

namespace Core;


class Logger
{

	private static $path;

	public function __construct()
	{
		self::$path = APPLICATION_PATH."App/Logs/";
	}

	public static function log($name, $message)
	{
		$fileName = self::$path.$name.'-'.date('d-m-Y').'.log';
		$message = $message."\n";
		
		if(!file_exists($fileName)){
			 $f = fopen($fileName, "a+");
			 file_put_contents($fileName, $message);
		}
		else{

			$content =  file_get_contents($fileName);
			file_put_contents($fileName, $content.$message);
		}

	}

}