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
            <td class="conteudo">Descrição</td>
            <td class="acao">Alterar</td>
            <td class="acao">Excluir</td>
        </tr>

        

        <?php
            include("banco/conexao.php");
            include("controls/categoria.php");
            $categorias=listar_categoria($conexao);
            foreach ($categorias as $categoria):

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

        <tr>
            <td class="conteudo"><?=$categoria['id_categoria'] ?></td>
            <td class="conteudo"><?=$categoria['descricao'] ?></td>
            <td class="acao"><a href="alterar_categoria.php?id=<?=$categoria['id_categoria'] ?>">Alterar</a></td>
            <td class="acao"><a href="categoria_excluir.php?id=<?=$categoria['id_categoria']?>">Excluir</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>