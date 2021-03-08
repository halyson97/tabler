<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use \App\Entity\Venda;

$produtos = Produto::getProdutos('status = "ativo" and estoque >= 0');

$vendas = Venda::getVendas();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    if(isset($_POST['produto'], $_POST['quantidade'], $_POST['valor'])){

        $isAtualizaProduto = $_POST['atualizarProduto'];


        $objVenda = new Venda;

        $objVenda->quantidade = $_POST['quantidade'];
        $objVenda->valor_unitario = $_POST['valor'];
        $objVenda->produtos_idprodutos = $_POST['produto'];
        $objVenda->cadastrar($isAtualizaProduto);

        header('location: venda.php?status=success');
        exit;
    }
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/venda.php';
include __DIR__.'/includes/footer.php';