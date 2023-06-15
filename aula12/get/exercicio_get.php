<h2>
    Exercício
</h2>
<?php

    //?tabuada=5
    $tabuada = $_GET['tabuada'];

    for($i = 0; $i <= 10; $i++){
        echo "$tabuada * $i = " . $tabuada * $i . "<br>";
    }
?>