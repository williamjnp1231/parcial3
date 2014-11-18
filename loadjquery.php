<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="js/jquery.min.js"></script>
<script>	
$(document).ready(function(){
$("#clicmyprofile").click(function(){
$.ajax({
	url:"profile.html",
	dataType:"html",
    beforeSend:function(objeto){
    $("#contenedor").html("Cargando.....")
    },
	success: function(datos){
	$("#contenedor").html(datos)
	}
});
});
});
</script>
</head>

<body>
<ul>
     <li><a href="#" id="clicmyprofile">My Profile</a></li>
     <li>Send Mail</li>
</ul>
<div id="contenedor" style="background:#00BFFF; border:1px solid #090; height:200px;"></div>
</body>
</html>