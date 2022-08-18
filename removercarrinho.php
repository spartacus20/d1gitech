<?php

   
include "conexao.php";

if(isset($_GET['id']) && isset($_GET['ids'])){
    $id =$_GET['id']; 
    $ids = $_GET['ids']; 

    $query = mysqli_query($ligax,  "DELETE FROM `carrinho_utilizador` WHERE `idProduto` = '$id' AND `id_sessao` = '$ids'");  
   
  
    if($query == TRUE){
        ?>
        <meta http-equiv="refresh" content="0; url='Meucarrinho.php'">
    <?php
    }else{
        echo "Id de produto nao valida"; 
    }


}

?>