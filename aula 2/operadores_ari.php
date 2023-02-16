<h2>Operadores Aritméticos</h2>
<hr>

<p>
    São utilizados para realizar cálculos matemáticos.
</p>

<pre>
tr => table row => linha da tabela 
td => table data => dados da tabela
</pre>

<table border=1 width="100%">
    <thead>
        <tr>
            <th>Operador</th>
            <th>Descrição</th>
            <th>Exemplo</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>+</td>
            <td>Soma</td>
            <td>$soma = 10 + 5;</td>
        </tr>
        <tr>
            <td>-</td>
            <td>Subtração</td>
            <td>$sub = 10 - 5;</td>
        </tr>
        <tr>
            <td>/</td>
            <td>Divisão</td>
            <td>$div = 10 / 5;</td>
        </tr>
        <tr>
            <td>*</td>
            <td>Multiplicação</td>
            <td>$mult = 10 * 5;</td>
        </tr>
        <tr>
            <td>%</td>
            <td>Resto da Divisão</td>
            <td>$resto = 10 % 5;</td>
        </tr>
        <tr>
            <td>**</td>
            <td>Potenciação</td>
            <td>$por = 10 ** 5;</td>
        </tr>
    </tbody>
</table>
<br>
<?php
    $soma = 10 + 5;
    $sub = 10 - 5;
    $div = 10 / 5;
    $mult = 10 * 5;
    $resto = 10 % 5;
    $por = 10 ** 5;

echo "Soma = $soma <br>";
echo "Subtração = $sub <br>";
echo "Divisão = $div <br>";
echo "Multiplicação = $mult <br>";
echo "Resto da Divisão = $resto <br>";
echo "Potenciação = $por <br>";

?>