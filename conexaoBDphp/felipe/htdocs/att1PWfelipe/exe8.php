<html>
    <head>
        <title>IMC</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.bundle.min.js" ></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
       #ESfigma{
            width: 100%;
            height: 100%;
        }

        .cabecalho{
            width: 100%;
            height: 20%;
        }


        .titulo{
            width: 50%;
            height: 50%;
            margin-left: 35%;
        }

         h2{

            font-family: 'Sofia';
            color: #26609E;
        }

        h5{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;
            text-align: center;
        }

        h3{
            font-family: 'Sofia';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 38px;
            text-align: center;
            color: #26609E;
        }

        .meio{
            position: absolute;
            width: 311px;
            height: 38px;
            left: 519.19px;
            top: 295px;

        }

        #nome{
            border-radius: 20px;
            background: #59A5CC;
            text-align: center;
        }

        #idade{
            border-radius: 20px;
            background: #59A5CC;
            text-align: center;
        }

        #enviar{
            border-radius: 20px;
            background: #283D88;
            width: 170px;
            height: 50px;
            top: 575px;
            left: 365.19px;
        }

        #voltar{
            width: 170px;
            height: 50px;
            left: 680.19px;
            top: 575px;
            border-radius: 20px;
            background: #283D88;
        }

        body{
            background-color: rgba(40, 61, 153, 0.3);
        }

        .rodape{
            position: absolute;
            width: 1702px;
            height: 58.5px;
            left: 0px;
            top: 887.21px;
            background: #283D88;
        }

        h4{
            font-family: 'Roboto';
            font-style: normal;
            color: #26609E;
            margin-left: -30px;
        }
</style>

    </head>
<body>
<?php
  echo" <div class='cabecalho'><img src='img/ESfigma.png' id='ESfigma'>
</div>
    <div class='titulo'><h2>ATIVIDADES PROGRAMAÇÃO WEB<br>
    EXERCÍCIO 8</h2><br>
</div>
    <div class='meio'>";
    
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);

        if($imc <= 18.4){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é ABAIXO DO PESO!!!</h4>";
        }else if($imc > 18.4 && $imc <= 24.9){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é considerado PESO IDEAL!!!</h4>";
        }else if($imc > 24.9 && $imc <= 29.9){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é considerado SOBREPESO!!!</h4>";
        }else if($imc > 29.9 && $imc <= 34.9){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é considerado OBESIDADE GRAU 1!!!</h4>";
        }else if($imc > 34.9 && $imc <= 39.9){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é considerado OBESIDADE GRAU 2!!!</h4>";
        }else if($imc >= 40.0){
            echo "<h4>Caro Usuário, seu IMC é igual à ".round($imc, 2).",  e é considerado OBESIDADE GRAU 3!!!</h4>";
        }


    echo "<form action='exe8.html' method='post'>
            <input type='submit' value='VOLTAR' id='voltar'>
    </form>
    </div>
     <div class='rodape'> <h5> Copyright © 2005-2022 by Refsnes Data. All Rights Reserved.<br>
                            @2022 ETEAB™ﾠ &  Desenvolvido por FELIPE1501® </h5>
</div>";
?>
</body>
</html> 