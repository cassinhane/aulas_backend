<p>
    Os dados colocados no HTTP vão ser mandados para o servidor,
    que irá, por sua vez, retornar um valor correspodente ao 
    requerido pelo usuário. 
</p>


<?php
    //print_r($_GET);
    //?numero1=10&numero2=20
    $resultado = $_GET['numero1'] + $_GET['numero2'];
    echo "O resultado da soma é $resultado";
?>