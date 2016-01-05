<?php

/**
 * View
 */
 

 namespace Core;


 class View
 {
 	private static $headers = array();

 	public static function render($path, $data = false)
 	{
 		require APPLICATION_PATH.'App/resources/views/'.$path.'.php';
 	}

 	public static function renderModule($module, $path, $data = false)
 	{
 		require APPLICATION_PATH.'App/Modules/'.$module.'/resources/views/'.$path.'.php';
 	}


 	public static function renderTemplate($path, $data = false, $custom = false)
 	{
 		if($custom){
 			require APPLICATION_PATH.'App/resources/templates/'.$custom.'/'.$path.'.php';	
 		}else{
 			require APPLICATION_PATH.'App/resources/templates/'.TEMPLATE.'/'.$path.'.php';	
 		}
 		
 	}
 }