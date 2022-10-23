<html>
    <head>
        <title>RESPOSTA 03</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT8w1oKfFWe9lW1c-oJzxHwU0xO8B3c3dblQ&usqp=CAU" type="image/x-icon">
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
            <div class="text"><h1>SCOOBY MERCADORIAS</h1></div>
            <?php
    $cd = $_POST['cd'];

    switch ($cd) {
        case 1:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É UM ALIMENTO NÃO-PERECÍVEL!!!</h3>
            <img src='https://a-static.mlcdn.com.br/618x463/macarrao-vilma-espaguete-8-com-500g/drogariaaraujosa/139718/e72a5e99fc90fe2db4b4996cfa33d604.jpg' class='lanches' />";
            break;

        case 2:
            echo "
            <h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É UM ALIMENTO PERECÍVEL!!!</h3>
            <img src='https://tudosobrealimentosebebidas.com.br/img/leite-longa-vida-integral-mococa-1l.jpg' class='lanches' />";
            break;

        case 3:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É UM ALIMENTO PERECÍVEL!!!</h3>
            <img src='https://www.qgjeitinhocaseiro.com/wp-content/uploads/2020/02/alimentos-pereciveis.jpg' class='lanches' />";
            break;

        case 4:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É UM ALIMENTO PERECÍVEL!!!</h3>
            <img src='https://pubimg.band.uol.com.br/files/548e26b5cdbfe9fcd1ff.png' class='lanches' />";
            break;

        case 5:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE VESTUÁRIO!!!</h3>
            <img src='https://d2r9epyceweg5n.cloudfront.net/stores/001/654/362/products/camisa-nike-brasil-comemorativa-copa-america-201920-jogador-masculina-aj5007-100-21-403530ccbd962432a416219929741704-1024-1024.png' class='lanches' />";
            break;

        case 6:
            echo "<h3 class='echo'> O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE VESTUÁRIO!!!</h3>
            <img src='https://images.tcdn.com.br/img/img_prod/498725/real_madrid_camisa_manga_longa_2022_uniforme_titular_11033_1_c8294285a01cfcd5cc5e6819fd86e9f1.png' class='lanches' />";
            break;

        case 7:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE HIGIENE PESSOAL!!!</h3>
            <img src='https://a-static.mlcdn.com.br/1500x1500/sabonete-dove-tradicional-90g/webglamour/10693594803/7b05a0caebece725fc7c7f79874b3c91.jpg' class='lanches'";
            break;

        case 8:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE LIMPEZA e UTENSÍLIOS DOMÉSTICOS!!!</h3>
            <img src='https://www.mrmuscleclean.com/~/media/mrmuscle/products/product-pack-shots/mold_mildew.png?la=pt-br&h=624&w=491&la=pt-BR&hash=819549D8624EF0154CB1C549F661B2A0' class='lanches' />";
            break;

        case 9:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE LIMPEZA e UTENSÍLIOS DOMÉSTICOS!!!</h3>
            <img src='https://a-static.mlcdn.com.br/574x431/utensilios-de-cozinha-tramontina-jogo-utensilios-domesticos/torreforte/680083323/e5bee0111547cdc3624184a8ad72883a.jpg' class='lanches' />";
            break;

        case 10:
            echo "<h3 class='echo'>O PRODUTO ESCOLHIDO DE CÓDIGO $cd, É DA PARTE DE LIMPEZA e UTENSÍLIOS DOMÉSTICOS!!!</h3>
            <img src='https://medlimp.com.br/wp-content/uploads/2020/10/produtos-de-higiene-e-limpeza.jpg' class='lanches' />";
            break;    

        default:
            echo "<h3 >O PRODUTO ESCOLHIDO É DE CÓDIGO INVÁLIDO, VOLTE A PÁGINA SCOOBY MERCADORIAS E ESCOLHA UM PRODUTO VÁLIDO!!!</h3>
            <img src='https://archive.org/download/2000-promo-for-johnny-bravo/2000-promo-for-johnny-bravo.thumbs/2000%20promo%20for%20Johnny%20Bravo_000009.jpg' class='lanches' />";
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