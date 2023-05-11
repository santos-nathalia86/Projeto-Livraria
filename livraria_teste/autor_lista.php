<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista.css">

    <title>Categorias</title>
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
    <table>
        <tr>
            <td class="conteudo">ID</td>
            <td class="conteudo">Nome</td>
            <td class="acao">Alterar</td>
            <td class="acao">Excluir</td>
        </tr>
        <br>
       

        <?php
            include("banco/conexao.php");
            include("controls/autor.php");
            $autores=listar_autor($conexao);
            foreach ($autores as $autor):
        ?>

        <tr>
        <tr>
            <td class="conteudo"><?=$autor['id_autor'] ?></td>
            <td class="conteudo"><?=$autor['nome'] ?></td>
            <td class="acao"><a href="autor_altera.php?id=<?=$autor['id_autor']?>">Alterar</a></td>
            <td class="acao"><a href="autor_excluir.php?id=<?=$autor['id_autor']?>">Excluir</a></td>
         </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>