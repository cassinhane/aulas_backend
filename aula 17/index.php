<?php
    $_GET['nota1'];
    $_GET['nota2'];

    if(isset($_GET['nota1']) && isset($_GET['nota2'])){
        $resultado = $_GET['nota1'] + $_GET['nota2'];
         echo "<strong>O resultado é $resultado</strong>";
    }
?>