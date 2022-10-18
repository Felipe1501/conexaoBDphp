<html>
    <head>
        <title>ATIVIDADE 4</title>
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
        <h1>  <span class="patinho"></span>PATINHOS FORAM PASSEAR (do WHILE)</h1>
        <?php

$x = 5;



do{



echo "
$x patinhos foram passear<br>

Além das montanhas para brincar<br>

A mamãe gritou: Quá, quá, quá, quá<br>";

$x--;

echo "Mas só $x patinhos voltaram de lá<br><br>";

}

while($x >= 2);

echo "Um patinho foi passear<br>

Além das montanhas para brincar<br>

A mamãe gritou: Quá, quá, quá, quá <br>

Mas nenhum patinho voltou de lá <br><br>

Poxa, a mamãe patinha ficou tão triste naquele dia<br>

Aonde será que estavam os seus filhotinhos?<br>

Mas essa história vai ter um final feliz<br>

Sabe por quê?<br><br>

A mamãe patinha foi procurar<br>

Além das montanhas, na beira do mar<br>

A mamãe gritou: Quá, quá, quá, quá!<br>

E os cinco patinhos voltaram de lá<br><br>";

?>
        <h1>  <span class="patinho2"></span>ELEFANTES INCOMODAM (do WHILE)</h1>
<?php 
        $x = 1;
        do{
            if($x == 1){
            echo "$x elefante" 
           .str_repeat(" incomoda", $x  );
            echo " muita gente<br>";
            $x++;
            }
              
            if($x %2 == 0){
                echo "$x elefantes " .str_repeat(" incomodam", $x). " muito mais<br>";
                $x++; 
            }
            else {
                echo "$x elefantes incomodam muita gente <br>";
                $x++; 
            }
          
            
            

        }
        while($x <= 10);
        echo "<hr>";
         $x = 10;
        do{
            if($x == 1){
            echo "$x elefante" 
           .str_repeat(" incomoda", $x  )."<br>";
            echo "muito menos<br>";
            
            }else{
              
            if($x %2 != 0){
                echo "$x elefantes " .str_repeat(" incomodam", $x). " muito menos<br>";
                 
            }
            else {
                echo "$x elefantes incomodam muita gente <br>";
                
            }
          }
            
            $x--;

        }
        while($x >= 1);
    ?>
            </div>

            <div class="heroi">
            <h1>  <span class="elefante1"></span>PATINHOS FORAM PASSEAR (com WHILE)</h1>
            <?php
            $y = 5;
            while ($y >= 2) {
                echo "<p>";

                echo " $y patinhos foram passear<br>

            Além das montanhas para brincar<br>

            A mamãe gritou: Quá, quá, quá, quá<br>";

                $y--;

                echo "Mas só $y patinhos voltaram de lá<br><br>";
            }
            echo "Um patinho foi passear<br>
            Além das montanhas para brincar<br>
            A mamãe gritou: Quá, quá, quá, quá <br>
            Mas nenhum patinho voltou de lá <br><br>
            Poxa, a mamãe patinha ficou tão triste naquele dia<br>
            Aonde será que estavam os seus filhotinhos?<br>
            Mas essa história vai ter um final feliz<br>
            Sabe por quê?<br><br>
            A mamãe patinha foi procurar<br>
            Além das montanhas, na beira do mar<br>
            A mamãe gritou: Quá, quá, quá, quá!<br>
            E os cinco patinhos voltaram de lá<br><br>";
                                   echo "</p>";

            ?>

            <h1>  <span class="elefante"></span>ELEFANTES INCOMODAM (com WHILE)</h1>

            <?php

            $y = 1;
            while ($y <= 10) {
                echo "<p>";
                if ($y == 1) {
                    echo "$y elefante"
                        . str_repeat(" incomoda ", $y);
                    echo "muita gente<br>";
                    $y++;
                }

                if ($y % 2 == 0) {
                    echo "$y elefantes " . str_repeat(" incomodam", $y) . " muito mais<br>";
                    $y++;
                } else {
                    echo "$y elefantes incomodam muita gente <br>";
                    $y++;
                }
                                echo "</p>";

            }
            
            $y = 10;
            echo "<hr>";
            while ($y >= 1) {
                 echo "<p>";
                     if ($y == 1) {
                        echo "$y elefante" . str_repeat(" incomodam ", $y) ;
                        echo "muito menos<br>";
                }
                else{
                    if ($y % 2 != 0) {
                         echo "<p>";
                         echo "$y elefantes " . str_repeat(" incomodam", $y) . " muito menos<br>";
                                    }
                     else {
                         echo "$y elefantes incomodam muita gente <br>";
                         echo "</p>";
                         }
                }
                $y--;
                 echo "</p>";
            }

            ?>
            </div>
        </div>
        <script src="portfolio/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".patinho", {
                strings: ["1.", "2.", "3." , "4.", "5."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
                <script>
            var typed = new Typed(".patinho2", {
                strings: ["1.", "2.", "3." , "4.", "5."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>

<script>
            var typed = new Typed(".elefante", {
                strings: ["1.", "2.", "3." , "4.", "5."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
        <script>
            var typed = new Typed(".elefante1", {
                strings: ["1.", "2.", "3." , "4.", "5."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
    </body>
</html>

