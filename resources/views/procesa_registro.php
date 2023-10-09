<?php

include('config.php');

if (isset($_POST['registrarme'])) {
    // Obtener los valores ingresados en el formulario y aplicar htmlspecialchars
    $usua = htmlspecialchars($_POST['usuario']);
    $contra = htmlspecialchars($_POST['contraseña']);
    $nom = htmlspecialchars($_POST['nombre']);
    $apel = htmlspecialchars($_POST['apellido']);
    $corr = htmlspecialchars($_POST['correo']);
    
    // Verificar que los campos obligatorios no estén vacíos
    if (!empty($usua) && !empty($contra) && !empty($nom) && !empty($apel) && !empty($corr)) {
        // Hash de la contraseña
        $hash = password_hash($contra, PASSWORD_BCRYPT);

        try {
            // Preparar la consulta con parámetros
            $stmt = $pdo->prepare("INSERT INTO `usuarios` (`usuario`, `contraseña`, `nombre`, `apellido`, `correo`) VALUES (:usuario, :contrasena, :nombre, :apellido, :correo)");

            // Asignar valores a los parámetros
            $stmt->bindParam(':usuario', $usua);
            $stmt->bindParam(':contrasena', $hash);
            $stmt->bindParam(':nombre', $nom);
            $stmt->bindParam(':apellido', $apel);
            $stmt->bindParam(':correo', $corr);

            // Ejecutar la consulta
            $stmt->execute();

            // Redirigir a la página de inicio de sesión
            header("Location: secion.php");
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Por favor, complete todos los campos obligatorios.";
    }
}

// Cerrar la conexión a la base de datos
$conn = null;

?>
