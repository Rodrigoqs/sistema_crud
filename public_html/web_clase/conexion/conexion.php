<?php 
$servidor ="localhost";
$usuario ="id14875253_administrador";
$pass ="RS?Oq4cbnPCDpxvm";
$basedatos ="id14875253_gestion";
$conexion = new mysqli($servidor,$usuario,$pass,$basedatos);
if(!$conexion){
    echo "NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
    exit();
}
?>