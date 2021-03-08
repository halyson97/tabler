<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use \App\Entity\Venda;

$quantidadeProdutos = Produto::count('status = "ativo"');

$quantidadeVendas = Venda::count();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/home.php';
include __DIR__.'/includes/footer.php';