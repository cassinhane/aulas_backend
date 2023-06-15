<h2>Exercício 4</h2>

<?php
    $info1 = [
        "nome" => "Poliana",
        "nota" => 7,
        "nota2" => 9
    ];
    $info2 = [
        "nome" => "Murilo",
        "nota" => 8,
        "nota2" => 5
    ];
    $info3 = [
        "nome" => "André",
        "nota" => 6,
        "nota2" => 7
    ];

    $info = [$info1, $info2, $info3];

        foreach($info as $key => $value){
                echo $value["nome"] . "|";
                echo $value["nota"] . "|";
                echo $value["nota2"] . "<br>";
        }
    
?>