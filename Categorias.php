	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">

<?php

include "conexao.php"; 


$Categorias = $_GET['Categoria']; 
$Subcategoria = $_GET['Subcategoria']; 
 
 //`Categorias` = '$Categorias' >
$query =  "SELECT * FROM `produtos` WHERE `Categorias` = '$Categorias' AND `Subcategorias` = '$Subcategoria' ";
 
$executar_query = mysqli_query($ligax, $query);


include "PaginaProdutos.php"; 



?>