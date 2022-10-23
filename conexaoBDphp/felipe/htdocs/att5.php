

<html>
    <head>
        <title>ATIVIDADE 5</title>
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
        <h1>  Calcule a média de <span class="numeros"></span> números digitados pelo usuário.</h1>
        <?php
     echo"  <meta charset='UTF-8'>
 <form action='#' method='POST'>
 <label for='nr1'> NÚMERO 1 </label><input type='number' name='n1'><br>
 <label for='nr2'> NÚMERO 2 </label><input type='number' name='n2'><br>
 <label for='nr3'> NÚMERO 3 </label><input type='number' name='n3'><br>
 <label for='nr4'> NÚMERO 4 </label><input type='number' name='n4'><br>
 <label for='nr5'> NÚMERO 5 </label><input type='number' name='n5'><br>
 <label for='nr6'> NÚMERO 6 </label><input type='number' name='n6'><br>
 <label for='nr7'> NÚMERO 7 </label><input type='number' name='n7'><br>
 <label for='nr8'> NÚMERO 8 </label><input type='number' name='n8'><br>
 <label for='nr9'> NÚMERO 9 </label><input type='number' name='n9'><br>
 <label for='nr10'> NÚMERO 10 </label><input type='number' name='n10'><br>
   
    <input type='submit' value='Média'>
</form>";

     //1– Calcule a média de 10 números digitados pelo usuário.
     $soma = 0;
     $numeros = array($_POST['n1'],
                      $_POST['n2'],
                      $_POST['n3'],
                      $_POST['n4'],
                      $_POST['n5'],
                      $_POST['n6'],
                      $_POST['n7'],
                      $_POST['n8'],
                      $_POST['n9'],
                      $_POST['n10']);
                     
     for($x = 0; $x < count($numeros); $x++)
     {
         $soma = $soma + $numeros[$x];
     }

        echo "<label for='nrMed'> MÉDIA DOS NÚMEROS DIGITADOS: </label>  ".($soma/10);

 ?>
        <h1>  Digite <span class="maior"></span> números e verifique qual é o maior.</h1>
        <?php
     echo "<meta charset='UTF-8'>
 <form action='#' method='POST'>
 <label for='nr1'> NÚMERO 1 </label><input type='number' name='nro1'><br>
 <label for='nr2'> NÚMERO 2 </label><input type='number' name='nro2'><br>
 <label for='nr3'> NÚMERO 3 </label><input type='number' name='nro3'><br>
 <label for='nr4'> NÚMERO 4 </label><input type='number' name='nro4'><br>
 <label for='nr5'> NÚMERO 5 </label><input type='number' name='nro5'><br>
    
    <input type='submit' value='Maior'>
</form>";

     //2 – Digite 5 números e verifique qual é o maior.

 

     $maior = 0;
     $numeros = array($_POST['nro1'],
                      $_POST['nro2'],
                      $_POST['nro3'],
                      $_POST['nro4'],
                      $_POST['nro5']);
                      
     for($x = 0; $x < count($numeros); $x++)
     {
        if($numeros[$x] > $maior)
        {
            $maior = $numeros[$x];
        }            
     }
 
        echo "<label for='nrMaioR'> MAIOR DOS NÚMEROS DIGITADOS: </label>  ".$maior;
 
 ?>
            </div>

            <div class="heroi">
            <h1>  Peça ao usuário para digitar <span class="idades"></span> idades. Exiba quantas pessoas são maior de idade (18 anos) e quantas são menores.</h1>
            <?php
          echo "<meta charset='UTF-8'>
 <form action='#' method='POST'>
 <label for='nr1'> NÚMERO 1 </label><input type='number' name='nr1'><br>
 <label for='nr2'> NÚMERO 2 </label><input type='number' name='nr2'><br>
 <label for='nr3'> NÚMERO 3 </label><input type='number' name='nr3'><br>
 <label for='nr4'> NÚMERO 4 </label><input type='number' name='nr4'><br>
 <label for='nr5'> NÚMERO 5 </label><input type='number' name='nr5'><br>
 <label for='nr6'> NÚMERO 6 </label><input type='number' name='nr6'><br>
 <label for='nr7'> NÚMERO 7 </label><input type='number' name='nr7'><br>
 <label for='nr8'> NÚMERO 8 </label><input type='number' name='nr8'><br>
 <label for='nr9'> NÚMERO 9 </label><input type='number' name='nr9'><br>
 <label for='nr10'> NÚMERO 10 </label><input type='number' name='nr10'><br>
   
    <input type='submit' value='Idade'>
