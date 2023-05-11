<?php
    include("banco/conexao.php");
    include("controls/categoria.php");
    $id=$_GET['id'];
    $categoria=buscar_categoria($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterar.css">

    <title>Alterar categoria</title>
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
        <input type="number" name="id" value="<?=$categoria['id_categoria']?>" readonly>
    </div>
<br>

<div class="input">
        <input type="text" name="desc" value="<?=$categoria['descricao']?>" placeholder="Digite a descrição da categoria">
</div>
<br>

<div class="line"> </div>

<input class="ctn" type="submit" value="Atualizar">

    </form>


    <?php
        if($_POST){
            $id=$_POST['id'];
            $desc=$_POST['desc'];
            if(alterar_categoria($conexao,$desc, $id))
            {
                echo("Alterado com sucesso");
                header("Location: categoria_lista.php");
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