<?php

namespace Modules\Importer\Models;

use Core\Model;

class VtechQuestion extends Model{

	private $table = 'nbadvent_question';


	public function updateQuestion($data, $where){
		return $this->db->update($this->table, $data, array('date' => $where));
	}
}