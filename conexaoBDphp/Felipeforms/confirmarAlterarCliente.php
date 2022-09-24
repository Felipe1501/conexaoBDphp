<?php

include_once('conexao.php');



$primeironm = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$genero = $_POST['gender'];

	try 
	{

		$stmt = $connection->prepare("UPDATE tb_cliente SET firstname = :primeironm,
													  lastname = :sobrenome,
													  cpf = :cpf,
													  rg = :rg,
													  cep = :cep,
                                                      endereco = :endereco,
                                                      tel = :tel,
                                                      email = :email,
													  gender = :genero WHERE cd_cliente = :id");

		$stmt->execute(array(
							 ':primeironm' => $primeironm,
							 ':sobrenome' => $sobrenome,
							 ':cpf' => $cpf,
							 ':rg' => $rg,
							 ':cep' => $cep,
							 ':endereco' => $endereco,
							 ':tel' => $tel,
                             ':nm_email' => $email,
                             ':id_genero' => $genero));
		
		header( "refresh:0;url=consultaCliente.php" );

		echo "<script>alert('CLIENTE ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>
