<?php

session_start (); 
    $nomeSistema = "Lia de Oliveira";
    $usuario = isset ($_SESSION['nome'])? $_SESSION ['nome']: "";

$nomeArquivo = __DIR__."/../produtos.json"; 
$produtos = json_decode (file_get_contents ($nomeArquivo), true);
$categorias = ["Livros", "Online", "Doe"]


// $produtos = [
//     ["nome" => "Dusk Till Dawn", "preco" => "R$30,00", "Autor" => "Lia de Oliveira", "img" => "dtd.jpg"],
//     ["nome" => "Flutuante", "preco" => "R$20,00", "Autor" => "Lia de Oliveira", "img" => "flutuante.jpg"],
// ];

    ?>
    