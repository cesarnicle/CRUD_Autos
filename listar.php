<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include_once('conexion.php');
    include_once('cabecera.php');

    echo '<pre>';
    $sql = "SELECT id,marca,año,precio,imagen FROM modelos";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {


            echo "<div class='mostrar'>" . $fila['id'] . " " . $fila['marca'] . " " . $fila['año'] . " " . $fila['precio'] . "</div>";
            echo "<div class='mostrar_img'> <img class='auto_img' src='" . $fila['imagen'] . "' alt=''>" . "</div>" . "<hr>";
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }

    ?>
 
    </pre>



</body>

</html>