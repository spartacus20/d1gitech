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
	<link rel="stylesheet" type="text/css" href="style/produto.css">
</head>
<body>
	<!-- Header -->
<?php include "Header.php";?>
	<!-- Navbar Up -->
<?php include "Navbar.php";?>
	<!-- Formulario-->



<div class="espaco"></div>
<div class='contenedorCards'>
<div class='contenedorCards'>


	<?php
        
        include "conexao.php"; 

		while($linha = mysqli_fetch_assoc($executar_query)){
			
			$idProduto = $linha['idProduto']; 
			$nome = $linha['nome']; 
		 	$preco = $linha['Preco']; 
			$especi = $linha['especi']; 
			$imagens = $linha['Imagens']; 
			
	
			
			echo  "<div class='card'>"; 
					echo"<div class='wrapper'>"; 
					
					echo"
					<input name='ref' type='hidden' id='ref' value='$idProduto' />         
					<input name='titulo' type='hidden' id='titulo' value='$nome	' />                         
					<input name='precio' type='hidden' id='precio' value='$preco' />
			
					<input name='cantidad' type='hidden' id='cantidad' value='1' class='pl-2' />
					";
						echo"<img src='./image/".$imagens."' alt=''  class='imgProd'>"; 
						echo"<div class='infoProd'>"; 
						echo"<p class='nombreProd'>$nome</p>"; 
		                  
							echo"<div class='preciosGrupo'>"; 
							echo"<p class='precio precioProd'  style='text-align: center'>$preco €</p>";
							echo "<div class= 'Contenedorbtn'>"; 
							echo"<button style='width: 100%; height: 50px; color: black'><a href='./infoProduto.php?id=$idProduto+'>Ver detalhes</button>";
							 
							echo "</div>";  
							echo"</div>"; 
				echo"</div>"; 
				echo"</div>";
			echo"</div>";


		}
		

	?>
</div>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>

