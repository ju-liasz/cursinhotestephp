<?php 
        $nomeSistema = "Lia de Oliveira";
        $usuario = ["nome" => "Julia"];

        $produtos = [
            ["nome" => "Dusk Till Dawn", "preco" => "R$30,00", "Autor" => "Lia de Oliveira", "img" => "dtd.jpg"],
            ["nome" => "Flutuante", "preco" => "R$20,00", "Autor" => "Lia de Oliveira", "img" => "flutuante.jpg"],
        ];
        $categorias = ["Livros", "Online", "Doe"]


        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Lojinha</title>
</head>
<body>
    <header class = "navbar">
        <h1 id = "logo">
         <?php echo $nomeSistema; ?>
        </h1>
        <nav> 
        <ul class = "nav">
            <?php if(isset($usuario) && $usuario != ""){ ?>
                <li class="nav-item"> 
                <a class = "nav-link" href=#> Cursos </a>
                </li>
                <li class="nav-item"> 
                <a class = "nav-link" href=#> Olá <?php echo $usuario["nome"] ?> </a>
                </li>
            <?php } else { ?>


            <li class="nav-item"> 
                <a class = "nav-link" href=#> Login </a>
            </li>
            <li class="nav-item"> 
                <a class = "nav-link" href=#> Cadastrar </a>
            </li>
                <?php } ?>

        </ul>
        </nav>
 </header>
 <main>
    <nav class="navbar bg-dark">
    <ul class = "nav">
    <?php foreach ($categorias as $categoria) { ?>
                <li class="nav-item">
                 <a href="" class="nav-link text-white"><?php echo $categoria; ?></a>
                </li>
    <?php } ?>
    </ul>
    </nav>
    <section class = "container" >
    <div class = "row">
    <div class = "col-12">
    <h1>Carrinho de compras</h1>
    </div>
    <div class = "col-12">
    <div class = "row card">
    <div class= "col-12">
    <h3>Você está comprando o livro <?php echo $_GET [ 'nomeProduto']; ?> </h3>
    </div>
    <div class = "col-lg-6  col-md-6">
    <form method= "post" action = "sucesso.php" class="d-flex flex-column p-3">
    <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
    <input type="text" name="cpf" placeholder="Digite seu CPF">
    <input type ="number" name = "cartão" placeholder= "Digite o número do cartão">
    <input type= "date" name = "validarCartao" placeholder = "Digite a data de validade">
    <input type = "password" name = "codigoCartao" placeholder = "Digite o CV.">
    <button type="submit" class = "btn btn-success">Enviar</button>
    </form>
    </div>  
    </div>
    </div>
    </div>
</main>
</body>
</html>