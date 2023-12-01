<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Programacion Web</title>
    <script scr="botones.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            color: #1c1e21;
        }

        table {
            border: 10px;
            width: 100%;
            border-collapse: separate;
        }

        th,
        td {
            padding: 15px;
            border-style: ridge;
            visibility: visible;
        }

        th {
            height: 40px;
            text-align: left;
        }

        body {
            margin: 40px;
        }

        .informacion {
            border: 5px solid #1877f2;
            text-align: center;
            margin-bottom: 2%;
        }

        table,
        .informacion {
            background-color: #ffffff;
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            padding: 20px;

        }

        .botones {
            text-align: center;
            margin-bottom: 5px;
        }

        .btn-actualizar,
        .btn-borrar,
        .btn-registrar {
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 30px;
            padding: 0 30px;
            color: #ffffff;
            font-weight: 700;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .actualizar{
            background-color: #1877f2;
            border: none;
            border-radius: 6px;
            font-size: 30px;
            padding: 0 30px;
            color: #ffffff;
            font-weight: 300;
            margin-top: 100px;
            margin-bottom: 0px;

        }
        

    </style>
</head>

<body>
    <div class="informacion">

        <h1>Información de cuentas</h1>

    </div>
    <div class="botones">
        <!--<button class="btn-borrar">Borrar</button>-->
        
        <button class="btn-registrar" onclick="window.location.href='login.php'">Salir</button>
        
        <form action="tabla_actualizar.php" method="post">
            <button class="btn-actualizar">Actualizar</button>
            <table>
                <tr><th>ID</th><th>Correo</th><th>Contraseña</th></tr>
                <tr><th><input type="text" name="id"></th>
                <th> <input type="text" name="correo"></th>
                <th><input type="text" name="contrasena"></th>
            <table>
        </form>
    </div>


    <div>

     <?php include 'tabla_mostrar.php'; ?>

    </div>

</body>

</html>