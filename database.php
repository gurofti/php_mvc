<?php

class Database {

	protected $db;

	public function __construct()
	{
		try {
			$this->db 	=	new PDO('mysql:host=localhost;dbname=sayfalama', 'root', '');
		} catch (PDOException $e) {
			echo $e->getMessage();			
		}

	}
}