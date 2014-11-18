<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="keywords" content="Gift,gift,gift to you,to you,regalo">
<meta name="description" content="Pagina de regalos, la mejor opcion para Ganar explendidos juguetes y cupones de viaje.">
<title>LOGIN</title>
<link rel="shortcut icon" href="imagenes/favicon.ico">
<style>
*{
	margin:0px;
	padding:0px;
	font-family: Helvetica Neue, Arial, sans-serif;
	font-weight:lighter;
}
html,body{
	background-color:#DDDDDD;
	}

#formulario{
	border-radius:5px;
	position:absolute;
	top:50%;
	left:50%;
	margin-top:-150px;
	margin-left:-200px;
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
	
	#entrar{
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

</head>

<body>
<section id="formulario">
<p id="titulo">Login</p>

<form action="publicacion.php" method="post" name="formlogin">
<input type="mail" id="mail" class="input" name="mail" placeholder="Correo Electronico">
<input type="password" id="pass" class="input" name="pass" placeholder="Contraseña">
<input type="submit" id="entrar" value="Entrar">
</form>
</section>
</body>
</html>
