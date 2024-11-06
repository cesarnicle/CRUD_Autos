<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>



<body>

    <?php
    include_once('cabecera.php');
    ?>

    <pre>



    <form action="insertar.php" method="post">

        <label>Marca</label>
        <input type="text" name='marca' class="insert_datos"></input>

        <label>Año</label>
        <input type="text" name="año" class="insert_datos"></input>

        <label>Precio</label>
        <input type="text" name="precio" class="insert_datos"></input>

        <label>Link-imagen</label>
        <input type="text" name="imagen" class="insert_datos"></input>

        <button class="enviar">Enviar</button>


    </form>

    </pre>
    <?php
    include_once('conexion.php');

    ?>

</body>

</html>