<html>
    <head>
        <title>RESPOSTA 02</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://i.pinimg.com/originals/0b/92/73/0b9273d73d5d0bf77f07d29d2408b7c5.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/style.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&family=Saira+Extra+Condensed:wght@100;500&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <i class='bx bxl-php'></i>
                    <div class="logo_name"> FELIPE ATT 2 </div><!--logo_name-->
                </div><!--logo-->
                <i class='bx bx-menu' id="btn"></i>
            </div><!--logo_content-->
            <ul class="nav_list">
                <li>
                        <i class='bx bx-search'></i>
                        <input type="text" placeholder="PESQUISAR">

                   <span class="tooltip">PESQUISAR</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/menuatt2.html">
                        <i class='bx bx-grid-alt' ></i>
                        <span class="links_name">PRINCIPAL</span>
                    </a>
                   <span class="tooltip">PRINCIPAL</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/testandoCss/landing.html">
                        <i class='bx bx-user' ></i>
                        <span class="links_name">SOBRE EU</span>
                    </a>
                        <span class="tooltip">SOBRE EU</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/att01.php">
                        <i class='bx bxs-food-menu'></i>
                        <span class="links_name">EXERCÍCIO 1</span>
                    </a>
                        <span class="tooltip">EXERCÍCIO 1</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/att02.php">
                        <i class='bx bx-football'></i>
                        <span class="links_name">EXERCÍCIO 2</span>
                    </a>
                   <span class="tooltip">EXERCÍCIO 2</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/att03.php">
                        <i class='bx bx-cart-alt'></i>
                        <span class="links_name">EXERCÍCIO 3</span>
                    </a>
                   <span class="tooltip">EXERCÍCIO 3</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/conexaoBDphp/felipe/htdocs/att1PWfelipe/menu.php">
                        <i class='bx bxs-briefcase'></i>
                        <span class="links_name">ATIVIDADE 1</span>
                    </a>
                   <span class="tooltip">ATIVIDADE 1</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="https://pbs.twimg.com/profile_images/1500613332079886336/x2-zuDsF_400x400.jpg" alt="">
                        <div class="name_job">
                            <div class="name"> FELIPE BARBOSA</div> <!--name-->
                                <div class="job"> DS </div> <!--job-->

                        </div> <!--name_job-->
                    </div> <!--profile_details-->
                    <i class='bx bx-log-out' id="log_out"></i>
                </div> <!--profile-->
            </div> <!--profile_content-->
        </div><!--sidebar-->
        <div class="home_content">
            <div class="text"><h1>ADOLPHO FUTEBOL CLUB</h1></div>
            <div class='sidebar-table'>
                <table>
                    <tr>
                        <th>IDADE</th>
                        <th>CATEGORIA</th>
                        <th>SUB</th>
                    </tr>
                    <td id="infantil">DE 05 a 10</td>
                    <td>INFANTIL</td>
                    <td>SUB 5 -- SUB 10</td>
                    </tr>
                    <tr id="juvenil">
                        <td>DE 11 a 15</td>
                        <td>JUVENIL</td>
                        <td>SUB 11 -- SUB 15</td>
                    </tr>
                    <tr id="junior">
                        <td>DE 16 a 20</td>
                        <td>JUNIOR</td>
                        <td>SUB 16 -- SUB 20</td>
                    </tr>
                    <tr id="profi">
                        <td>DE 21 A 23</td>
                        <td>PROFISSIONAL</td>
                        <td>SUB 21 -- SUB 23</td>
                    </tr>
                </table>
        <?php
            $nome = $_POST['name'];
            $idade = $_POST['idade'];
            $categoria;


            switch ($idade){
                case 5:
                case 6:
                case 7:
                case 8:
                case 9:
                case 10:
                    echo "<h3> $nome, VOCÊ TEM $idade ANOS E É CRAQUE, E POR ISSO, VAI JOGAR NA CATEGORIA INFANTIL</h3>";
                    break;

                case 11:
                case 12:
                case 13:
                case 14:
                case 15:
                    echo "<h3> $nome , VOCÊ TEM $idade ANOS E É CRAQUE, E POR ISSO, VAI JOGAR NA CATEGORIA JUVENIL</h3>";
                    break;

                case 16:
                case 17:
                case 18:
                case 19:
                case 20:
                    echo "<h3> $nome , VOCÊ TEM $idade ANOS E É CRAQUE, E POR ISSO, VAI JOGAR NA CATEGORIA JUNIOR</h3>";
                    break;

                case 21:
                case 22:
                case 23:
                    echo "<h3> $nome , VOCÊ TEM $idade ANOS E É CRAQUE, E POR ISSO, VAI JOGAR NA CATEGORIA PROFISSIONAL</h3>";
                    break;
                
                default:
                    echo "<h3> QUE ISSO JUVENA, OPÇÃO INVÁLIDA, RETORNE A PÁGINA INICIAL PARA ANALISARMOS SE VOCÊ TEM O PERFIL DE NOSSO TIME!!! </h3>";
            }



        ?>
                    </div>
                </div><!--home_content-->
        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");
            let searchBtn = document.querySelector("bx-search");

            btn.onclick = function(){
                sidebar.classList.toggle("active");
            }

            searchBtn.onclick = function(){
                sidebar.classList.toggle("active");
            }
        </script>
    </body>
</html>