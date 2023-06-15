<h2>Matriz</h2>

<?php
    $produto1 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 5000
    ];
    $produto2 = [
        "nome" => "Câmera",
        "marca" => "Nikon",
        "preco" => 3000
    ];
    $produto3 = [
        "nome" => "Smart Phone",
        "marca" => "LG",
        "preco" => 1200
    ];

    $tabela = [$produto1, $produto2, $produto3];
    var_dump($tabela);

    echo "<br>";
    echo $tabela[1]["marca"] . "<br>";

    echo json_encode($tabela);
?>