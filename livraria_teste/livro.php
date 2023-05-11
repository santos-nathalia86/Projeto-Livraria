<?php
    include("banco/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/livro.css">

    <title>Livros</title>
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
        <select name="autor">
           <option value="">Autor</option>
        <?php
            include("controls/autor.php");
            $autores=listar_autor($conexao);
            foreach ($autores as $a) :
                echo "<option value=".$a['id_autor'].">". $a['nome']."</option>";
            endforeach;
        ?>
        </select>

<br>
        <select name="categoria">
            <option value="">Categoria</option>
        <?php
            include("controls/categoria.php");
            $categorias=listar_categoria($conexao);
            foreach ($categorias as $c) :
                echo "<option value=".$c['id_categoria'].">". $c['descricao']."</option>";
            endforeach;
        ?>
        </select>

<br>

        <div class="input">
        <select name="editora">
            <option value="">Editora</option> </div>
        <?php
            include("controls/editora.php");
            $editoras=listar_editora($conexao);
            foreach ($editoras as $e) :
                echo "<option value=".$e['id_editora'].">". $e['descricao']."</option>";
            endforeach;
        ?>
        </select>

<br>

        <input type="text" name="titulo" placeholder="Titulo" id="">

<br>

        <input type="number" name="qtd" id="" placeholder="Quantidade">

<br>

<input 
style="text-align: center;     font-size: 20px;
 background-color: rgba(218, 50, 134, 0.515);     
 padding: 8px 5px;
    border-radius: 30px;
    width: 100%;
    margin-top: 15px;
    color: black;
    cursor: pointer;
    font-size: 20px;" 
    type="submit" value="Cadastrar">
        <div class="line"> </div>
        <a href="lista_livro.php"> EXIBIR </a>  
        <br> <br>

    </form>


    <?php
    include("controls/livro.php");
        if($_POST){
            $editora=$_POST['editora'];
            $categoria=$_POST['categoria'];
            $autor=$_POST['autor'];
            $titulo=$_POST['titulo'];
            $qtd=$_POST['qtd'];
            if(inserir_livro($conexao,$editora, $categoria, $autor, $titulo, $qtd))
            {
                echo("Cadastrado com sucesso");
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