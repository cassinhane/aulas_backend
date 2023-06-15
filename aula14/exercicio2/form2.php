

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <style>
       body{            
            <?php
                if(isset($_POST['cor'])){
                    echo "background-color:". $_POST['cor'] . ";";
                } 
            ?>
        }
     </style>
</head>
<body>
    <form method="POST" action="form2.php">
        <label>Informe uma cor</label>
        <input type="color" name="cor">
        <button type="submit" name="botao">OK</button>
    </form>
</body>
</html>