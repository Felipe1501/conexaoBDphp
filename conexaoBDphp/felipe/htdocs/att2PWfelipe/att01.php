<html>
    <head>
        <title>EXERCÍCIO 1</title>       
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://blog.rcky.com.br/wp-content/uploads/2020/03/cardapio-padaria-e1584631826106.jpg" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/conexaoBDphp/felipe/htdocs/att2PWfelipe/style.css" rel="stylesheet">
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
                    <a href="#">
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
            <div class="text">
                <h2> CARDÁPIO PODRÃO DO GEJÃO </h2>
            <div class='sidebar-table'>
                <table>
                    <tr>
                        <th>CÓDIGO</th>
                        <th>LANCHES</th>
                        <th>PREÇO UNITÁRIO R$</th>
                    </tr>
                    <tr id="100" onclick="bao(100);">
                    <td >100</td>
                    <td >CACHORRO QUENTE</td>
                    <td>R$ 7,00</td>
                    </tr>
                    <tr id="101" onclick="bao(101);">
                        <td>101</td>
                        <td>BAURU SIMPLES</td>
                        <td>R$ 7,50</td>
                    </tr>
                    <tr id="102" onclick="bao(102);">
                        <td>102</td>
                        <td>BAURU COM OVO</td>
                        <td>R$ 8,50</td>
                    </tr>
                    <tr id="103" onclick="bao(103);">
                        <td>103</td>
                        <td>HAMBURGUER</td>
                        <td>R$ 8,90</td>
                    </tr>
                    <tr id="104" onclick="bao(104);">
                        <td>104</td>
                        <td>CHEESBURGUER</td>
                        <td>R$ 8,80</td>
                    </tr>
                    <tr id="105" onclick="bao(105);">
                        <td>105</td>
                        <td>REFRIGERANTE</td>
                        <td>R$ 6,00</td>
                    </tr>
                </table>
                <div class='content'>
                    <form action='/conexaoBDphp/felipe/htdocs/att2PWfelipe/resposta01.php' method='post'>
                        <label for='cod'> DIGITE O CÓDIGO DO PRODUTO: </label><br>
                        <input type='number' id='cd' name='cd' placeholder='PRODUTO'><br>
                        <label for='qt'> DIGITE A QUANTIDADE: </label><br>
                        <input type='number' id='qt' name='qt' placeholder='QUANTIDADE'><br><br>
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