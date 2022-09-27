<?php

include_once('../conexao.php');

$primeironm = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$perfil = $_POST['perfil'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$tel = $_POST['tel'];
$loginn = $_POST['usuario'];
$senha = $_POST['password'];
$genero = $_POST['gender'];


	try 
	{

		$stmt = $connection->prepare("UPDATE tb_usuario SET firstname = :primeironm,
													  lastname = :sobrenome,
													  perfil = :perfil,
													  email = :email,
                                                      endereco = :endereco,
                                                      tel = :tel,
													  usuario = :loginn,
													  password = :senha,
													  gender = :genero WHERE cd_usuario = :id");

    $stmt->execute(array(
        ':primeironm' => $primeironm,
        ':sobrenome' => $sobrenome,
        ':perfil' => $perfil,
        ':email' => $email,
        ':endereco' => $endereco,
        ':tel' => $tel,
        ':usuario' => $loginn,
        ':password' => $senha,
        ':gender' => $genero));
		
		header( "refresh:0;url=consultaUsuario.php" );

		echo "<script>alert('USUÁRIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>
