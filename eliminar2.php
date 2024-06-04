<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir</title>
    <link rel="icon" type="image/jpg" href="img/icons8-liga-de-leyendas-96.png"/>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/jquery.dataTables.min.css"> -->
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" >
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img src="img/icono.png" alt="Icono LOL" width="50" height="50"></a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item" >
          <a class="nav-link text-light" href="usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="campeones.php">Campeones</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Herramientas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="builds.php">Builds</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
			require 'conexion.php';
			$id = $_GET['id'];
			
			$sql = "DELETE FROM campeon WHERE id_c=$id";
			$resultado = $mysqli->query($sql);

			if ($resultado > 0) {
        header('Location: campeones.php');
			} else {
				echo "<br><p class='alert alert-danger'>ERROR AL ELIMINAR EL REGISTRO</p>";
			}

			echo "<br><a href='usuarios.php' class='btn btn-primary'>Regresar</a>";

			$mysqli->close();
		?>

<script src="js/jquery-3.7.1.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" ></script>
		<!-- <script src="js/jquery.dataTables.min.js" ></script> -->
</body>
</html>