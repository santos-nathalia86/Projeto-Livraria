<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista.css">

    <title>Lista Livros</title>
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
            <td class="conteudo">Editora</td>
            <td class="conteudo">Categoria</td>
            <td class="conteudo">Autor</td>
            <td class="conteudo">Título</td>
            <td class="acao">Quantidade</td>
            <td class="acao">Alterar</td>
            <td class="acao">Excluir</td>
        </tr>

    <?php
        include("banco/conexao.php");
        include("controls/livro.php");
        $livros=listar_livro($conexao);
        foreach ($livros as $livro):
    ?>

        <tr>
            <td class="conteudo"><?=$livro['id_livro'] ?></td>
            <td class="conteudo"><?=$livro['editora'] ?></td>
            <td class="conteudo"><?=$livro['categoria'] ?></td>
            <td class="conteudo"><?=$livro['autor'] ?></td>
            <td class="conteudo"><?=$livro['titulo'] ?></td>
            <td class="conteudo"><?=$livro['qtd'] ?></td>
            <td class="acao"><a href="livro_alterar.php?id=<?=$livro['id_livro']?>">Alterar</a></td>
            <td class="acao"><a href="livro_excluir.php?id=<?=$livro['id_livro']?>">Excluir</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>