<?php 
        $nomeSistema = "Lia de Oliveira";
        //$usuario = ["nome" => "Julia"];

        $produtos = [
            ["nome" => "Dusk Till Dawn", "preco" => "R$30,00", "Autor" => "Lia de Oliveira"],
            ["nome" => "Flutuante", "preco" => "R$20,00", "Autor" => "Lia de Oliveira"],
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
            <a href="" class="link-nav">Cursos</a>
            </li>
            <li class="nav-item">
            <a href="" class="link-nav">Olá Usuario</a>
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

 <section class= "container">
    <div class= "row justify-content-around">
    <?php if(isset($produtos) && $produtos != []) { ?>
    <?php foreach($produtos as $produto) { ?>
        <div class = "col-lg-3 card text-center">
        <h5> <?php echo $produto['nome']; ?> </h5>
         <img src = "dtd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                 <h6 class = "card - title"><?php echo $produto['preco']; ?> </h6>
                          <a href="#" class="btn btn-primary">BUY</a>
            </div>
        </div>
        <!-- Fechando o php do foreach -->
    <?php } ?>
    <!--fechando o if em! -->
    <?php } else { ?>
            <h1 class: class="text-danger"> Não tem livros nessa sessão :( </h1>
            <?php } ?>
    </div>
 </section>

</body>
</html>