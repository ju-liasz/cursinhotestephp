<?php 
   function cadastroProduto ($nome, $descricao, $img, $price) {
       $nomeArquivo = "produtos.json";
       
       if(file_exists($nomeArquivo)){
           // abrindo e pegando informações do arquivo
           $arquivo = file_get_contents ($nomeArquivo);
           $produtos = json_decode ($arquivo, true);
           $produtos[] = [
            "nome" => $nome,
            "descricao"=> $descricao,
            "img"=> $img,
            "price"=> $price,

        ];
        $json = json_encode ($produtos); 
        $erro = file_put_contents ($nomeArquivo, $json);

        if ($erro) {
            return "Deu certo brother!";
        } else {
            return "Não deu bom!";
        }

        

       }else{
           $produtos = [];
        //    array_push()
        $produtos[] = [
            "nome" => $nome,
            "descricao"=> $descricao,
            "img"=> $img,
            "price"=> $price,

        ];
        $json = json_encode ($produtos);
        $erro = file_put_contents ($nomeArquivo, $json);

        if ($erro) {
            return "Deu certo brother!";
        } else {
            return "Não deu bom!";
        }
       }
   }
   if($_POST){


$nomeImg = $_FILES [ "img"] ["name"]; 
$localTmp = $_FILES ["img"] ["tmp_name"]; 
$caminhoSalvo = 'img/' .$nomeImg; 

$deuCert = move_uploaded_file ($localTmp, $caminhoSalvo);
exit;

    echo cadastroProduto($_POST["nome"], $_POST["descricao"], $_POST["img"], $_POST["price"]);
   };
?>
<?php 
        $nomeSistema = "Lia de Oliveira";
        //$usuario = ["nome" => "Julia"];

        $produtos = [
            ["nome" => "Dusk Till Dawn", "preco" => "R$30,00", "autor" => "Lia de Oliveira", "img" => "dtd.jpg"],
            ["nome" => "Flutuante", "preco" => "R$20,00", "autor" => "Lia de Oliveira", "img" => "flutuante.jpg"],
        ];
        $categorias = ["Livros", "Online", "Doe"]


        ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
    <?php echo $title ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body >
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
 <nav class="navbar bg-dark">
      <ul class = "nav">
      <?php foreach ($categorias as $categoria) { ?>
                <li class="nav-item">
                 <a href="" class="nav-link text-white"><?php echo $categoria; ?></a>
                </li>
      <?php } ?>
      </ul>
      </nav>
<main class="container mt-3" >
<div class="row">
 <div class="col-md-8 col-lg-8 ">
     <h2 class="h3">
         Todos os Produtos
     </h2>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">categoria</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
       <?php
        foreach($produtos as $produto){ ?>
    <tr>
        <td> <?php   echo $produto["nome"];?> </td>
        <td> <?php   echo $produto["autor"];?> </td>
        <td> <?php   echo $produto["preco"];?> </td>
        </tr>
           <?php
        }
      ?> 
  </tbody>
</table>
 </div>
 <div class="col-md-4 col-lg-4">
     <h2 class="h3">Cadastrar Produto</h2>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype = "multipart/form-data">
     <div class="form-group">
         <label for="nome">Nome:</label>
         <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do Produto">
     </div>
     <div class="form-group">
         <label for="categoria">Categorias:</label>
         <select class="form-control" id="categoria">
            <?php
                foreach($categorias as $categoria) {
                    ?>
                    <option><?php echo $categoria ?></option>
      
                    <?php
                }
            ?>
        </select>
     </div>
     <div class="form-group">
         <label for="descricao">Descrição:</label>
         <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Produto" >
     </div>
     <div class="form-group">
         <label for="price">Preço:</label>
         <input type="text" name="price" id="price" class="form-control" placeholder="Preço do Produto">
     </div>
     <div class="form-group">
         <label for="img">Foto do Produto:</label>
         <input type="file" name="img" id="img" class="form-control" >
     </div>
     <button type="submit" class="btn btn-success">Cadastrar Produto</button>
     </form>
 </div>
</div>
</main>
</body>
</html>