<?php
   
include "conexao.php";


if(isset($_GET['id'])){
    $id =$_GET['id']; 

    $query = mysqli_query($ligax,  "DELETE FROM `produtos` WHERE idProduto = '$id'");  
    
  
    if($query == TRUE){
        ?>
        <meta http-equiv="refresh" content="0; url='paineladmin.php'">
    <?php
    }else{
        echo "Id de produto nao valida"; 
    }


}








    

?>