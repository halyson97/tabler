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
			// TODO: salvar e tratar erros
			// die('ERROR: '.$e->getMessage());
			die('Error');
		}
	}

	public function execute($query,$params = []){
		try{
			$statement = $this->connection->prepare($query);
			$statement->execute($params);
			return $statement;
		}catch(PDOException $e){
			// TODO: salvar e tratar erros
		  	// die('ERROR: '.$e->getMessage());
			die('Error');
		}
	}

	public function insert($values){
		$fields = array_keys($values);
		$binds  = array_pad([],count($fields),'?');
	
		$query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

		$this->execute($query,array_values($values));
	
		return true;
	}

	public function select($where = null, $order = null, $limit = null, $fields = '*', $join = null){
		$where = strlen($where) ? 'WHERE '.$where : '';
		$order = strlen($order) ? 'ORDER BY '.$order : '';
		$limit = strlen($limit) ? 'LIMIT '.$limit : '';
		$join = strlen($join) ? 'INNER JOIN '.$join : '';
	
		$query = 'SELECT '.$fields.' FROM '.$this->table.' '.$join.' '.$where.' '.$order.' '.$limit;

		console_log($query);
	
		return $this->execute($query);
	}

	public function update($where,$values){
		$fields = array_keys($values);
	
		$query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;
	
		$this->execute($query,array_values($values));
	
		return true;
	}

}