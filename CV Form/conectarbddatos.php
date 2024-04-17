<?php

$hostname="localhost";
$username="root";
$password="";
$basededatosname="Cv_MTL";
$tablaname="cv";

$conexion=mysqli_connect ($hostname, $username, $password, $basededatosname);
if(!$conexion){
    die("Error al conectar".mysqli_connect_error());
    }
echo "Conectado correctamente a la base de datos"
?>
