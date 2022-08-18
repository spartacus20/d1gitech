<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/header.css">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
    <div class="header-bar">
        <div class="izquerda">
         
        </div>
        <div class="meio">
        <form action="ControladorPesquisa.php" method="post" class="contenedorMeio">
            <div class="contenedorMeio">
            <input type="text" name= "pesquisa" placeholder="Pesquisa" class="pesquisa">
            <button type="submit" class="btnpesquisa" name="btnPesquisa">🔍</button>
            </div>
        </form>
        </div>
        <div class="direita">
            <div class="d-izquerda">
                <?php 
                    if(!isset($_SESSION)) { session_start(); }
                    if(empty($_SESSION['id_utilizador'])){
                ?>
                <ul>
                <li class="ref-texto"><a href="login.php" class="a-texto">Login</a></li>
                <li class="ref-texto"><a href="registo.php" class="a-texto">Registo</a>

                </ul>
                <?php }else { 
                    	$utilizador = $_SESSION['nome_utilizador'];  
                        ?>
                    <ul>
                    <li class="ref-texto" style="margin-top: 10px">👤</li>
                    <li class="ref-texto" style="margin-top: 10px"><?php echo $utilizador ?></li>
                    <li class="ref-texto" style="margin-top: 10px ; margin-left: 50px;"><a href="logout.php" class="a-texto-f"  style="text-overflow: clip; ">Log out</a></li>
                    </ul>
                <?php } ?>

                
            </div>
            <div class="d-direita">
            <form action="Meucarrinho.php" method="post">
                
                <button class="btn"><i class="fas fa-shopping-cart"></i></button>
                   
            </form>
          
            </div>
        </div>
    </div>
</body>
</html>