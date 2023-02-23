<style>
    div{
        border: 1px solid #000;
    }

    .container{
        display: grid;
        grid-template-rows: auto auto;
        grid-template-columns: auto auto auto auto auto;
    }
</style>

<h2>Estrutura de Repetição For</h2>
<p>
    Utilizada para repetir uma sequência de instruções
    um número predeterminado de vezes.
</p>

<p>
    <pre>
        for(inicio; condição; passo){
            //instruções a serem repetidas
        }
    </pre>
</p>

<div class="container">
<?php
for($contador2 = 1; $contador2 <= 10; $contador2++){
    echo "<div>";
    for($contador1 = 0; $contador1 <= 10; $contador1++){
        echo "$contador2 x $contador1 = " . $contador2 * $contador1 . "<br>";
    }
    echo "</div>";
}
?>
</div>