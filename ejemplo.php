<?php

//preguntar si los valores existen
$oculto =""; //inicializando la variable
$usuario="";
$nombre="";
$clave="";
$tipo="";
//si no ponemos los if el servidor va a tronar, es un error muy comun,hay que trabajar con 
//las variables locales
if(isset($_post("txtOculto"))){
	$oculto=$_post["txtOculto"];
}
if(isset($_post("txtUsuario"))){
	$usuario=$_post["txtUsuario"];
}

if(isset($_post("txtNombre"))){
	$nombre=$_post["txtNombre"];
}

if(isset($_post("txtClave"))){
	$clave=$_post["txtClave"];
}
if(isset($_post("txtTipo"))){
	$tipo=$_post["txtTipo"];
}



fucntion guardaUsuario ($usuario,$nombre,$clave,$tipo)
{

	//conecta al servidor mysql
	//mysql_connect (servidor,usuario,contraseña)
	$conexion=mysql_connect("localhost","root","");
	//seleccionamos la base de datos
	mysql_select_db("bd2163");
	$consulta="insert into usuarios values ('".$usuario."','".$nombre."'".$clave."','".$tipo."')"
	//ejecutamos la consulta
	mysql_query($consulta)
	//preguntamos si hubo insercion
	if(mysql_affected_rows()>0)
	{
		print "registro guardado";
	}else {  
	print "No se inserto el registro" }
}

switch ($oculto) {
	case 'guardar':
		# code...
		break;
	
	default:
		# code...
		break;
}