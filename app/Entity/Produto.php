<?php

namespace App\Entity;

use \App\Db\Database;

class Produto{

	public $idprodutos;
	public $descricao;
	public $valor;
	public $estoque;
	public $codigoBarra;
	public $status;
	public $createdAt;
	public $updatedAt;

	public function cadastrar(){

		$uuid = md5(uniqid(rand(), true));

		$this->idprodutos = $uuid;
		$this->createdAt = date('Y-m-d H:i:s');
		$this->updatedAt = date('Y-m-d H:i:s');

		$obDatabase = new Database('produtos');
		
		echo "<pre>Tudo certo</pre>";

		return true;
	}
}