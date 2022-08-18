<?php

include "conexao.php"; 



if(isset($_GET['id'])){
   
    $id = $_GET['id']; 
    $idproduto = $_POST['pidProduto']; 
    $nome = $_POST['pnome']; 
    $especi = $_POST['pespeci']; 
     
    if(!empty($_FILES['pImagem']['name'])){

        $Diretorio = "/d1gitech/image/";
        $Nome_imagem = $_FILES["pImagem"]["name"]; 
        $Tipo_imagem = $_FILES["pImagem"]["type"]; 
        $Tamanho_imagem = $_FILES["pImagem"]["size"]; 
        $pasta_destino = $_SERVER["DOCUMENT_ROOT"].$Diretorio;  
        
        
  
        echo "ho";
        move_uploaded_file($_FILES["pImagem"]["tmp_name"], $pasta_destino.$Nome_imagem);
       
       /*
        if($Tamanho_imagem <= 8000000){ 
            if($Tipo_imagem == "image/jpg" || $Tipo_imagem == "image/png" || $Tipo_imagem == "image/gif" || $Tipo_imagem == "image/jfif"){
                echo "ho";
                move_uploaded_file($_FILES["pImagem"]["tmp_name"], $pasta_destino.$Nome_imagem);
            }

        }else{
            Alert("O arquivo tem que ter como maximo 8 mb. ");
        }
        */

        $query = mysqli_query($ligax,  "UPDATE `produtos` SET `idProduto`='$idproduto',`nome`='$nome',`especi`='$especi', `Imagens`='$Nome_imagem' WHERE `idProduto`='$id'");

        if($query == TRUE){
            ?><meta http-equiv="refresh" content="0; url=paineladmin.php"><?php
        }else{
            echo "Alguma coisa saiu mal"; 
        }
        
    }


    $query = mysqli_query($ligax,  "UPDATE `produtos` SET `idProduto`='$idproduto',`nome`='$nome',`especi`='$especi' WHERE `idProduto`='$id'");

    if($query == TRUE){
        ?><meta http-equiv="refresh" content="0; url=paineladmin.php"><?php
    }else{
        echo "Alguma coisa saiu mal"; 
    }


    $query = mysqli_query($ligax,  "UPDATE `produtos` SET `idProduto`='$idproduto',`nome`='$nome',`especi`='$especi' WHERE `idProduto`='$id'");

    if($query == TRUE){
        ?><meta http-equiv="refresh" content="0; url=paineladmin.php"><?php
    }else{
        echo "Alguma coisa saiu mal"; 
    }


   

}

 ?>