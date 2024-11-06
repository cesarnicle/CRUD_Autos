<?php

include_once('conexion.php');
//actualizar registros


$id = $_POST['id'];
$marca = $_POST['marca'];
$anio = $_POST['año'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];



$sql = "UPDATE modelos SET marca = '$marca' , año = '$anio' , precio = '$precio' , imagen = '$imagen' WHERE id = '$id'";

if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro actualizado correctamente";
} else {

    $conexion->error;
};

$conexion->close();

header('Location:listar.php');
