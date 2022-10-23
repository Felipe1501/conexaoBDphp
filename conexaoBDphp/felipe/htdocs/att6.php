

<html>
    <head>
        <title>ATIVIDADE 6</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://img2.gratispng.com/20180511/lwq/kisspng-question-mark-riddler-clip-art-5af5e89fe8baf2.2410554215260653119533.jpg" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="portfolio/style.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <style>

.conta{
    padding-top: 190px;
    margin-left: 5%;
    display: flex;
    justify-content: space-around;
}

.conta .heroi{
    margin-bottom: 40px;
}


.heroi label {
    color: var(--texto-text);
}


.conta .heroi {
    width: 45%;
    max-width: 100%;
    font-size: 15px;
    
    flex-wrap: wrap;

    color: var(--texto-att4-color);
}

.conta .heroi h1{
    color: var(--h1-color);
    font-size: 47px;
    font-weight: 900;
    line-height: 1.2;
    margin: 20px 0px 20px;
}
.heroi h1 span {
    color: var(--texto-text);
}

.conta .heroi h3{
    color: var(--titulo-texto);
    font-weight: 400;
    font-size: 17px;
}


.agrupar{
    display: inline-block;
    width: 300px;
    margin: 15px;
}


.conta .heroi input{
    color: var(--botao-texto);
    background: var(--botao-color);
    font-size: 16px;
    font-weight: 500;
    line-height: 24px;
    padding: 8px 30px;
    cursor: pointer;
    border: 2px solid var(--botao-color);
    border-radius: 30px;
    margin: 10px;
}

.conta .heroi input:hover{
    background: transparent;
    border: 2px solid var(--botao-color);
    color: var(--botao-color);
    transition: all 0.4s ease;
}

@media (max-width: 1280px) {
    .conta{
    padding-top: 100px;
    margin-left: 5%;
    }
}
        </style>
    </head>
    <body>
        <nav>
            <div class="nav_bar">
                <i class='bx bx-menu sidebarAbrir' ></i>
                <span class="logo navLogo"><a href="portfolio/principal.html">FELIPE1501</a></span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="portfolio/principal.html">FELIPE1501</a></span>
                        <i class='bx bx-x sidebarFechar' ></i>

                    </div>

                    <ul class="nav_links">
                        <li><a href="portfolio/principal.html">PRINCIPAL</a></li>
                        <li><a href="portfolio/principal.html#sobre">SOBRE</a></li>
                        <li><a href="portfolio/principal.html#portfolio">PORTFOLIO</a></li>
                        <li><a href="portfolio/principal.html#paginas">PÁGINAS</a></li>
                        <li><a href="portfolio/principal.html#contato">CONTATO</a></li>
                    </ul>
                </div>
                <div class="LightDark-searchBox">
                    <div class="light-dark">
                        <i class='bx bx-moon moon'></i>
                        <i class='bx bx-sun sun' ></i>
                    </div>
                    <div class="searchBox">
                        <div class="searchToggle">
                            <i class='bx bx-x cancel' ></i>
                            <i class='bx bx-search pesquisar' ></i>
                        </div>

                            <div class="pesquisar-botao">
                                <input type="text" placeholder="PESQUISAR...">
                                <i class='bx bx-search' ></i>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
        <div class="conta">
            <div class="heroi">
        <h1> OPERAÇÕES MATEMÁTICAS</h1>
        <?php
     function soma($a, $b)//variáveis locais
     {
         echo $c = $a + $b;
     }
     function sub($a, $b){
         echo $c = $a - $b;
     }
      function multiplica($a, $b){
          echo $c = $a * $b;
      }
      function div($a, $b){
          echo $c = $a / $b;
      }
 ?>
    <form action='#' method='POST'>
        <label for='valor1'>VALOR 1 </label><input type='number' name='a'><br>
        <label for='valor2'>VALOR 2 </label><input type='number' name='b'><br>
        <p> OPERAÇÃO </p>
        <label for='+'> + </label><input type='radio' name='op' value='+'>
        <label for='-'> - </label><input type='radio' name='op' value='-'>
        <label for='*'> * </label><input type='radio' name='op' value='*'>
        <label for='/'> / </label><input type='radio' name='op' value='/'>
        <input type='submit' value='CALCULAR'>
    </form>
    <?php 
        $a = $_POST['a']; //variáveis globais
        $b = $_POST['b'];
        $op = $_POST['op'];

        switch($op){
            case "+":
                soma($a, $b);
            break;

            case "-":
                sub($a, $b);
            break;

            case "*":
                multiplica($a, $b);
            break;

            case "/":
                div($a, $b);
            break;
        }
    ?>
        <h1> HORA ATUAL</h1>
        <?php
            date_default_timezone_set('America/Sao_Paulo');

            function baoDia(){
                echo "<script>alert('BÃO DIA');</script>";
                echo "AGORA SÃO: ".date("H:i:s");
            }

            function boaTarde(){
                echo "<script>alert('BOA TARDE FI');</script>";
                echo "AGORA SÃO: ".date("H:i:s");
            }

            function boaNoite(){
                echo "<script>alert('BOA NOITE GAJO');</script>";
                echo "AGORA SÃO: ".date("H:i:s");
            }
 
            if ((date("H") > 0 ) && (date("H")< 12)){
                baoDia();
            }
            
            if ((date("H") >= 12 ) && (date("H")< 18)){
                boaTarde();
            }

            if ((date("H") >= 18 ) && (date("H")< 24)){
                boaNoite();
            }
        ?>
            </div>

            <div class="heroi">
            <h1>  TEMPERATURAS </h1>
           
                <form action='#' method='POST'> 
                    <label for='temp'>TEMPERATURA: </label><input type='number' name='temp'><br>
                    <label for='celsius'>CELSIUS </label><input type='radio' name='op' value='c'><br>
                    <label for='farenheit'>FARENHEIT </label><input type='radio' name='op' value='f'><br>
                    <input type='submit' value='CONVERTER'>
                </form>
            <?php
                $t = $_POST['temp'];
                $op = $_POST['op'];

                if($op == "c") celsius($t);
                if($op == "f") farenheit($t);

                function celsius($t)
                {
                    $farenheit = ($t * (9/5)) + 32;
                    echo "TEMPERATURA EM FARENHEIT: ".$farenheit;
                }
                function farenheit($t){
                    $celsius = ($t - 32)*(5/9);
                    echo "TEMPERATURA EM CELSIUS: ".$celsius;
                }
            ?>

            
            </div>
        </div>
        <script src="portfolio/script.js"></script>
        
    </body>
</html>