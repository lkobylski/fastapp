<?php

namespace Modules\Importer\Controllers;

use Core\View;
use Core\Controller;
use Core\Router;

use Modules\Importer\Reader\Europapark;
use Modules\Importer\Reader\EuropaparkPrizes;
use Modules\Importer\Reader\Vtech;
use Modules\Importer\Reader\Grammel;

class Index extends Controller
{

	public function __construct(){
		parent::__construct();

	}

	public function routes()
	{
		Router::any('importer', 'Modules\Importer\Controllers\Index@index');
		Router::any('importer/prize', 'Modules\Importer\Controllers\Index@prize');
		Router::any('importer/vtech', 'Modules\Importer\Controllers\Index@vtech');
		Router::any('importer/vtech/prizes', 'Modules\Importer\Controllers\Index@vtechPrizes');
		Router::any('importer/grammel', 'Modules\Importer\Controllers\Index@grammel');
		Router::any('importer/grammel/questions', 'Modules\Importer\Controllers\Index@grammelQuestions');
	}

	public function index()
	{
		
		//$reader = new Europapark(APPLICATION_PATH.'App/Modules/Importer/Reader/Questions_en.xlsx');
		$reader = new EuropaparkPrizes(APPLICATION_PATH.'App/Modules/Importer/Reader/Prizes_en.xlsx');
		//$reader->readQuestions();
		$reader->readConfig();

		View::renderTemplate('header');
			echo "Import Questions";
		View::renderModule('Importer','index/index');
		View::renderTemplate('footer');
		
	}

	public function prize()
	{
		View::renderTemplate('header');
		//$reader = new EuropaparkPrizes(APPLICATION_PATH.'App/Modules/Importer/Reader/Gutscheine2015.xlsx');
		//$reader->readConfig();
		//$reader->update();
		echo 'Prize import';
		View::renderTemplate('footer');
	}


	public function vtech()
	{
		View::renderTemplate('header');
		echo 'vtech - import questinos';	
		$reader = new Vtech(APPLICATION_PATH.'App/Modules/Importer/Reader/Fragen_vtech.xlsx');
		$reader->readQuestions();
		View::renderTemplate('footer');
	}

	public function vtechPrizes()
	{
		View::renderTemplate('header');
		echo 'vtech - import prizes';	
		$reader = new Vtech(APPLICATION_PATH.'App/Modules/Importer/Reader/Gewinne2_vtech.xlsx');
		$reader->readPrizes();
		View::renderTemplate('footer');
	}

	public function grammel()
	{
		View::renderTemplate('header');
		echo 'Grammel importer';			
		View::renderTemplate('footer');
	}

	public function grammelQuestions()
	{
		View::renderTemplate('header');
		echo 'Grammel - question importer';			
		$reader = new Grammel(APPLICATION_PATH.'App/Modules/Importer/Reader/Grammel_questions.xlsx');
		$reader->readQuestions();
		View::renderTemplate('footer');
	}




}