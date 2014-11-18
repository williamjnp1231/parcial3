<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="Gift,gift,gift to you,to you,regalo,to,you,">
<meta name="description" content="Pagina de regalos, la mejor opcion para Ganar explendidos juguetes y cupones de viaje.">
<title>GIFT TO YOU</title>
<link rel="shortcut icon" href="imagenes/favicon.ico">
<header>
<style>
body{
	width:950px;
	margin: auto;
}

header{
	display: block;
	width: 950px;
	height: 175px;
	background-image: url("imagenes/header3.png");
	background-repeat: no-repeat;
	padding: 0px;
	margin: 30px 0px 0.5px 0px;
	border-radius: 10px;
}

nav{
	background: #EFFBFB;
	background-attachment:fixed;
	border:3px solid #EFFBFB;
	height: 45px;
	border-radius: 0px 0px 10px 10px;
	margin-bottom:10px;
}
	
#slideshow{
	background: url(imagenes/logoregalo.gif);
	width:300px;
	height: 280px;
	margin: 10px;
	float: left;
	animation: animado 10s;
	-moz-animation: animado 10s;
	-webkit-animation: animado 10s;
	-webkit-animation-iteration-count: infinite;
}

@keyframes animado{
0% {left:0px;}
33% { transition: 1s; background: url(imagenes/regalo_1.jpg) no-repeat center; }
67% { transition: 1s; background: url(imagenes/regalo_2.jpg) no-repeat center; }
100% {left: 0px;}
}
@-webkit-keyframes animado{

0% {left:0px;}
33% { transition: 1s; background: url(imagenes/regalo_1.jpg) no-repeat center;}
67% { transition: 1s; background: url(imagenes/regalo_2.jpg) no-repeat center;}
100% {left: 0px;}
}

article1{
	width: 900px;
	float: left;
	border: 2px solid  #D8D8D8;
	background: white;
	border-radius: 5px;
	padding: 10px;
	margin-top: 0px;
	margin-left: 10px;
	margin-right: auto;
	margin-bottom: 50px;
}

footer{
	text-align: center;
	clear: left;
	width: 100%;
	height: 170px;
	background-image: url(imagenes/footer.png);
	
}

nav ul li{
	
	display: inline-block;
	margin: 10px;
	
}

nav a{
	
	padding: 0px;
	border-radius: 0px 0px 10px 10px; 
	background: #EFFBFB;
	color: blue;
	text-decoration: none;
}
nav ul li:hover{
-webkit-transform: translate(0px, 20px);
-webkit-transition: 0.5s;
}
nav a:hover{
	
	padding: 10px;
	border: 2px solid white;
	border-radius: 10px; 
	background: #EFFBFB;
	color: green;
	text-decoration: none;
}
h3,h1 { text-align:center;
	color:blue;
	
	}
p {
	text-align:justify;
	font-size:18px;
	}
	
#copiar {
	float:left;
	margin-top:90px;
	margin-left:175px;
	text-align:center;
	}
#facebook{
	float:none;
	text-decoration:none;
	color:blue;
	}
	
#login{
	position:relative;
		float:right;
	}
header a{
	text-decoration:underline;
	color:blue;
	font-size:16px;
	}
	
header a:hover {
	text-decoration:none;
	color:green;
	font-size:17px;
	}
#megusta{
	float:right;
	bottom:10px;
	text-decoration:none;
	color:white;
	font-family:Arial;
	font-size:16px;
	background-color:#DADBFF;
	padding:5px;
	border-radius:5px;
	
	}
#megusta:hover{
	text-decoration:none;
	color:green;
	font-family:Arial;
	font-size:18px
	}

</style>

<div id="login">
<a href="login.php">Login</a> | <a href="registrarse.php">Registro</a>

</header>
</head>

<body bgcolor="#EFFBFB">

</div>
<nav>
<center>
<ul>
	<li><a href="index.php">INICIO</a>
	<li><a href="noticias.php">NOTICIAS</a>
	<li><a href="publicacion.php">PUBLICACION</a>
</ul>
</center>
</nav>

<section>

<article1>

<div>
        		<?php
				echo "Titulo: " . $_GET["titulo"] ."<BR>"."<BR>";
				echo "Categoria: " . $_GET["categoria"] ."<BR>"."<BR>";
				echo "Titulo: " . $_GET["noticia"] ."<BR>"."<BR>"."<BR>";
				?>
               <a href="imagenes/sorpresa.gif" id="megusta">Me Gusta</a>
        </div>		
   			
</article1>

</section>

<footer>

<p id="copiar">Copyright 2014 Ing.Sistemas Cul Todos los derechos reservados | <a href="https://www.facebook.com" id="facebook">Facebook</a></p>
</footer>
</body>
</html>
