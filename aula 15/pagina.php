<?php
    
    $cores[] = "yellow";
    $cores[] = "green";
    $cores[] = "blue";
    $cores[] = "pink";
    $cores[] = "red";
    $cores[] = "purple";
    $cores[] = "orange";
    $cores[] = "grey";
    $cores[] = "white";

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>

    <?php
        foreach($cores as $key => $cor){
            echo "<a href='pagina.php?cor=$cor'>Mudar para $cor</a>"."<br>";
        }
    ?>
    
</body>
</html>