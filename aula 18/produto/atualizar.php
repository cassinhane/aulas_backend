<?php

    require_once "../conexao.php";

    if(isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["preco"])){

        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $foto = "semfoto.png";

        //string com o comando sql para sr executado no db
        $sql = "INSERT INTO `db_catalogo_3infoa`.`produto` (`nome`, `descricao`, `preco`, `foto`) VALUES (?, ?, ?, ?);";
        
        //prepara o sql para ser executado no banco de dados
        $comando = $conexao->prepare($sql);

        //adiciona os valores nos parâmetros
        $comando->bind_param("ssds", $nome, $descricao, $preco, $foto);
        //string, string, decimal, string

        //executa o sql - comando no banco de dados
        $comando->execute();

    }

    //abre o arquivo form.php
    header("Location: form.php");

?>