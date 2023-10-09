<?php

include('config.php');

if (isset($_POST['registrarme'])) {

    
    // Para obtener los valores ingresados en el formulario
    $usua = htmlspecialchars($_POST['usuario']);
    $contra = htmlspecialchars($_POST['contraseña']);
    $nom = htmlspecialchars($_POST['nombre']);
    $apel = htmlspecialchars($_POST['apellido']);
    $corr = htmlspecialchars($_POST['correo']);
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
        
        header("Location: secion.php");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}


$conn = null;

?>