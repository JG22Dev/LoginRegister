<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include "../inc/head.php";
    ?>
</head>
<body>
    <main>
        <div class="container mt-5 ">
            <div class="row justify-content-center">
                <div class="col-md-6 card">
                    <form method="POST" action="../php/register.php" autocomplete="off">
                        <h2 class="mt-5 mb-4">Registrate</h2>
                        <div class="mb-3 form-group">
                            <input class="form-control" type="text" placeholder="Usuario" aria-label="default input example" name="usuario" required autocomplete="off">
                        </div>
                        <div class="mb-3 form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contrasena" required>
                        </div>
                        <div class="mb-3 form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electronico" name="correo" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="registro">Registrate</button>
                    </form>
                    <p class="mt-3">¿Ya tienes cuenta? <a href="../index.php">Inicia Sesion</a></p>
                </div>
            </div>
        </div>
        

    </main>
</body>
</html>