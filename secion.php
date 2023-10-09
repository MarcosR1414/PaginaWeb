<!doctype html>
<html lang="en">
<head>
  <title>HOLA</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet"href="secion.css" >

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://www.dafontfree.net/embed/c2FudGVsaWEtcm91Z2gtYWx0LWJvbGQtdGhyZG1vJmRhdGEvNTEvcy8yMTkzMi9TYW50RWxpYVJvdWdoQWx0Qm9sZFRockRFTU8ub3Rm" rel="stylesheet" type="text/css"/>

</head>
<body class= "img"style="background-image: url(fondo/fond.jpg);">
<div class= "Nil">
 <h1>Senati </h1>
</div>
<div class="login-box">
		<h2>Iniciar Sesión</h2>
  
    <div class="mensajeh"><?php
    // Mostrar mensaje de error si se produjo un error en el inicio de sesión
    if (isset($_GET['mensaje'])) {
      echo '<p style="color:white">' . htmlspecialchars($_GET['mensaje']) . '</p>';
    }
    ?>
    </div>

		<form method="POST" action="procesa_secion.php">
			<div class="user-box">
				<input type="text" name="usuario" required>
				<label for="usuario">Usuario</label>
			</div>
			<div class="user-box">
				<input type="password" name="contraseña" required>
				<label for="contraseña">Contraseña</label>
			</div>
      <a>
      <button class="button" type="submit" name="Iniciar">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        
        Iniciar</button>
</a>

    
  

  <button class="button3" onclick="location.href='registro.php'">
  <a><span></span>
  <span></span>
  <span></span>
  <span></span>
  Regístrate aquí</a></button>
  </form>
  </div> 
  </body>
  </html>
  
  
  
  