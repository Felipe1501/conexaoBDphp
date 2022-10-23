<?php

include_once('../conexao.php');


$primeironm = $_POST['firstname'];
$sobrenome = $_POST['lastname'];
$cnpj = $_POST['cnpj'];
$empresa = $_POST['empresa'];
$produto = $_POST['produto'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$pais = $_POST['country'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$genero = $_POST['gender'];

	try 
	{

		$stmt = $connection->prepare("UPDATE tb_fornecedor SET firstname = :primeironm,
													  lastname = :sobrenome,
													  cnpj = :cnpj,
													  empresa = :empresa,
													  produto = :produto,
													  cep = :cep,
                                                      endereco = :endereco,
                                                      pais = :pais,
                                                      tel = :tel,
                                                      email = :email,
													  gender = :genero WHERE cd_fornecedor = :id");

		$stmt->execute(array(
							 ':primeironm' => $primeironm,
							 ':sobrenome' => $sobrenome,
							 ':cnpj' => $cnpj,
							 ':empresa' => $empresa,
							 ':produto' => $produto,
							 ':cep' => $cep,
							 ':endereco' => $endereco,
							 ':pais' => $pais,
							 ':tel' => $tel,
                             ':email' => $email,
                             ':id_genero' => $genero));
		
		header( "refresh:0;url=consultaFornecedor.php" );

		echo "<script>alert('FORNECEDOR ALTERADO COM SUCESSO');</script>";


	} 

	catch(PDOException $e) 

	{

		echo 'Error: ' . $e->getMessage();

	}

	

 ?>
