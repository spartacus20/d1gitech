<?php


//Recebemos a informacao da imagem
$Diretorio = "/d1gitech/image/";
$Nome_imagem = $_FILES["imagens"]["name"]; 
$Tipo_imagem = $_FILES["imagens"]["type"]; 
$Tamanho_imagem = $_FILES["imagens"]["size"]; 
$pasta_destino = $_SERVER["DOCUMENT_ROOT"].$Diretorio; 


$Categorias = $_POST['Categorias']; 

if($Categorias != 'Nenhuma'){
	

if($Tipo_imagem == "image/jpg" || $Tipo_imagem == "image/png" || $Tipo_imagem == "image/gif" || $Tipo_imagem == "image/jfif"){

	move_uploaded_file($_FILES["imagens"]["tmp_name"], $pasta_destino.$Nome_imagem);
}

$preco = $_POST['preco']; 
$idProduto = $_POST['idProduto'];
$nome = $_POST['nome'];
$especi = $_POST['especi'];
$Categoria =  $_POST['Categorias']; 
$Subcategoria =  $_POST['Subcategorias']; 


$ligax = mysqli_connect('localhost','id18418381_loja','D1*tech12345');

if(!$ligax){
	echo "<p> Falha na ligação";
	exit;
}

mysqli_select_db($ligax,'id18418381_d1gitech');

$insere = "INSERT INTO `produtos`(`idProduto`, `Preco`, `nome`, `especi`, `Imagens`, `Categorias`, `Subcategorias`) VALUES ('$idProduto','$preco','$nome','$especi','$Nome_imagem','$Categoria','$Subcategoria')";

$result = mysqli_query($ligax, $insere);

?>
<meta http-equiv="refresh" content="0; url=paineladmin.php"><?php

}else{
	echo "<script> alert('Seleccione uma categoria')</script>"; 
	?><meta http-equiv="refresh" content="0; url=adicionarProduto.php"><?php
}
?>



