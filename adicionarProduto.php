<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D1giTech</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>

<!-- Header -->
<?php include "Header.php";?>
	<!-- Navbar Up -->
<?php include "Navbar.php";?>




	<!-- Formulario-->
<div id="titulo"><br><h1>Adicionar Produto</h1></div>
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
		display: flex;
		justify-content: center;
		align-items: center;
        position: relative;
	
    }
</style>

				<div class="formulario">
				<form action="addproduto.php" method="POST" enctype="multipart/form-data">
				 <label for="idProduto">Codigo do Produto</label><br>
				 <input type="text" id="fname" name="idProduto" value=" " ><br><br>
				 <label for="nome">Nome:</label><br>
				 <input type="text" id="fname" name="nome" value=" " ><br><br>
				 <label for="nome">Categorias:</label><br>
				 <select name="Categorias" id="idCategorias">
				    <option value="Nenhuma" selected="selected">Nenhuma</option>
					<option value="Computadores">Computadores</option>
					<option value="Mobilidade">Mobilidade</option>
					<option value="Componentes">Componentes</option>
					<option value="Perifericos">Periféricos</option>
					<option value="Gaming">Gaming</option>
					<option value="Coolmodding">Coolmodding</option>
					<option value="Software">Software</option>
				 </select><br><br>
				 <select name="Subcategorias" id="idSubcategorias">
				    <option value="Nenhuma" selected="selected">Nenhuma</option>
					<option value="Desktop Gaming">Desktop Gaming </option>
					<option value="Desktop Trabalho">Desktop Trabalho</option>
					<option value="Portateis">Portáteis</option>
					<option value="Smartphones">Smartphones</option>
					<option value="Tablets">Tablets</option>
					<option value="Caixas">Caixas</option>
					<option value="Acessorios">Acessórios</option>
					<option value="Fontes">Fontes</option>
					<option value="Discos Rigidos">Discos Rigidos</option>
					<option value="Memorias">Memorias</option>
					<option value="Drivers">Drivers</option>
					<option value="Drives">Drives</option>
					<option value="Processadores">Processadores</option>
					<option value="Motherboards">Motherboards</option>
					<option value="Placas Graficas">Placas Gráficas</option>
					<option value="Placas de Som">Placas de Som</option>
					<option value="Monitores">Monitores</option>
					<option value="Auscultadores">Auscultadores</option>
					<option value="Impressoras">Impressoras</option>~
					<option value="Ratos">Ratos</option>
					<option value="Webcams">Web Cams</option>
					<option value="CabosAdaptadores">Cabos e Adaptadores</option>
					<option value="Tapetes de Rato">Tapetes de Rato</option>
					<option value="Ventoinhas">Ventoinhas</option>
					<option value="Pastas termicas">Pastas Termicas</option>
					<option value="Neons">Neons, Leds…</option>
					<option value="Anti-Virus">Anti-Virus</option>
					<option value="Sistemas Operativos">Sistemas Operativos/option>
					<option value="Outros Softwares">Outros Softwares</option>


					
				 </select><br><br>

				 <label for="especi">Especificações:</label><br>
				 <textarea name="especi" id="lname" cols="30" rows="10"></textarea><br><br>
				 <label for="lname">Imagens:</label><br>
				 <input type="file" id="lname" name="imagens" value="" size="20"><br>
				  <label for="lname">Preço:</label><br>
				 <input type="text" id="lname" name="preco" value=""><br><br>
				 <input type="submit" value="Adicionar" id="btnform">
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