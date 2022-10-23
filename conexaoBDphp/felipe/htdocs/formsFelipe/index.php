<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>FAÇA LOGIN <br>
            SISTEMA WEB 1.0 </h1>
            <img src="/formsFelipe/assets/img/mobile-wireframe-animate.svg" class="left-login-img" alt="Login Animation">
        </div>
         <form action="#" method="POST">
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>

                <div class="text-field">
                   
                    <label for="usuario">USUÁRIO</label>
                    <input type="text" name="usuario" placeholder="USUÁRIO">
                </div>
                <div class="text-field">
                    <label for="senha">SENHA</label>
                    <input type="password" name="senha" placeholder="SENHA">
                </div>
                <button class="btn-login" type="submit">LOGIN</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php

	if(!empty($_POST))
	{
		$email = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		if(($email == "Admin")&&($senha == "Admin"))
		{
			header('Location:menu.php');
		}else if(($email == "Felipe1501")&&($senha == "felipe1501")){
      header('Location:menu.php');
    }else
		{
			echo "<script>alert('Email ou senha incorreto');</script>";
		}
	}
?>