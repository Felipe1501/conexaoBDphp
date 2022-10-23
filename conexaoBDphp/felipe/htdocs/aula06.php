<?php
//sem parametro sem retorno
function acesso()
{
    echo "Erro Primata";
}
acesso();
echo "<br>";
//com parametros sem retorno
function soma($a,$b)
{
    //a e b são variáveis local
    echo "Soma: ".($a+$b);
}

 

soma(10,20);
echo "<br>";
//sem parametro com retorno
function msg()
{
    return "Boa tarde";
}

 

 echo msg();
 
?>