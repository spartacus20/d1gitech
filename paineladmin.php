<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D1giTech</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
	<!-- Header -->
<?php include "Header.php";?>
	<!-- Navbar Up -->
<?php include "Navbar.php";?>
	<!-- Formulario-->
<div id="titulo"><br><h1>Administrar Produtos</h1></div>
<style>
    div#titulo{
        color:#3d85c6;
        font-weight: bold;
        font-family:'BebasNeue Regular';
        text-shadow: 2px 4px 4px #eee;
        text-align: center;
        font-size: 25px; line-height: 1.7em;
        letter-spacing: 2px; word-spacing: 4px;
        height: 100px;
        width: 300px;
        position: relative;
        top: 20px;
        left: 145px;
    }
    .formulario{
        color: black;
        font-weight: bold;
        text-align: center;
        font-family:'BebasNeue Regular';
        letter-spacing: 2px; word-spacing: 4px;
        left: 0px;
        top: 50px;
        position: relative;
    }
	.infoContainer{
	    margin-top: 20px;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	.tabelaContainer{
		margin-top: 50px;
		width: 70%;
		height: 500px;
		border: 1px solid black; 
		overflow: scroll;

	}

	.linha{
		display : flex; 
		text-align: center;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap; 
		flex-direction: row; 
		width: 100%; 
		border: 1px solid black; 
		height: 150px; 
	}
	.campo{
		flex: 1; 
		height: 150px;
		border: 1px solid black; 
	}
	.btn-secondary{
		background-color: gray;
		color: white;
	}
	
	

</style>
			
				<?php

                    include "conexao.php"; 
                    $query = mysqli_query($ligax,  "SELECT * FROM produtos");  


				?>

				<!---Aqui basicamente o que faço é adicionar um espaço para por a tabela dos produtos-->
				

				<div class="infoContainer">

					<div class="tabelaContainer">

						<?php

						//Aqui percorremos a tabela para e metemos dentro de divs. 
					
						while($linha = mysqli_fetch_array($query)){

							$idProduto = $linha['idProduto']; 
							$nome = $linha['nome']; 
						 	$preco = $linha['Preco']; 
							$especi = $linha['especi']; 
							$imagens = $linha['Imagens']; 
							
							echo "<div class='linha'>"; 
								echo "<div class='campo'>$idProduto</div>";
								echo "<div class='campo'>$nome</div>";
								echo "<div class='campo'>$preco</div>"; 
								echo "<div class='campo' style='overflow: scroll;'>$especi</div>";
								echo "<div class='campo'>$imagens</div>";
								echo "<div class='campo'
						
								<div class='btn-group'>
								<a href='./editarproduto.php?id=".$idProduto."' class='btn btn-secondary'>Editar</a>
								<a href='./removerproduto.php?id=".$idProduto."' class='btn btn-danger'>Remover</a>
								</div>
							</div>";	
							echo "<br>";
							


							
						}
						
						
						?>
				
					</div>
					</div>
					<div class="formulario">
					<form action="adicionarProduto.php" method="POST">
					<button name="adicionar">adicionar</button>
					</form> 

					





				</div>
				
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<br><br>
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/d1gitech_logo.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="aempresa.php" role="button">A EMPRESA</a></li>
			<li role="presentation"><a href="politica.php">POLITICA DE PRIVACIDADE</a></li>
			<li role="presentation"><a href="termos.html">TERMOS E CONDIÇOES</a></li>
			<li role="presentation"><a href="contactenos.php">CONTACTE-NOS</a></li>
		</ul>
		 <img src="image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; 2022 D1giTech. Todos os direitos reservados
				</div>
				<div class="atisda">
				</div>
			</div>
	</div>


<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>