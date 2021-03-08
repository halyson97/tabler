<?php

namespace App\Db;

require _.'../../config/config.php';

use \PDO;
use \PDOException;

class Database{

	private $table;
	private $connection;

	public function __construct($table = null){
		$this->table = $table;
		$this->setConnection();
	}

	private function setConnection(){
		try{
			$this->connection = new PDO('mysql:host='.getenv('HOST').';dbname='.getenv('NAME'),getenv('USER'),getenv('PASS'));
			$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			// die('ERROR: '.$e->getMessage());
		}
	}

}