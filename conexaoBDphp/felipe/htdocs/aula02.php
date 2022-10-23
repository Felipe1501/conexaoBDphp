
    <style>
    body{
        background-color: 	#ADD8E6;
        display: inline-block;
    }


</style>

<?php


    $a = 81;
    $b = 9;

    echo "<br>Soma: " .($a + $b);
    echo "<br>Subtração: " .($a - $b);
    echo "<br>Multiplicação: " .($a * $b);
    echo "<br>Divisão: " .($a / $b);
    echo "<br>Modulo: " .($a % $b)."<br>";

    $a++; $b--;
    echo "<br>Incremento: ".$a;
    echo "<br>Decremento: ".$b;
    echo "<br> <br>";

    //operadores relacionais (comparação)
    $x = 1;
    $y = 2;

    echo "<br>x é maior que y: ".($x > $y);
    echo "<br>x é menor que y: ".($x < $y);

    echo "<br>x é maior ou igual que y: ".($x >= $y);
    echo "<br>x é menor ou igual que y: ".($x <= $y);

    echo "<br>x é diferente de y:? ".($x != $y);
    echo "<br>x é diferente de y:? ".($x <> $y);

    echo "<br>conteúdo  de x é igual ao conteúdo de y:?" .($x == $y);
    echo "<br> <br>";

    //operadores lógicos

    $W = 8; //atribuição
    $z = 5;// a varialvel recebe um valor

    echo "<br>Operador Lógico e: ".(($W == 8) and ($z == 5));
    echo "<br>Operador Lógico e: ".(($W == 8) && ($z == 5));

    echo "<br>Operador Lógico ou: ".(($W > 1) or ($z < 3));
    echo "<br>Operador Lógico ou: ".(($W > 1) || ($z < 3));

    echo "<br>Operador de Negação: ".(!($W < $z));

    echo "<div class='interface'><br>
    <input class='pique1' type='number' placeholder='INSIRA UM NÚMERO'><br><br>
    <input class='pique2' type='number' placeholder='INSIRA UM NÚMERO'><br><br>
    <div>
    <button class='SOMAR'> SOMAR</button><br>
    <button class='SUBTRAIR'> SUBTRAIR</button><br>
    <button class='DIVIDIR'> DIVIDIR</button><br>
    <button class='MULTIPLICAR'> MULTIPLICAR</button><br>
    </div>

    </div>";


?>