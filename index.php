<?php 
       require('config/variaveis.php');



        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $nomeSistema ?></title>
</head>
<body>
    <header class = "navbar">
        <h1 id = "logo">
         <?php echo $nomeSistema; ?>
        </h1>
        <nav> 
        <ul class = "nav">
            <?php if(isset($usuario) && $usuario != []){ ?>
                <li class="nav-item">
            <a href="" class="link-nav">Cursos</a>
            </li>
            <li class="nav-item">
            <a href="" class="link-nav">Olá Usuario <?php echo $usuario ?></a>
            </li>
            <li class = "nav-item">
             <a href="sair.php" class = "nav-link"> Sair </a> </li>
            <?php } else { ?>


            <li class="nav-item"> 
                <a class = "nav-link" href="login.php"> Login </a>
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
         <img src = "<?php echo $produto ['img'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                 <h6 class = "card - title"><?php echo $produto['preco']; ?> </h6>
                          <a href="carrinho.php?nomeProduto=<?php echo $produto ['nome'] ?>"  class="btn btn-primary">BUY</a>
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