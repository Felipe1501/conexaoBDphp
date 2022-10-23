<html>
    <head>
        <title>ATIVIDADE 3</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://img2.gratispng.com/20180511/lwq/kisspng-question-mark-riddler-clip-art-5af5e89fe8baf2.2410554215260653119533.jpg" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/conexaoBDphp/felipe/htdocs/portfolio/style.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <style>

.conta{
    padding-top: 190px;
    margin-left: 5%;
}

.conta .heroi{
    margin-bottom: 40px;
}


.heroi label {
    color: var(--texto-text);
}


.linha, .conta .heroi p{
    width: 440px;
    max-width: 100%;
    color: var(--titulo-texto);
    font-size: 15px;
    justify-content: center;
    flex-wrap: wrap;
    display: flex;
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
                <span class="logo navLogo"><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html">FELIPE1501</a></span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html">FELIPE1501</a></span>
                        <i class='bx bx-x sidebarFechar' ></i>

                    </div>

                    <ul class="nav_links">
                        <li><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html">PRINCIPAL</a></li>
                        <li><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html#sobre">SOBRE</a></li>
                        <li><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html#portfolio">PORTFOLIO</a></li>
                        <li><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html#paginas">PÁGINAS</a></li>
                        <li><a href="/conexaoBDphp/felipe/htdocs/portfolio/principal.html#contato">CONTATO</a></li>
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

            <h1>Tabuada do  <span class="tabuada"></span></h1>
    <form action="#" method="post">
            <input type='radio'  id='tabuada' name='tabuada' VALUE='1'>
            <label for='tabuada1'> 1 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='2'>
            <label for='tabuada2'> 2 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='3'>
            <label for='tabuada3'> 3 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='4'>
            <label for='tabuada4'> 4 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='5'>
            <label for='tabuada5'> 5 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='6'>
            <label for='tabuada6'> 6 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='7'>
            <label for='tabuada7'> 7 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='8'>
            <label for='tabuada8'> 8 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='9'>
            <label for='tabuada9'> 9 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='10'>
            <label for='tabuada10'> 10 </label><br>
            <input type='radio' id='tabuada' name='tabuada' VALUE='todos'>
            <label for='todos'> TODAS </label><br>
            <input type='submit' id='enviar' name='enviar' value=' ENVIAR'>
            </form> 
            <?php
                    $tabuada = $_POST['tabuada'];
                  if($tabuada != ''){          
                    switch ($tabuada){
                        case "todos":
                            for($nr = 1; $nr <= 10; $nr++){
                                echo "<div class='agrupar'>";
                                for($p = 1; $p <= 10; $p++){
                                    echo"<div class='linha'>".$nr." x ".$p." = ".($nr*$p). "</div><br>" ;
                                }
                                echo "</div>";
                            }
                        break;
                        default:
                            for($p = 0; $p <= 10; $p++){
                                echo "<div class='linha'>".$tabuada." x ".$p." = ".($tabuada*$p)."</div><br>";
                            }
                        break;
                        
                    }
                } 

            ?>
            </div>
        </div>
        <script src="portfolio/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".tabuada", {
                strings: ["1.", "2.", "3." , "4.", "5.", "6.", "7.", "8.", "9.", "10.", "1 ao 10."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
    </body>
</html>

