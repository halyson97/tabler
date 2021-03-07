<?php

require __DIR__.'/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method

    if(isset($_POST['descricao'], $_POST['estoque'], $_POST['codigoBarras'], $_POST['valor'])){
        die('Cadastrar');
    }
}



include __DIR__.'/includes/header.php';
include __DIR__.'/includes/form-produto.php';
include __DIR__.'/includes/footer.php';