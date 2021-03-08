<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;

$produtos = Produto::getProdutos('status = "inativo"');

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/lixeira.php';
include __DIR__.'/includes/footer.php';