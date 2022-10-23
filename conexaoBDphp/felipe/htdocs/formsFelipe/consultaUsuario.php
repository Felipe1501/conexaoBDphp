<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>CONSULTA USUÁRIO</title>
    <style>
                @media screen and (max-width: 1337px) {
    .form-img {
        display: none;
    }

    .container {
        width: 50%;
    }

    .form {
        width: 100%;
    }
}

@media screen and (max-width: 1064px) {
    .container {
        width: 90%;
        height: auto;
    }

    .input-group {
        flex-direction: column;
        overflow-y: scroll;
        flex-wrap: nowrap;
        max-height: 10rem;
        padding-right: 5rem;
    }

    .gender-inputs {
        margin-top: 2rem;
    }

    .gender-group{
        flex-direction: column;
    }

    .gender-input {
        margin-top: 0.5rem;
    }
}
    </style>
</head>
<body>
    <div class="container">
        <div class="form-img">
            <img src="/formsFelipe/assets/img/undraw_user_flow_re_bvfx.svg" >
        </div>
        <div class="form">
           <div class="form-header">
                    <div class="title">
                        <h1>CONSULTA USUÁRIOS</h1>
                    </div>
                    <div class="login-button">
                        <button onclick="javascript:location.href ='menu.php';"><a href="#">VOLTAR</a></button>
                    </div>
                </div>
                <div class="input-group">
                <?php
					$arquivo = fopen("cadastro/usuarios.txt", "r") or die("Não foi possível abrir o arquivo");
					echo nl2br(fread($arquivo,filesize("cadastro/usuarios.txt")));
					fclose($arquivo);
				?>
            
                </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
