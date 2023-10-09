<?php
include('config.php');

if (isset($_POST['Iniciar'])) {

    // Obtener los valores ingresados en el formulario
    $usua = htmlspecialchars($_POST['usuario']);
    $contra = htmlspecialchars($_POST['contraseña']);

    try {
        // Preparar la consulta para recuperar el hash almacenado
        $stmt = $pdo->prepare("SELECT `contraseña` FROM `usuarios` WHERE `usuario` = :usuario");

        // Asignar valores a los parámetros
        $stmt->bindParam(':usuario', $usua);

        // Ejecutar la consulta
        $stmt->execute();

        // Obtener el hash almacenado
        $hash = $stmt->fetchColumn();

        // Verificar si la contraseña ingresada es válida
        if (password_verify($contra, $hash)) {
            // La contraseña es válida, iniciar sesión
            session_start();
            $_SESSION['usuario'] = $usua;
            header("Location: index.php");
        } else {
            // La contraseña es inválida, mostrar un mensaje de error
            $mensaje = 'Usuario o contraseña incorrectos.';
            header('Location: secion.php?mensaje=' . urlencode($mensaje));
            exit();
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

$conn = null;

?>



