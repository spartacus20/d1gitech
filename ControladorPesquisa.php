<?php

   // include "conexao.php"; 

   
$ligax = mysqli_connect('localhost','id18418381_loja','D1*tech12345');
					
if(!$ligax){
echo "<p> Falha na ligação";
exit;
}


 mysqli_select_db($ligax,'id18418381_d1gitech');

   

     if(empty($_POST['pesquisa'])){
        echo "<script type='text/javascript'>alert('Insira dados para pesquisar');</script>";
        ?> <meta http-equiv="refresh" content="0; url=index.php"> <?php
     }

    $Pesquisa = $_POST['pesquisa'];
     
     $query =  "SELECT * FROM produtos WHERE nome LIKE '%$Pesquisa%' OR especi LIKE '%$Pesquisa%'";
     
     $executar_query = mysqli_query($ligax, $query); 


     include "PaginaProdutos.php"; 

?>