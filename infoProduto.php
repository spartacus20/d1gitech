<?php include "Header.php"?>
<?php include "Navbar.php"?>

<?php 
include "conexao.php" ; 


$id = $_GET['id']; 
$query = mysqli_query($ligax,  "SELECT * FROM produtos WHERE idProduto = $id");

$linha = mysqli_fetch_array($query); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
    <link rel="stylesheet" href="style/infoproduto.css">
    <title><?= $linha['nome'] ?></title>
</head>




<body>
    <div class="ContenedorPrincipal">
        <div class="izquerda">
            <div class="ContenedorIMG">
                <img src="./image/<?= $linha['Imagens'] ?>" alt="" class="IMG">
            </div>
            <div class="ContenedorDetalhesTitulo">
                <h3 class="Detalhes">Detalhes</h3>
            </div>
            <div class="ContenedorEspeci">
                <p class="Especi">
                <?= $linha['especi'] ?>
                </p>
            </div>

        </div>
        <div class="direita">
            <div class="ContenedorTItulo">
                <h1 class="Titulo"><?= $linha['nome'] ?></h1>
            </div>
            <div class="ContenedorPreco">
                <span class="Preco"><?= $linha['Preco'] ?> €</span>
            </div>
            <div class="ContenedorBTN">
           
               <form action="carrinho.php" method="post">
                <input type="hidden" name="id_produto" value=<?= $linha['idProduto']?>>
                 <input type="hidden" name="iTitulo" value=<?= $linha['nome']?>>
                  <input type="hidden" name="iPreco" value=<?= $linha['Preco']?>>
                <button class="btn">🛒 Comprar</button>
                </form>
            </div>

        </div>
    </div>
</body>
</html>