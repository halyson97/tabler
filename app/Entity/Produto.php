<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

class Produto{

	public $idprodutos;
	public $descricao;
	public $valor;
	public $estoque;
	public $codigo_barra;
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
			'codigo_barra' => $this->codigo_barra
		]);
		
		return true;
	}

	public function atualizar(){
		return (new Database('produtos'))->update('idprodutos = "'.$this->idprodutos.'"',[
																					'descricao' => $this->descricao,
																					'valor' => $this->valor,
																					'estoque' => $this->estoque,
																					'updatedAt' => $this->updatedAt,
																					'codigo_barra' => $this->codigo_barra,
																					'status' => $this->status
																				]);
	}

	public function excluir(){
		$this->updatedAt = date('Y-m-d H:i:s');
		$this->status = 'lixeira';
		return $this->atualizar();
	}

	public static function getProdutos($where = null, $order = null, $limit = null){
		return (new Database('produtos'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
	}

	public static function getProduto($id){
		return (new Database('produtos'))->select('idprodutos = "'.$id.'"')
									  ->fetchObject(self::class);
	}
}