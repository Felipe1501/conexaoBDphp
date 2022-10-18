<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro PRODUTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
	<h1 class="text-center bg-primary text-white">CADASTRO DE PRODUTO</h1>
	<br>
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<form action="#" method="POST">
				  <div class="mb-3">
					<label for="nome" class="form-label">Nome da Empresa</label>
					<input type="text" class="form-control" id="nome" name="nome">
				  </div>
				  <div class="mb-3">
					<label for="cnpj" class="form-label">CNPJ</label>
					<input type="text" class="form-control" id="cnpj" name="cnpj" oninput="mascara(this, 'cnpj')">
				  </div>
				  <div class="mb-3">
					<label for="produto" class="form-label">Produto</label>
					<input type="text" class="form-control" id="produto" name="produto">
				  </div>
				  <div class="mb-3">
					<label for="cat" class="form-label">Categoria</label>
					<input type="text" class="form-control" id="cat" name="cat">
				  </div>
				  <div class="mb-3">
					<label for="valor" class="form-label">Valor</label>
					<input type="text" class="form-control" id="valor" name="valor" oninput="mascara(this, 'valor')" placeholder="xxx,xx">
				  </div>
				  <div class="mb-3">
					<label for="email" class="form-label">Quantidade</label>
					<input type="number" class="form-control" id="quanti" name="quanti">
				  </div>
				 <div class="text-center">
				  	<input type="submit" class="btn btn-primary" value="Cadastrar">
					<button type="button" class="btn btn-danger" onclick="javascript:location.href ='menu.php';">Voltar</button>
				</div>
				</form>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
    <script src="index.js">
    </script>
  </body>
</html>

<?php

	if(!empty($_POST))
	{
		$nome = $_POST['nome'];
		$cnpj = $_POST['cnpj'];
        $categoria = $_POST['cat'];
        $valor = $_POST['valor'];

		$quantidade = $_POST['quanti'];
		
		$arquivo = fopen("cadastro/produtos.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$nome, $cnpj, $categoria, $valor, $quantidade,
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Cadastrado com sucesso');</script>";
			fclose($arquivo);
		}
		else
		{
			echo "<script>alert('Erro ao cadastrar as informações');</script>";
		}
		
		
	}


?>