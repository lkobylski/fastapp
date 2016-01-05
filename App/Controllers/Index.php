<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Index extends Controller
{

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		View::renderTemplate('header');
		View::render('index/index');
		View::renderTemplate('footer');
		
	}
}