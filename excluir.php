<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;


function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

if(!isset($_GET['id'])){
  header('location: produtos.php?status=error');
  exit;
}

$objProduto = Produto::getProduto($_GET['id']);

if(!$objProduto instanceof Produto){
  header('location: produtos.php?status=error');
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST['excluir'])){
        
        $objProduto->excluir();
    
      header('location: produtos.php?status=success');
      exit;
    }

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';