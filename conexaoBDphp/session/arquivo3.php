<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove as variáveis de sessão
	session_unset();

// destrói a sessão
	session_destroy();
?>

</body>
</html>