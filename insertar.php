<?php
include_once('conexion.php');

$marca = $_POST['marca'];
$anio = $_POST['año'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];


$sql = "INSERT INTO modelos (marca,año,precio,imagen)
VALUES ('$marca','$anio', '$precio', '$imagen')";


if ($conexion->query($sql) === TRUE) {

    echo 'Registro Ingresado Correctamente';
} else {

    echo $conexion->error;
}


$conexion->close();

header('Location:listar.php');
