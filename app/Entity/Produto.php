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

		$objDatabase = new Database('produtos');
		$objDatabase->insert([
			'idprodutos' => $this->idprodutos,
			'descricao' => $this->descricao,
			'valor' => $this->valor,
			'estoque' => $this->estoque,
			'createdAt' => $this->createdAt,
			'updatedAt' => $this->updatedAt,
			'codigo_barra' => $this->codigoBarra
		]);
		
		return true;
	}
}