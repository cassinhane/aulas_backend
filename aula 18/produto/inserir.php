<?php

    require_once "../conexao.php";

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    //string com o comando sql para sr executado no db
    $sql = "INSERT INTO `db_catalogo_3infoa`.`produto` (`nome`, `descricao`, `preco`, `foto`) VALUES ('$nome', '$descricao', '$preco', 'semfoto.png');";
    echo $sql;
    //prepara o sql para ser executado no banco de dados
    $comando = $conexao->multi_query($sql);

    //adiciona os valores nos parâmetros
    //$comando->bind_param("ssds", "a", "b", 1, "c");
    //string, string, decimal, string

    //executa o sql - comando no banco de dados
    //$comando->execute();

    //abre o arquivo form.php
    //header("Location: form.php");

?>