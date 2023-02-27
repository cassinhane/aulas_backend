<h2>Vetores (array)</h2>
<p>São estruturas de armazenamento compostas hetereogeneas
    (1-dim), que podem ser indexadas 
    numericamente ou textualmente.
</p>

<?php
    //exemplo variavel simples
    $nota = 6;
    $nota = 3;
    echo $nota . "<br>";

    //exemplo vetor indexado numericamente
    $notas = []; //outra forma $notas = array(6,3);
    $notas[] = 6;
    $notas[] = 3;
    //var_dump($notas);
    //imprimir só a primeira nota
    echo ($notas[0] + $notas[1]) / 2 ;

    //Vetores com indice textual
    $notas = []; //cria um vetor vazio
    $notas["debora"] = 7;
    $notas['murilo'] = 7.8;
    $notas['poliana'] = 9;
    echo "<p></p>";
    echo "A Poliana tirou nota " . $notas['poliana'] . "<br>";

    //imprimindo o conteúdo de um vetor numérico.
    $valores[] = 2;
    $valores[] = 4;
    $valores[] = 8;
    $valores[] = 10;
    $valores[] = 12;
    $valores[] = 14;
    $valores[] = 16;
    //ou: $valores = [2, 4, 8, 10, 12, 14, 16];

    //imprimindo o conteúdo de um valor numérico.

    //var_dump($valores);
    /*echo $valores[0] . "<br>";
    echo $valores[1] . "<br>";
    echo $valores[2] . "<br>";
    echo $valores[3] . "<br>";
    echo $valores[4] . "<br>";
    echo $valores[5] . "<br>";
    echo $valores[6] . "<br>";*/

    for($i = 0; $i <= 6; $i++){
            echo $valores[$i] . "<br>";
    }

    //somar os valores de um vetor
    $acumulador = 0;
    for($i=0; $i<=6; $i++){
        $acumulador = $acumulador + $valores[$i];
    }
    echo "<br> A soma dos valores é $acumulador";
?>