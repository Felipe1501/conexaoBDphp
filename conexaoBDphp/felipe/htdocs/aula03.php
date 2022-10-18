<?php
    // imprima de 1 a 100 crescente somente pares

    for($f = 1; $f <= 100; $f++  ){
        if($f % 2 == 0){
            echo $f."<br>";
        }
        
    }
?>
<hr>
<?php
    // imprima de 1 a 100 crescente somente ímpares

    for($f = 1; $f <= 100; $f++  ){
        if($f % 2 != 0){
            echo $f."<br>";
        }
        
    }
?>
