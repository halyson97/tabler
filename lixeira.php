<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProdutos('status = "inativo"');

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

console_log($produtos);


include __DIR__.'/includes/header.php';
include __DIR__.'/includes/lixeira.php';
include __DIR__.'/includes/footer.php';