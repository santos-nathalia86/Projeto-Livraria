<?php

    include("banco/conexao.php");

    if (!$conexao) {
        echo ("Não foi possível conectar ao banco");
        exit;
    }
    else {
        echo ("Conexão criada com sucesso");
    }

?>