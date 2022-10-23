<html>
    <head>
        <title>PORTFÓLIO FELIPE1501</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://img2.gratispng.com/20180511/lwq/kisspng-question-mark-riddler-clip-art-5af5e89fe8baf2.2410554215260653119533.jpg" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/portfolio/style.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav>
            <div class="nav_bar">
                <i class='bx bx-menu sidebarAbrir' ></i>
                <span class="logo navLogo"><a href="#">FELIPE1501</a></span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="#">FELIPE1501</a></span>
                        <i class='bx bx-x sidebarFechar' ></i>

                    </div>

                    <ul class="nav_links">
                        <li><a href="#">PRINCIPAL</a></li>
                        <li><a href="#sobre">SOBRE</a></li>
                        <li><a href="#portfolio">PORTFOLIO</a></li>
                        <li><a href="#paginas">PÁGINAS</a></li>
                        <li><a href="#contato">CONTATO</a></li>
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
        <script src="/cadastroATTfelipe/jquery.min.js">	</script>
		<script>
			$(document).ready(function() {
				$('#exampleModal').modal('show');
			});
		</script>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SISTEMA WEB 1.0</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
	  <div class="modal-body">
			<div class="mb-3 row">
				<label for="staticEmail" class="col-sm-2 col-form-label">Usuário</label>
				<div class="col-sm-10">
				  <input type="text" class="form-control" id="staticEmail" name="email">
				</div>
			  </div>
			  <div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				  <input type="password" class="form-control" id="inputPassword" name="senha">
				</div>
			  </div>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Sair</button>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
	  </form>
    </div>
  </div>
</div>
<?php

	if(!empty($_POST))
	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		if(($email == "Admin")&&($senha == "Admin"))
		{
			header('Location:menu.php');
		}else if(($email == "Felipe1501")&&($senha == "felipe1501")){
      header('Location:menu.php');
    }else
		{
			echo "<script>alert('Email ou senha incorreto');</script>";
		}
	}
?>
        <script src="/portfolio/script.js"></script>

    </body>
</html>