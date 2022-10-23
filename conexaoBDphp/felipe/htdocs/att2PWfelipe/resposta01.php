<html>
    <head>
        <title>RESPOSTA 01</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://blog.rcky.com.br/wp-content/uploads/2020/03/cardapio-padaria-e1584631826106.jpg" type="image/x-icon">
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
            <div class="text"><h1>PEDIDO PODRÃO DO GEJÃO</h1></div>
            <?php
    $cd = $_POST['cd'];
    $qt = $_POST['qt'];
    $result;

    switch ($cd) {
        case 100:
            $result = 7.00 * $qt;
            echo "<img src='https://img.itdg.com.br/images/recipes/000/119/770/357545/357545_original.jpg' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt CACHORRO QUENTE DE CÓDIGO 100, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        case 101:
            $result = 7.50 * $qt;
            echo "<img src='https://receitasnotadez.com.br/wp-content/uploads/2020/04/bauru-ao-ponto-chic-bauru.jpg' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt BAURU SIMPLES DE CÓDIGO 101, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        case 102:
            $result = 8.50 * $qt;
            echo "<img src='https://64.media.tumblr.com/b0dbf3bd1f8b63eff37e195bc61cdc80/tumblr_oe0lp114ns1rgim2vo1_1280.jpg' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt BAURU COM OVO DE CÓDIGO 102, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        case 103:
            $result = 8.90 * $qt;
            echo "<img src='https://www.sabornamesa.com.br/media/k2/items/cache/b9ad772005653afce4d4bd46c2efe842_XL.jpg' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt HAMBURGUER DE CÓDIGO 103, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        case 104:
            $result = 8.80 * $qt;
            echo "<img src='https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Double-Cheeseburger-1:1-3-product-tile-desktop?wid=829&hei=515&dpr=off' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt CHEESBURGUER DE CÓDIGO 104, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        case 105:
            $result = 6.00 * $qt;
            echo "<img src='https://static.clubeextra.com.br/img/uploads/1/844/19796844.jpg' class='lanches' />
            <h3>PEDIDO ANOTADO JOVEM MANCEPO, VOCÊ ESCOLHEU $qt REFRIGERANTE DE CÓDIGO 105, E IRÁ PAGAR R$ $result REAIS !!!</h3>";
            break;

        default:
            echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXiKWVxPIxz3dlE3Sobt5e6N7drF8TI7pKuQ&usqp=CAU' class='invalido' />
            <h3>OPS, OPÇÃO INVÁLIDA, VOLTE A PÁGINA DE PEDIDO E ESCOLHA SEU PODRÃO DO GEJÃO!!!</h3>";
            break;
    }
    ?>
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