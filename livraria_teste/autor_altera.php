<?php
    include("banco/conexao.php");
    include("controls/autor.php");
    $id=$_GET['id'];
    $autor=buscar_autor($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterar.css">

    <title>Alterar autor</title>
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
    <div class="input">
        <input type="number" name="id" value="<?=$autor['id_autor']?>" readonly>
    </div>
<br>

        <div class="input">
        <input type="text" name="nome" value="<?=$autor['nome']?>"placeholder="Digite o nome do autor">
        </div>
<br>

        <div class="line"> </div>

        <input class="ctn" type="submit" value="Alterar">
    </form>


    <?php
        if($_POST){
            $id=$_POST['id'];
            $nome=$_POST['nome'];
            if(alterar_autor($conexao,$nome, $id))
            {
                echo("Alterado com sucesso");
                header("Location: autor_lista.php");
            }
            else
            {
                $msg=mysqli_error($conexao);
                echo ($msg);
            }
        }
    ?>
    
</body>
</html>