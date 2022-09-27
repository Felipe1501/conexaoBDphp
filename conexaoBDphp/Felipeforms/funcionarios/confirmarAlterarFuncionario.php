<?php

include_once('../conexao.php');


$primeironm = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$dataNasc = $_POST['dataa'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];		
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$pais = $_POST['country'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$genero = $_POST['gender'];

	try 
	{

		$stmt = $connection->prepare("UPDATE tb_funcionario SET firstname = :primeironm,
													  lastname = :sobrenome,
													  dataa = :dataNasc,
													  cpf = :cpf,
													  rg = :rg,
													  cep = :cep,
                                                      endereco = :endereco,
                                                      pais = :pais,
                                                      tel = :tel,
                                                      email = :email,
													  gender = :genero WHERE cd_funcionario = :id");

		$stmt->execute(array(
							 ':primeironm' => $primeironm,
							 ':sobrenome' => $sobrenome,
							 ':dataa' => $dataNasc,
							 ':cpf' => $cpf,
							 ':rg' => $rg,
							 ':cep' => $cep,
							 ':endereco' => $endereco,
							 ':pais' => $pais,
							 ':tel' => $tel,
                             ':email' => $email,
                             ':id_genero' => $genero));
		
		header( "refresh:0;url=consultaFuncionario.php" );

		echo "<script>alert('FUNCIONÁRIO ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>
