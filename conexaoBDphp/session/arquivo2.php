<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
	echo "Cor favorita é: " . $_SESSION["corFavorita"] . ".<br>";
	echo "Animal favorito é " . $_SESSION["animalFavorito"] . ".";
?>

</body>
</html>