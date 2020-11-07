<?php

try {

    switch($uri_parse)
    {
        case '/':
            echo "sou a tela inicial";
        break;

        case '/produto':       
            include 'Views/modulos/produto/listar_produtos.php';
        break;

        case '/produto/salvar':
            echo "vai salvar um produto";
        break;

        case '/produto/remover':
            echo "vai remover um produto";
        break;

        default:
            echo "Rota inválida";
        break;
    }

} catch(Exception $e) {
    echo "Deu ruim " . $e->getMessage();
}