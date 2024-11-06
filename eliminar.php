<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<body>
    <?php

    include_once('cabecera.php');
    include_once('conexion.php');

    echo '<pre>';
    $sql = "SELECT id, marca, año, precio, imagen FROM modelos";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {

            echo "<form action=eliminarA.php method='post'><input type='text' readonly name='id' class='datos' value='" . $fila['id'] . "'>";

            echo "<input type='text' readonly name='marca' class='datos' value='" . $fila['marca'] . "'>";

            echo "<input type='text' readonly name='año' class='datos' value='" . $fila['año'] . "'>";

            echo "<input type='text' readonly name='precio' class='datos' value='" . $fila['precio'] . "'>";

            echo "<input type='text' readonly name='imagen' class='datos' value='" . $fila['imagen'] . "'>";

            echo "<button class='actualizar_eliminar'>Eliminar</button></form><hr class='separa'>";



            /*    echo $fila['id'] . " " . $fila['nombre'] . " " . $fila['apellido'] . "<hr>";   */
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }






    ?>

    </pre>
</body>

</html>