<?php// require_once "../controla_sessao/controla.php"; ?>
<?php

require_once "../conexao.php";

if(isset($_POST["remetente"]) && isset($_POST["destinatario"]) 
           && isset($_POST["assunto"]))
{

//inclui o arquivo para salvar a foto do upload
//require_once "salvar_foto.php";
        
$remetente =      $_POST["remetente"];
$destinatario = $_POST["destinatario"];
$assunto =     $_POST["assunto"];
$conteudo =     $_POST["conteudo"];
$id =        $_POST["id"];

//String com o comando SQL para ser executado no DB
$sql = "UPDATE mensagens SET 
`remetente`= ?, `destinatario`= ?, `assunto`= ?, `conteudo`= ? 
WHERE  `id`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssssi", $remetente, $destinatario, $assunto, $conteudo, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");
