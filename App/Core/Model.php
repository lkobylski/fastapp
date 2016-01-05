<?php
namespace Core;

use Core\Database;

class Model
{
	protected $db;

	private $table  = '';

	public function __construct($table = '')
	{
		if($table){
			$this->table = $table;
		}
		$this->db = Database::get();
	}

	public function setTable($name){
		$this->table = $name;
	}

	public function getTable()
	{
		return $this->table;
	}
}