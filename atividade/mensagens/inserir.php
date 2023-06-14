<?//php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php

require_once "../conexao.php";


if(isset($_POST["remetente"]) && isset($_POST["destinatario"]) 
           && isset($_POST["assunto"]))
{


$remetente =      $_POST["remetente"];
$destinatario = $_POST["destinatario"];
$assunto =     $_POST["assunto"];
$conteudo =     $_POST["conteudo"];


//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `mensagens`(`remetente`, `destinatario`, `assunto`, `conteudo`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $remetente, $destinatario, $assunto, $conteudo);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");


