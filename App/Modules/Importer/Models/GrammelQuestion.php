<?php

namespace Modules\Importer\Models;

use Core\Model;

class GrammelQuestion extends Model{

	public function update($data, $where){
		return $this->db->update($this->getTable(), $data, array('date' => $where));
	}
}