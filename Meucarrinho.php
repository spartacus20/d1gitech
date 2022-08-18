<?php 
if(!isset($_SESSION)) { session_start(); }      
include "conexao.php"; 


$id_sessao = $_SESSION['id_utilizador']; 

$query = mysqli_query($ligax,  

"SELECT * FROM produtos INNER JOIN carrinho_utilizador 
ON produtos.idProduto = carrinho_utilizador.idProduto
WHERE carrinho_utilizador.id_sessao = '$id_sessao'
");  
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/carrinho.css">
    <link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body class="bg-light">

<?php
    require_once ('Header.php');
?>
<br>
<br>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>O meu carrinho</h6>
                <hr>

                <?php

                $total = 0;
                if(mysqli_num_rows($query) > 0){
                  while ($items = mysqli_fetch_assoc($query)){
                    
                        ?>
                        <form action="removercarrinho.php?action=remove&id=<?= $items['idProduto'] ?>&ids=<?=  $id_sessao ?>" method="post" class="cart-items">
                        <div class="border rounded">
                        <div class="row bg-white">
                            <div class="col-md-3 pl-0">
                                <img src="./image/<?= $items['Imagens'] ?>" alt="">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2"> <?php echo $items['nome']?> </h5>
                                <h5 class="pt-2"><?php echo $items['Preco']?>€</h5>
                                <?php $total = $total + (float)$items['Preco'] ?>
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                            </div>
                           
                        </div>
                    </div>
                    </form>
                    <?php
                    
                    
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>DETALHES</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (mysqli_num_rows($query) > 0){
                                $count  = mysqli_num_rows($query);
                                echo "<h6>Preço ($count items)</h6>";
                            }else{
                                echo "<h6>Preço (0 items)</h6>";
                            }
                        ?>
                        <h6>Envio</h6>
                        <hr>
                        <h6>TOTAL:</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><?php echo $total; ?>€</h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6><?php
                            echo $total;
                            ?>€</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
