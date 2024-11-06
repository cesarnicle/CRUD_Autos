<?php

$servidor = 'mysql-sebabarbero.alwaysdata.net';
$usuario = '383512';
$contrasena = 'autos1234';
$bd = 'sebabarbero_autos_pythonlovers';



$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

if ($conexion->connect_error) {

    die($conexion->connect_error);
}
