<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>

  <div class="container">
        <h1>Mensagens enviadas</h1>
        <hr>
        <div class="text-end">
            <a href="form.php" class="btn btn-success">
                Nova Mensagem
            </a>
        </div>

        <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Remetente</th>
                <th scope="col">Destinatário</th>
                <th scope="col">Assunto</th>
                <th scope="col">Conteúdo</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($mensagens as $mensagem){ ?>
            <tr>
                <th scope="row"><?php echo $mensagem['remetente']; ?></th>
                <td><?php echo $mensagem['destinatario']; ?></td>
                <td><?php echo $mensagem['assunto']; ?></td>
                <td><?php echo $mensagem['conteudo']; ?></td>
                <td class="text-end">
                  <a href="excluir.php?id=<?php echo $mensagem['id']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                  <a href="atualizar.php?id=<?php echo $mensagem['id']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                </td>
            </tr>
        <?php } ?>


        </tbody>
        </table>



  </div>
    
  <?php require_once "../template/rodape.php";  ?>