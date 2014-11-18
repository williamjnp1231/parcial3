<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="Gift,gift,gift to you,to you,regalo,to,you,">
<meta name="description" content="Pagina de regalos, la mejor opcion para Ganar explendidos juguetes y cupones de viaje.">
<link rel="shortcut icon" href="imagenes/favicon.ico">
<title>formulario de registro</title>
<script src="js\jquery.js"></script>
<script src="js\jquery.validate.js"></script>
<link href="js\css.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function(){
        $('#form1').validate({
            rules :{
             nombre : {
                    required : true,
                    minlength : 2,
                    maxlength : 30
                },
                apellidos : {
                    required : true,
                    minlength: 2,
					maxlength : 35
                   	    
                },
             pass : {
                    required : true,
                    minlength : 4,
                    maxlength : 12
                },
  			mail : {
                    required : true,
                    email : true,
                },
            },
         messages : {
	 nombre : {
                    required : "Debe ingresar un Nombre",
                    minlength : "El Nombre debe tener un minimo de 2 caracteres",
                    maxlength : "El Nombre debe tener un maximo de 30 caracteres"
                },
                apellidos : {
                    required : "Debe ingresar un Apellido",
                    minlength : "El Apellido debe tener un minimo de 2 caracteres",
                    maxlength : "El Apellido debe tener un maximo de 35 caracteres"
                },
	
                pass : {
                    required : "Debe ingresar una Contrasena",
					minlength : "La Contrasena debe tener un minimo de 4 caracteres",
                    maxlength : "La Contrasena debe tener un maximo de 12 caracteres"
	            },
				mail : {
                    required : "Debe ingresar un Correo",
					email : "El Correo debe ser Valido"
                },
            }
        });    
    });
</script>

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
	position:absolute;
	top:50%;
	left:50%;
	margin-top:-150px;
	margin-left:-200px;
	width:400px;
	min-height:100px;
	background-color:white;
	overflow:hidden;
	border-radius:5px;
	}
	
#titulo{
	font-size:1.6em;
	text-align:center;
	margin-top:20px;
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
		}
		
</style>

</head>

<body>
<section id="formulario">
<p id="titulo">FORMULARIO DE REGISTRO</p>

<form name="form1" method="post" action="publicacion.php">
<input type="text" id="nombre" class="input" name="nombre" placeholder="Nombre">
<input type="text" id="apellidos" class="input" name="apellidos" placeholder="Apellidos">
<input type="mail" id="mail" class="input" name="mail" placeholder="Correo Electronico">
<input type="password" id="pass" class="input" name="pass" placeholder="Contraseña">
<input type="submit" id="enviar" value="Enviar">
</form>
</section>
</body>
</html>
