<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lista.css">

    <title>Editoras</title>
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
            <td class="conteudo">Descrição</td>
            <td class="acao">Alterar</td>
            <td class="acao">Excluir</td>
        </tr>
       

        <?php
            include("banco/conexao.php");
            include("controls/editora.php");
            $editoras=listar_editora($conexao);
            foreach ($editoras as $editora):
        ?>

        <tr>
        <tr>
            <td class="conteudo"><?=$editora['id_editora'] ?></td>
            <td class="conteudo"><?=$editora['descricao'] ?></td>
          
            <td><a href="editora_update.php?id=<?=$editora['id_editora']?>">Alterar</a></td>
            <td><a href="editora_excluir.php?id=<?=$editora['id_editora']?>">Excluir</a></td>
        <?php endforeach; ?>
    </table>
</body>
</html>