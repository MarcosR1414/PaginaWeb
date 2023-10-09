<?php
// Datos para la conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$nombre_bd = 'registro';

// Establecer la conexión a la base de datos
$conexion = mysqli_connect($host, $usuario, $contraseña, $nombre_bd);

// Verificar si la conexión ha sido exitosa
if (!$conexion) {
  die('Error al conectar a la base de datos: ' . mysqli_connect_error());
}
?>
