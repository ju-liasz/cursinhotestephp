<?php require ("variaveis.php");
$usuario = ["email" => "julia@gmail.com","senha" => '$2y$10$pk3Ox7YvufqKVkVYvM80meLOfezqPy4AsKQ6pw4qInRfbNg55pMTS' ];
 
if($_POST) {
    $email = $_POST ['email']; 
    $senha = $_POST ['senha'];

    if($email == $usuario ['email']) {

        if(password_verify ($senha, $usuario ['senha'])) {
            session_start ();
            $_SESSION ['usuario'] = ['nome' => 'vitor '];
            header ('Location: index.php');

        }else {
            echo "Email ou senha inválidos";
        }

    }else {
        echo "Email ou senha inválidos";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
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
    <main class="d-flex justify-content-center align-items-center p-5">
    <form action= "login.php" method= "post" class= "card p-5" >
        <div class= "form-group">
                <label for = "email"> Email </label>
                <input type="email" name= "email" id = "email" class="form-control" require>
                <label for = "senha"> senha </label>
                <input type="password" name= "senha" id = "senha" class="form-control" require>
        </div>
        <div class = "form-group text-center">
                <button class = "btn btn-success" type = "submit"> Logar </button> 
         </div>
    </form>
    </main>
</body>
</html> 