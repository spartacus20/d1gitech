<?php

    session_start(); 
    include "conexao.php"; 
    
    
   /*
    $id = $_POST['id_produto']; 
    $nome = $_POST['iTitulo']; 
    $preco = $_POST['iPreco'];
    $quantidade = 1; 
	if(isset($_SESSION['carrinho'])){
	    $meu_Carrinho=$_SESSION['carrinho'];
	    $meu_Carrinho[] = array('Titulo' => $nome, "Preco" => $preco, "Quantidade"=>$quantidade); 
	}else{
	    $meu_Carrinho[] = array('Titulo' => $nome, "Preco" => $preco, "Quantidade"=>$quantidade); 
	    $_SESSION['carrinho'] = $meu_Carrinho; 
	}


    print_r($_SESSION);
    */

    
    $idSessao = $_SESSION['id_utilizador'];
    $id = $_POST['id_produto']; 

     
    $insere = "INSERT INTO `carrinho_utilizador`(`idProduto`, `id_sessao`) VALUES ('$id', '$idSessao')";

    $result = mysqli_query($ligax, $insere);
    
    
    if($result){
        ?> <meta http-equiv="refresh" content="0; URL=https://d1gitech.000webhostapp.com/d1gitech/infoProduto.php?id=<?= $id ?>"/><?php
        echo "<script> alert('Gostoso')</script>"; 
    }else{
            
          ?> <meta http-equiv="refresh" content="0; URL=https://d1gitech.000webhostapp.com/d1gitech/infoProduto.php?id=<?= $id ?>"/><?php
          echo "<script> alert('Ocurreu um erro')</script>"; 
    }
     

    

?>