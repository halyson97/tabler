<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProdutos('status = "ativo"');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/venda.php';
include __DIR__.'/includes/footer.php';