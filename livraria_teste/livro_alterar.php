<?php
    include("banco/conexao.php");
    include("controls/livro.php");
    $id = $_GET['id'];
    $livro = buscar_livro($conexao, $id);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterar.css">

    <title>Alterar livro</title>
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
        <input type="number" name="id" value="<?= $livro['id_livro'] ?>" readonly>
    </div>
<br>

<div class="input">
        <select  style="
    width: 100%;
    height: 40px;
    background-color: rgba(158, 20, 89, 0.648);
    border-radius: 20px;
    outline: none;
    border: none;
    text-align: center;
    margin-top: 0px;
    color: Black;
    cursor: pointer;
    font-size: 15px;" name="autor">
</div>

        <?php
            include("controls/autor.php");
            $autores = listar_autor($conexao);
            foreach ($autores as $a) :
            echo "<option value=" . $a['id_autor'] . ">" . $a['nome'] . "</option>";
            endforeach;
        ?>
     </select>

<br>

    <select style="
    width: 100%;
    height: 40px;
    background-color: rgba(158, 20, 89, 0.648);
    border-radius: 20px;
    outline: none;
    border: none;
    text-align: center;
    margin-top: 15px;
    color: Black;
    cursor: pointer;
    font-size: 15px;" name="categoria">

        <?php
            include("controls/categoria.php");
            $categorias = listar_categoria($conexao);
            foreach ($categorias as $c) :
            echo "<option value=" . $c['id_categoria'] . ">" . $c['descricao'] . "</option>";
            endforeach;
        ?>
    </select>

<br>

    <select  style="
    width: 100%;
    height: 40px;
    background-color: rgba(158, 20, 89, 0.648);
    border-radius: 20px;
    outline: none;
    border: none;
    text-align: center;
    margin-top: 15px;
    color: Black;
    cursor: pointer;
    font-size: 15px;" name="editora">


        <?php
            include("controls/editora.php");
            $editoras = listar_editora($conexao);
            foreach ($editoras as $e) :
            echo "<option value=" . $e['id_editora'] . ">" . $e['descricao'] . "</option>";
            endforeach;
        ?>
    </select>

<br>

        <input type="text" name="titulo" placeholder="Titulo" id="" value="<?= $livro['titulo'] ?>">

<br>

        <input type="number" name="qtd" id="" placeholder="quantidade" value="<?= $livro['qtd'] ?>">
<br>

        <input
        style="
    padding: 8px 5px;
    background-color:  rgba(255, 253, 254, 0.086);
    border-radius: 30px;
    width: 100%;
    margin-top: 15px;
    color: black;"
        type="submit" value="Atualizar">
    </form>


    <?php
        if ($_POST) {
            $id=$_POST['id'];
            $editora=$_POST['editora'];
            $categoria=$_POST['categoria'];
            $autor=$_POST['autor'];
            $titulo=$_POST['titulo'];
            $qtd=$_POST['qtd'];
            if(alterar_livro($conexao,$editora, $categoria, $autor, $titulo, $qtd, $id))
            {
                echo ("Alterado com sucesso");
                header("Location: lista_livro.php");
            } 
            else {
                $msg = mysqli_error($conexao);
                echo ($msg);
            }
        }
    ?>
    
</body>
</html>