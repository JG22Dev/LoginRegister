<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        include "./inc/head.php";
    ?>
</head>
<body>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 card">
                    <form method="POST" action="./php/login.php" autocomplete="off">
                        <h2 class="mt-5 mb-4">Inicia Sesion</h2>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" name="usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Iniciar sesión</button>
                    </form>
                    <p class="mt-3">¿No tienes cuenta? <a href="./vista/registro.php">Registrate aqui</a></p>
                </div>
            </div>
        </div>
        

    </main>
</body>
</html>