<?php

namespace Core;
/**
 * Debug clas
 */
class Debug{
	
	/**
	 * Print variable content
	 */
	public static function pr($content)
	{
		echo '<pre>'.print_r($content, 1).'</pre>';
	}

}