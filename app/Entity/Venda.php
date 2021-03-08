<?php

namespace App\Entity;

use \App\Db\Database;
use \App\Entity\Produto;
use \PDO;

class Venda{

	public $idvendas;
	public $produto;
	public $valor_unitario;
	public $valor_total;
	public $status;
	public $produtos_idprodutos;
	public $createdAt;
	public $updatedAt;

	public function cadastrar(){

		$uuid = md5(uniqid(rand(), true));

		$this->idvendas = $uuid;
		$this->createdAt = date('Y-m-d H:i:s');
		$this->updatedAt = date('Y-m-d H:i:s');

		$objDatabase = new Database('vendas');
		$objDatabase->insert([
			'idvendas' => $this->idvendas,
			'valor_unitario' => $this->valor_unitario,
			'quantidade' => $this->quantidade,
			'valor_total' => $this->quantidade * $this->valor_unitario,
			'createdAt' => $this->createdAt,
			'updatedAt' => $this->updatedAt,
            'produtos_idprodutos' => $this->produtos_idprodutos
		]);
		
		return true;
	}

	public static function getVendas($where = null, $order = null, $limit = null){
		return (new Database('vendas'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
	}

}