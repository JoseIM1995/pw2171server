<?php
include("utilerias.php");
$conexion=conecta();
$u=GetSQLValueString($_GET["txtUsuario"],"text");
$consulta=sprintf("delete from usuarios where usuario=%s",$u);
mysql_query($consulta);
if(mysql_affected_rows()>0){
	print("Usuario eliminado :)");
}
else{
	print("El usuario no existe");
}
?>