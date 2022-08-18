<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D1giTech</title>
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
<!--CONTACTE-NOS-->
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
					<div class="contact-form">
					    <br>
					    <div id="titulo">
					        <style>
    div#titulo{
        color:#3d85c6;
        font-weight: bold;
        font-family:'BebasNeue Regular';
        text-shadow: 2px 4px 4px #eee;
        text-align: center;
        font-size: 25px; line-height: 1.7em;
        letter-spacing: 2px; word-spacing: 4px;
        height: 100px;
        width: 300px;
        position: relative;
        top: 20px;
        left: 45px;
    }
    </style>
						<h1>Contacte-nos</h1></div>
							<div class="form-group group-coustume">
								<input type="text" class="form-control name-form" placeholder="Nome">
								<input type="text" class="form-control email-form" placeholder="E-mail">
								<input type="text" class="form-control subject-form" placeholder="Assunto">
								<textarea rows="4" cols="50" class="message-form"></textarea>
								<button type="submit" class="btn btn-default btn-submit">Submeter</button>
							</div>
					</div>
			</div>
			<div class="google-maps">
			 <div id="googleMap"></div>

			</div>
		</div>

	</div>



<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}



</script>

<script>
	$(window).resize(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
	});

	$(window).load(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
		google.maps.event.addDomListener(window, 'load', initialize());
	});
	
</script>

	<!-- _______________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="image/d1gitech_logo.png" alt="logo1"><span class="dotlogo">&bullet;</span>
		</div>
		<ul class="nav nav-tabs bottomlinks">
			<li role="presentation" ><a href="https://d1gitech.000webhostapp.com/d1gitech/aempresa.php" role="button">A EMPRESA</a></li>
			<li role="presentation"><a href="https://d1gitech.000webhostapp.com/d1gitech/politica.php">POLITICA DE PRIVACIDADE</a></li>
			<li role="presentation"><a href="https://d1gitech.000webhostapp.com/d1gitech/termos.html">TERMOS E CONDIÇOES</a></li>
			<li role="presentation"><a href="https://d1gitech.000webhostapp.com/d1gitech/contactenos.php">CONTACTE-NOS</a></li>
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