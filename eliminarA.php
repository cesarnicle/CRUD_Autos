<?php

include_once('conexion.php');
//actualizar registros


$id = $_POST['id'];



$sql = "DELETE FROM modelos WHERE id = '$id'";


if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro eliminado correctamente";
} else {

    $conexion->error;
};

$conexion->close();

header('Location:listar.php');
