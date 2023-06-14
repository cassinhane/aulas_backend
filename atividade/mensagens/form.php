<?//php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>

<div>
    <h1>Escrever nova mensagem</h1>
    <hr>

    <form 
    action="<?php echo isset($mensagens) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >

       <label for="remetente" >Remetente</label><br>
       <input type="text" name="remetente" id="remetente" value="<?php echo $mensagens['remetente'] ?? ""; ?>"><br>
       <input type="hidden" name="id" id="id" value="<?php echo $mensagens['id'] ?? ""; ?>"><br>

       <label for="destinatario">Destinatário</label><br>
       <input type="text" name="destinatario" id="destinatario" value="<?php echo $mensagens['destinatario'] ?? ""; ?>"><br>

       <label for="assunto" >Assunto</label><br>
       <input type="text" name="assunto" id="assunto" value="<?php echo $mensagens['assunto'] ?? ""; ?>"><br>

       <label for="conteudo" >Conteúdo</label><br>
       <textarea  name="conteudo" id="conteudo"><?php echo $mensagens['conteudo'] ?? ""; ?></textarea><br>
       

       <br>
       <button type="submit" >Cadastrar</button>

    </form>

    <?php require_once "../template/rodape.php";  ?>