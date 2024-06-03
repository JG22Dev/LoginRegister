<?php
//Llamar al archivo que contiene la base de datos
require "conexion.php";

//validamos que el formulario y que el boton login haya sido pulsado
    if(isset($_POST['login'])){
        //obtener los valores enviados por el formulario
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
    

    $sql = "SELECT * FROM usuarios WHERE usu_usu = '$usuario' AND usu_contrasena = '$contrasena'";

    $resultado = mysqli_query($conexion,$sql);
    $num_registros = mysqli_num_rows($resultado);

        if($num_registros != 0){
            //inicio de sesion exitoso
            echo "Inicio de sesion exitoso. Bienvenido, " . $usuario . "!";
        } else {
            //credenciales invalidas
            echo "Credenciales invalidas. Por favor, verifica tu Usuario y/o Contraseña"."<br>";
            echo "Error". $sql . "<br>" . mysqli_error($conexion);
        }
    }
?>