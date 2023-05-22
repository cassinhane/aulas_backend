<?php

    require_once "../conexao.php";

    if(isset($_POST["nome"]) && isset($_POST["login"]) && isset($_POST["senha"])){

        //inclui o arquiuvo para salvar a foto do upload
        require_once "salvar_foto.php";

        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
        $foto = $nome_arquivo;

        //string com o comando sql para sr executado no db
        $sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) VALUES (?, ?, ?, ?);";
        
        //prepara o sql para ser executado no banco de dados
        $comando = $conexao->prepare($sql);

        //adiciona os valores nos parâmetros
        $comando->bind_param("ssds", $nome, $login, $senha, $foto);
        //string, string, decimal, string

        //executa o sql - comando no banco de dados
        $comando->execute();

    }

    //abre o arquivo form.php
    header("Location: usuarios.php");

    
?>