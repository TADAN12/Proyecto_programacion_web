<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion Web</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <main>
        <div class="row">

            <div class="colm-form">
                <div class="encabezado">

                    <h1>Iniciar sesion</h1>

                </div>
                <div class="form-container">
                    <form action="login_validar.php" method="post">
                    
                        <input type="text"  name="correo" placeholder="Correo" required>
                        <input type="password" name="contrasena" placeholder="Contraseña" required>
                        <button type="submit" class="btn-login" >Ingresar</button>
                        <input type="reset" name="borrar" id="borrar" value="Restablecer" />
                    
                    </form>
                    <button class="btn-new"  onclick="window.location.href='crear_cuenta.php'">Crear una nueva cuenta</button>
              </div>
            </div>
        </div>
    </main>
</body>

</html>