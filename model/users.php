<?php

class Users extends Model {
	public function getAll()
	{
		$result		=	$this->db->query('SELECT * FROM urunler')->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}