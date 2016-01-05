<?php

namespace Modules\Importer\Models;

use Core\Model;

class VtechPrize extends Model{

	private $table = 'nbadvent_prize';


	public function updatePrize($data, $where){
		return $this->db->update($this->table, $data, array('id' => $where));
	}
}