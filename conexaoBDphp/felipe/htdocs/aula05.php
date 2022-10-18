<!doctype html>
<html lang="pt-br">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>AULA 05 - Array</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>
 <h1>AULA 05 - Array</h1>
 <form action="#" method="POST">
 <label>Aluno 01</label>
 <input type="text" name="a01"><input type="number" name="n01"><br>
 <label>Aluno 02</label>
 <input type="text" name="a02"><input type="number" name="n02"><br>
 <label>Aluno 03</label>
 <input type="text" name="a03"><input type="number" name="n03"><br>
 <label>Aluno 04</label>
 <input type="text" name="a04"><input type="number" name="n04"><br>
 <label>Aluno 05</label>
 <input type="text" name="a05"><input type="number" name="n05"><br>
 <label>Aluno 06</label>
 <input type="text" name="a06"><input type="number" name="n06"><br>
 <label>Aluno 07</label>
 <input type="text" name="a07"><input type="number" name="n07"><br>
 <label>Aluno 08</label>
 <input type="text" name="a08"><input type="number" name="n08"><br>
 <label>Aluno 09</label>
 <input type="text" name="a09"><input type="number" name="n09"><br>
 <label>Aluno 10</label>
 <input type="text" name="a10"><input type="number" name="n10"><br>
 
 <input type="submit" value="Calcular">
 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 </body>
</html>
<?php
 
 $nome = array($_POST['a01'],
 $_POST['a02'],
 $_POST['a03'],
 $_POST['a04'],
 $_POST['a05'],
 $_POST['a06'],
 $_POST['a07'],
 $_POST['a08'],
 $_POST['a09'],
 $_POST['a10']);
 
 $nota = array($_POST['n01'],
 $_POST['n02'],
 $_POST['n03'],
 $_POST['n04'],
 $_POST['n05'],
 $_POST['n06'],
 $_POST['n07'],
 $_POST['n08'],
 $_POST['n09'],
 $_POST['n10']);
 $soma = 0;
 
 for($x = 0; $x < count($nota); $x++)
 {
 $soma = $soma + $nota[$x];
 }
 
 echo "<br>A média das notas é ". ($soma/10);
 
 $maior = 0;
 
 for($y = 0; $y < count($nome); $y++)
 {
 if($nota[$y] > $maior)
 {
 $maior = $nota[$y];
 $index = $y;
 }
 }
 
 echo "<br>A maior nota foi do aluno ".$nome[$index];
 
 for($z = 0; $z < count($nome); $z++)
 {
 echo $nome[$z].",";
 }