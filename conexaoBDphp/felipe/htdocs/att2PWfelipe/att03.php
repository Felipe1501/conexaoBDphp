<html>
    <head>
        <title>EXERCÍCIO 3</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTT8w1oKfFWe9lW1c-oJzxHwU0xO8B3c3dblQ&usqp=CAU" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/att2PWfelipe/style.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&family=Saira+Extra+Condensed:wght@100;500&display=swap" rel="stylesheet">

        <script>
            function bao(x){
                document.getElementById('cd').value = x;
            }
        </script>

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
                    <a href="/att2PWfelipe/menuatt2.html">
                        <i class='bx bx-grid-alt' ></i>
                        <span class="links_name">PRINCIPAL</span>
                    </a>
                   <span class="tooltip">PRINCIPAL</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/testandoCss/landing.html">
                        <i class='bx bx-user' ></i>
                        <span class="links_name">SOBRE EU</span>
                    </a>
                        <span class="tooltip">SOBRE EU</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/att2PWfelipe/att01.php">
                        <i class='bx bxs-food-menu'></i>
                        <span class="links_name">EXERCÍCIO 1</span>
                    </a>
                        <span class="tooltip">EXERCÍCIO 1</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/att2PWfelipe/att02.php">
                        <i class='bx bx-football'></i>
                        <span class="links_name">EXERCÍCIO 2</span>
                    </a>
                   <span class="tooltip">EXERCÍCIO 2</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                    <a href="/att2PWfelipe/att03.php">
                    <i class='bx bx-cart-alt'></i>
                        <span class="links_name">EXERCÍCIO 3</span>
                    </a>
                   <span class="tooltip">EXERCÍCIO 3</span>
                </li>
            </ul>
            <ul class="nav_list">
                <li>
                <a href="/att1PWfelipe/menu.php">
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
            <div class="text"><h2>SCOOBY MERCADORIAS</h2></div>
            <div class='sidebar-table'>
                <table>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>PRODUTO</th>
                    </tr>
                    <tr id="1" onclick="bao(1);">
                    <td>1</td>
                    <td>MACARRÃO</td>
                    </tr>
                    <tr id="2" onclick="bao(2);">
                        <td>2</td>
                        <td>LEITO MOCOCA</td>
                    </tr>
                    <tr id="3" onclick="bao(3);">
                        <td>3</td>
                        <td>DÚZIA DE OVOS</td>
                    </tr>
                    <tr id="4" onclick="bao(4);">
                        <td>4</td>
                        <td>LEGUMES</td>
                    </tr>
                    <tr id="5" onclick="bao(5);">
                        <td>5</td>
                        <td>CAMISA NIKE BRASIL</td>
                    </tr>
                    <tr id="6" onclick="bao(6);">
                        <td>6</td>
                        <td>CAMISA ADIDAS REAL MADRID</td>
                    </tr>
                    <tr id="7" onclick="bao(7);">
                        <td>7</td>
                        <td>SABONETE DOVE</td>
                    </tr>
                    <tr id="8" onclick="bao(8);">
                        <td>8</td>
                        <td>MRS. MUSCULO LIMPEZA</td>
                    </tr>
                    <tr id="9" onclick="bao(9);">
                        <td>9</td>
                        <td>KIT COZINHA</td>
                    </tr>
                    <tr id="10" onclick="bao(10);">
                        <td>10</td>
                        <td>KIT LIMPEZA</td>
                    </tr>
                </table>
                <div class='content'>
                    <form action='/att2PWfelipe/resposta03.php' method='post'>
                        <label for='cod'> DIGITE O CÓDIGO DO PRODUTO: </label><br>
                        <input type='number' id='cd' name='cd' placeholder='PRODUTO'><br><br>
                        <input type='submit' id='enviar' name='enviar' value=' ENVIAR'>
                    </form>
                    
                    </div>
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