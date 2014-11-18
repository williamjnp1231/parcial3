<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="Gift,gift,gift to you,to you,regalo,to,you">
<meta name="description" content="Pagina de regalos, la mejor opcion para Ganar explendidos juguetes y cupones de viaje.">
<title>REGISTRARSE</title>
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
}

article1{
	min-height:100px;
	width: 400px;
	float: left;
	border: 2px solid  #D8D8D8;
	background: white;
	border-radius: 5px;
	padding: 10px;
	margin-top: 20px;
	margin-left: 30%;
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
	
#copiar {/*Copyright*/
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
	
#formulario{
	width:400px;
	min-height:100px;
	background-color:white;
	overflow:hidden;
	}
	
#titulo{
	font-size:1.6em;
	text-align:center;
	margin-top:20px;
	color:blue;
	}
.input {
	width:350px;
	height:35px;
	margin-left:20px;
	margin-top:10px;
	padding-left:10px;
	font-size:1.1em;
	outline:none;
	border:0px;
	background-color:#DCDCDC;
	border-radius:5px;
	}
	
	#enviar{
		margin:20px;
		margin-bottom:20px;
		width:360px;
		height:40px;
		outline:none;
		border:0px;
		background-color:#B1D6FD;
		color:white;
		font-size:1.2em;
		border-radius:5px;
		-webkit-box-shadow:0px 5px 0px #3572ED;
		-moz-box-shadow:0px 5px 0px #3572ED;
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
	<li><a href="#" id="clicformulario">FORMULARIO</a>
</ul>
</center>
</nav>

<section>

<article1>

<div id="formulario">
<p id="titulo">FORMULARIO DE REGISTRO</p>

<form action=""><!--falta el metodo y la accion -->
<input type="text" id="nombre" class="input" name="nombre" placeholder="Nombre">
<input type="text" id="apellidos" class="input" name="apellidos" placeholder="Apellidos">
<input type="mail" id="mail" class="input" name="mail" placeholder="Correo Electronico">
<input type="password" id="pass" class="input" name="pass" placeholder="Contraseña">
<input type="submit" id="enviar" value="Enviar">
</form>
</div>


</article1>

</section>

<footer>

<p id="copiar">Copyright 2014 William Niebles Todos los derechos reservados | <a href="https://www.facebook.com/will.jose1" id="facebook">Facebook</a></p>
</footer>
</body>
</html>
