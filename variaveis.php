<?php

$nomeSistema = "Lia de Oliveira";
$usuario = ["nome" => "Julia"];

$nomeArquivo = "produtos.json"; 
$produtos = json_decode (file_get_contents ($nomeArquivo), true)

// $produtos = [
//     ["nome" => "Dusk Till Dawn", "preco" => "R$30,00", "Autor" => "Lia de Oliveira", "img" => "dtd.jpg"],
//     ["nome" => "Flutuante", "preco" => "R$20,00", "Autor" => "Lia de Oliveira", "img" => "flutuante.jpg"],
// ];
// $categorias = ["Livros", "Online", "Doe"]

    ?>
    