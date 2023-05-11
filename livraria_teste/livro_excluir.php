<?php
    include("banco/conexao.php");
    include("controls/livro.php");
    $id=$_GET['id'];
    if(excluir_livro($conexao,$id))
    {
        header("Location: lista_livro.php");
        die();
    }
?>