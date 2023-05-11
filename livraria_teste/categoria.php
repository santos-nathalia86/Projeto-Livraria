<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teste1.css">

    <title>Categoria</title>
</head>

<body>
<nav class="navbar">
        <h1 class="logo"> LIVRARIA </h1>
        <ul class="nav-link">
            <li> <a href="paginainicial.html"> HOME </a>  </li>
            <li> <a href="autores.php"> AUTORES </a>  </li>
            <li> <a href="editora.php"> EDITORAS </a>  </li>
            <li> <a href="categoria.php"> CATEGORIAS </a>  </li>
            <li> <a href="livro.php"> LIVROS </a>  </li>
            <li class="ctn"> <a href="contato.html"> CONTATO  </a>  </li>

        </ul>
    </nav> 
    <form action="" method="post">
        <center>
        <div class="img-box">
      <img src="img/la.jpeg" alt="">
    </div>
        <div class="input">
        <input type="text" name="descricao" placeholder="Digite a descrição da categoria">
        </div>
        <input class="ctn" type="submit" value="Cadastrar">
        <div class="line"> </div>

         <a href="categoria_lista.php"> EXIBIR </a>  
         <BR></BR>
        </form>
</form>
<?php
    include("banco/conexao.php");
    include("controls/categoria.php");
        if($_POST) {
            $descricao=$_POST['descricao'];
            if(inserir_categoria($conexao,$descricao)){
                echo("Cadastrado com sucesso");
            }
            else{
                $msg=mysqli_error($conexao);
                echo ($msg);
            }
        }
    ?>
    
</body>
</html>