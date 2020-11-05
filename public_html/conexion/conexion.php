<?php 
$servidor ="localhost";
$usuario ="id14875253_admin";
$pass ="9{l]x<Bc+ku^bV58";
$basedatos ="id14875253_registro";
$conexion = new mysqli($servidor,$usuario,$pass,$basedatos);
if(!$conexion){
    echo "NO SE PUEDE CONECTAR CON LA BASE DE DATOS";
    exit();
}
?>