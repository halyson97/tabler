<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use \App\Entity\Venda;

$produtos = Produto::getProdutos('status = "ativo"');

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    if(isset($_POST['produto'], $_POST['quantidade'], $_POST['valor'])){
        
        console_log('fazendo request post');
    
        console_log($_POST['produto']);
        console_log($_POST['quantidade']);
        console_log($_POST['valor']);
        console_log($_POST['atualizarProduto']);

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