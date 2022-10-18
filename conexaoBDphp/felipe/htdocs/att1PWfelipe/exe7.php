<html>
    <head>
        <title>CRESCENTE OU DECRESCENTE?</title>
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
    EXERCÍCIO 7</h2><br>
</div>
    <div class='meio'>";
    
        $nr1 = $_POST['nr1'];
        $nr2 = $_POST['nr2'];
        $nr3 = $_POST['nr3'];


    if($nr2 < $nr1){
            $temp=$nr1;
            $nr1=$nr2;
            $nr2=$temp;
    } if($nr3 < $nr1){
            $temp=$nr1;
            $nr1=$nr3;
            $nr3=$temp;
    }  if($nr3 < $nr2){
            $temp=$nr2;
            $nr2=$nr3;
            $nr3=$temp;
    }
    
        echo "<h4>ORDEM CRESCENTE: $nr1 , $nr2 , $nr3 <br>
        ORDEM DECRESCENTE: $nr3 , $nr2 , $nr1</h4>";


    echo "<form action='exe7.html' method='post'>
            <input type='submit' value='VOLTAR' id='voltar'>
    </form>
    </div>
     <div class='rodape'> <h5> Copyright © 2005-2022 by Refsnes Data. All Rights Reserved.<br>
                            @2022 ETEAB™ﾠ &  Desenvolvido por FELIPE1501® </h5>
</div>";
?>
</body>
</html> 