</form>";

     //3 – Peça ao usuário para digitar 10 idades.
     //Exiba quantas pessoas são maior de idade (18 anos) e quantas são menores.
    
     $maior = 0;
     $menor = 0;
     $idades = array($_POST['nr1'],
                      $_POST['nr2'],
                      $_POST['nr3'],
                      $_POST['nr4'],
                      $_POST['nr5'],
                      $_POST['nr6'],
                      $_POST['nr7'],
                      $_POST['nr8'],
                      $_POST['nr9'],
                      $_POST['nr10']);
                     
     for($x = 0; $x < count($idades); $x++)
     {
        if($idades[$x] <= 18)
        {
            $menor++;
        }
        else
        {
            $maior++;
        }
     }

        echo "<label for='Maiores'> <br>MAIORES DE IDADES: </label> ".$maior;
        echo "<label for='Menores'> <br>MENORES DE IDADES: </label>  ".$menor;
    
 ?>

            <h1> Peça ao usuário para digitar  <span class="nomes"></span> nomes. Exiba na tela todos os nomes digitados, porém de maneira invertida (do último para o primeiro).</h1>
            <?php
        echo "<meta charset='UTF-8'>
 <form action='#' method='POST'>
 <label for='nm1'> NOME 1 </label><input type='text' name='nm1'><br>
 <label for='nm2'> NOME 2 </label><input type='text' name='nm2'><br>
 <label for='nm3'> NOME 3 </label><input type='text' name='nm3'><br>
 <label for='nm4'> NOME 4 </label><input type='text' name='nm4'><br>
 <label for='nm5'> NOME 5 </label><input type='text' name='nm5'><br>
 <label for='nm6'> NOME 6 </label><input type='text' name='nm6'><br>
 <label for='nm7'> NOME 7 </label><input type='text' name='nm7'><br>
 <label for='nm8'> NOME 8 </label><input type='text' name='nm8'><br>
 <label for='nm9'> NOME 9 </label><input type='text' name='nm9'><br>
 <label for='nm10'> NOME 10 </label><input type='text' name='nm10'><br>

   
    <input type='submit' value='Nomes Invertidos'>
</form>";

     //4 – Peça ao usuário para digitar vários nomes.
     //Exiba na tela todos os nomes digitados, porém de maneira invertida (do último para o primeiro).
   
     $nomes = array($_POST['nm1'],
                      $_POST['nm2'],
                      $_POST['nm3'],
                      $_POST['nm4'],
                      $_POST['nm5'],
                      $_POST['nm6'],
                      $_POST['nm7'],
                      $_POST['nm8'],
                      $_POST['nm9'],
                      $_POST['nm10']);
                     
     for($x = count($nomes)-1; $x >= 0; $x--)
     {
         echo "<label for='nome'> <br>NOME: </label>  ".$nomes[$x];
     }

       

 ?>
            </div>
        </div>
        <script src="portfolio/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".numeros", {
                strings: ["1.", "2.", "3." , "4.", "5.", "6.", "7.", "8.", "9.", "10."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
                <script>
            var typed = new Typed(".maior", {
                strings: ["1.", "2.", "3." , "4.", "5."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>

<script>
            var typed = new Typed(".nomes", {
                strings: ["1.", "2.", "3." , "4.", "5.", "6.", "7.", "8.", "9.", "10."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
        <script>
            var typed = new Typed(".idades", {
                strings: ["1.", "2.", "3." , "4.", "5.", "6.", "7.", "8.", "9.", "10."],
                typeSpeed: 70,
                backSpeed: 60,
                loop: true
            });
        </script>
    </body>
</html>



