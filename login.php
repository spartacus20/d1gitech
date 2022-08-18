<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>

<!-- Header -->
<?php include "Header.php";?>
	<!-- Navbar Up -->
<?php include "Navbar.php";?>
<!-- _____________________________________________________LOGIN ______________________________-->
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    .forms{
        display: block;
        height: 55px;
        width: 400px;
        margin: 10px;
        border-radius: 15px;
        border: 1px solid black;
        font-size: 16pt;
        padding: 10px 10px;
        color: black;
    }
    div#corpo-form{
        /*background-color: black;*/
        width: 420px;
        margin: 150px auto 0px auto;
    }
    div#corpo-form h1{
        text-align: center;
        padding: 20px;
        font-family: arial;
    }
    a{
        color: black;
        text-decoration: none;
        text-align: center;
        display: block;
    }
    a:hover{
        text-decoration: underline;
    }
    input[type=submit]{
        background-color: #3d85c6;
        border: none;
        cursor: pointer;
    }
</style>
    <div id="corpo-form">
    <h1>Login</h1>
    <form method="POST" action="ControladorLogin.php">
        <input type="email" name="email" placeholder="Utilizador" class="forms">
        <input type="password" name="senha" placeholder="Senha" class="forms">
        <input type="submit" placeholder="Entrar" class="forms">
        <a href="registo.php"><strong>Registe-se</strong></a>
    </form>
    </div>


	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<br><br><br><br<br><br><br><br><br>
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/d1gitech_logo.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="#/" role="button">A EMPRESA</a></li>
			<li role="presentation"><a href="#/">POLITICA DE PRIVACIDADE</a></li>
			<li role="presentation"><a href="#/">TERMOS E CONDIÇOES</a></li>
			<li role="presentation"><a href="#/">CONTACTE-NOS</a></li>
			<li role="presentation"><a href="#/"></a></li>
		</ul>
		 <img src="image/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; 2022 D1giTech. Todos os direitos reservados
				</div>
				<div class="atisda">
				</div>
			</div>
	</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>