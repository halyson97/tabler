<?php

require __DIR__.'/vendor/autoload.php';

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

use \App\Entity\Produto;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['descricao'], $_POST['estoque'], $_POST['codigoBarra'], $_POST['valor'])){

        $objProduto = new Produto;

        $objProduto->descricao = $_POST['descricao'];
        $objProduto->valor = $_POST['valor'];
        $objProduto->estoque = $_POST['estoque'];
        $objProduto->codigoBarra = $_POST['codigoBarra'];
        $objProduto->cadastrar();
        
    }
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-produto.php';
include __DIR__.'/includes/footer.php';