<?php
//definimos las credenciales de la base de datos
$servidor = "localhost:3307";
$usuario = "root";
$contrasena = "";
$bdd = "loginRegister";

//creamos la conexion
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bdd);

if(!$conexion){
    die("Conexion fallida" .mysqli_connect_error()); //si la conexion falla, se muestra un mensaje de error y termina la ejecucion
}



