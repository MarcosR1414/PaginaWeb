<?php
// Datos de conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$dbname = "registro";

try {
    // Establecer la conexión a la base de datos usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    // Configurar PDO para que lance excepciones en caso de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
    die(); // Terminar la ejecución del script
}
?>