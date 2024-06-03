<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$correo = $_POST['correo'];

// Insertamos los datos en la base de datos
$sql = "INSERT INTO usuarios (usu_id, usu_usu, usu_contrasena, usu_correo) VALUES (null, '$usuario', '$contrasena', '$correo')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
        // Iserción correcta
        ?>
		<script>
        alert("¡Se insertaron los datos correctamente!");
        </script>
    <?php
	} else {
		// Iserción fallida
        ?>
        <script>
        alert("Error: ¡No se puede insertar la informacion!");
        </script>
        <?php
        echo " " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>
