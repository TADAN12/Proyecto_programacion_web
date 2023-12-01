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
                <div class="encabezado2">

                    <h1>Crear cuenta</h1>

                </div>
                <div class="form-container">
                    <form id="a" action="crear_cuenta_datos.php" method="post">
                    
                        <input type="text" placeholder="correo" name="Correo" required>
                        <input type="password" placeholder="contraseña" name="Contrasena" required >
 
                        <button type="submit" class="btn-create"  >Crear cuenta</button>


                    
                    </form>
                    <button class="btn-regresar" onclick="window.location.href='login.php'"formnovalidate >Regresar a ingreso</button>
                    <input type="reset" name="borrar" id="borrar" value="Restablecer" />
                </div>
            </div>
        </div>
    </main>
</body>

</html>