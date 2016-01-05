<?php

namespace Core;

use Core\View;

abstract class Controller
{
	public $view;

	/**
	 * Implement langs in the feature;
	 */
	public $language;

	public function __construct()
	{
		$this->view = new View();
	}
}