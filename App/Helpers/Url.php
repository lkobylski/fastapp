<?php

namespace Helpers;

class Url
{

	public static function redirect($url)
	{
		$url = "/".$url;
		
		header("Location: ".$url);
	}

	
	public static function templatePath($custom = false)
    {
        if ($custom == true) {
            return DIR.'App/resources/templates/'.$custom.'/';
        } else {
            return DIR.'App/resources/templates/'.TEMPLATE.'/';
        }
    }
}