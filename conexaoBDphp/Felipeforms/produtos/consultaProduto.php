<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CONSULTA PRODUTO</title>
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
            <img src="../assets/img/undraw_logistics_x-4-dc.svg" >
        </div>
        <div class="form">
  
                <div class="form-header">
                    <div class="title">
                        <h1>CONSULTAR PRODUTOS</h1>
                    </div>
                    <div class="login-button">
                        <button onclick="javascript:location.href ='../../../menu.php';"><a href="#">VOLTAR</a></button>
                    </div>
                </div>
                <div class="input-group">
                <?php
                    include_once('../conexao.php');
                    try{
                        $select = $connection->prepare('SELECT * FROM tb_produto');
                        $select->execute();

                        while($row = $select->fetch())
                        {
                            echo "<p>";
                            echo "<br><b>CÓDIGO: </b>".$row['cd_produto'];
                            echo "<br><b>NOME: </b>".$row['nm_produto'];
                            echo "<br><b>CATEGORIA: </b>".$row['nm_categoria'];
                            echo "<br><b>VALOR: </b>".$row['vl_produto'];
                            echo "<br><b>QUANTIDADE: </b>".$row['qt_produto'];
                            echo "<br><b>EMPRESA: </b>".$row['nm_empresa'];
                            echo "<br><b>CNPJ: </b>".$row['nr_cnpj'];
                            echo "<br><b>EMAIL: </b>".$row['nm_email'];
                            echo "<br><b>PRODUTO: </b>".$row['id_produto'];
                            echo "</p><br>";
                            ?>
                            <div class="login-button">
                            <button onclick="window.location.href='alterarProduto.php?id=<?php echo $row['cd_produto'];?>'">
                            Alterar
                        </button>

                        <button onclick="window.location.href='excluirProduto.php?id=<?php echo $row['cd_produto'];?>'">
                            Excluir
                        </button>
	                    <hr>
                        </div>
                        <?php
                        }
                    }
                    catch(PDOException $e){
                        echo 'ERROR: ' . $e->getMessage();
                    }
                
                ?>
            
                </div>
        </div>
    </div>
    <script src="../index.js"></script>
</body>
</html>