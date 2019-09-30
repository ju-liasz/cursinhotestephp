<?php 
        $nomeSistema = "Lia de Oliveira";
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
            <li class="nav-item">
                <a class = "nav-link" href=#> Cursos </a>
            </li>
            <li class="nav-item"> 
                <a class = "nav-link" href=#> Login </a>
            </li>
            <li class="nav-item"> 
                <a class = "nav-link" href=#> Cadastrar </a>
            </li>
        </ul>
        </nav>
 </header>
 <main>
 <section class= "container">
    <div class= "row justify-content-around">
        <div class = "col-lg-3 card text-center">
        <h2 class = "h5" >Livro "Dusk Till Dawn" </h2>
         <img src = "dtd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                 <h5 class="card-title">R$15,00</h5>
                          <a href="#" class="btn btn-primary">BUY</a>
            </div>
        </div>

     <div class = "col-lg-3 card text-center">
        <h2 class = "h5" >Livro "Dusk Till Dawn" </h2>
         <img src = "dtd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                 <h5 class="card-title">R$15,00</h5>
                          <a href="#" class="btn btn-primary">BUY</a>
            </div>
        </div>


         <div class = "col-lg-3 card text-center">
        <h2 class = "h5" >Livro "Dusk Till Dawn" </h2>
         <img src = "dtd.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                 <h5 class="card-title">R$15,00</h5>
                          <a href="#" class="btn btn-primary">BUY</a>
            </div>
        </div>


    </div>
 </section>

</body>
</html>"