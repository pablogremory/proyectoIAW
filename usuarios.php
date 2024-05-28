<?php
require 'conexion.php';

$sql = "SELECT * FROM jugador";
$resultado = $mysqli->query($sql);

$sql2 = "SELECT * FROM campeon ORDER BY NOMBRE";
$resultado2 = $mysqli->query($sql2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="icon" type="image/jpg" href="img/icons8-liga-de-leyendas-96.png"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.4/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/icono.png" alt="Icono LOL" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
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
<div class="container">
    <br>
    <div class="row">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">AÑADIR</button>
    </div>
    <br><br>
    <table id="tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>K</th>
                <th>D</th>
                <th>A</th>
                <th>Main</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) {
                $sql3 = "SELECT * FROM campeon WHERE id_c='$fila[main]'";
                $resultado3 = $mysqli->query($sql3);
                $fila2 = $resultado3->fetch_assoc();
                echo "<tr>
                        <td>$fila[nick]</td>
                        <td>$fila[k]</td>
                        <td>$fila[d]</td>
                        <td>$fila[a]</td>
                        <td>$fila2[nombre]</td>
                        <td>
                            <div class='d-flex justify-content-center'>
                                <button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#editarModal$fila[id_j]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
                                        <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z'/>
                                    </svg>
                                </button>
                            </div>
                            <div class='modal fade' id='editarModal$fila[id_j]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-dialog-centered' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>EDITANDO USUARIO</h5>
                                        </div>
                                        <div class='modal-body'>
                                            Estas editando los datos del usuario <b>$fila[nick]</b>:
                                        </div>
                                        <div class='editar'>
                                            <form class='form-inline' id='editar' name='editar' action='editar.php' autocomplete='off' method='POST'>
                                                <input type='hidden' name='id_j' value='$fila[id_j]'>
                                                <input type='hidden' name='nick' value='$fila[nick]'>
                                                <input type='hidden' name='main' value='$fila[main]'>
                                                <div class='input-group mb-2 mr-sm-2'>
                                                    <div class='input-group-prepend'>
                                                        <div class='input-group-text'>K</div>
                                                    </div>
                                                    <input type='number' class='form-control' id='$fila[k]' name='k' min='0' value='$fila[k]' required>
                                                </div>
                                                <div class='input-group mb-2 mr-sm-2'>
                                                    <div class='input-group-prepend'>
                                                        <div class='input-group-text'>D</div>
                                                    </div>
                                                    <input type='number' class='form-control' id='$fila[d]' name='d' value='$fila[d]' min='0' required>
                                                </div>
                                                <div class='input-group mb-2 mr-sm-2'>
                                                    <div class='input-group-prepend'>
                                                        <div class='input-group-text'>A</div>
                                                    </div>
                                                    <input type='number' class='form-control' id='$fila[a]' name='a' min='0' value='$fila[a]' required>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-secondary' data-dismiss='modal'>CANCELAR</button>
                                                    <button type='submit' class='btn btn-primary mb-2'>EDITAR</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class='d-flex justify-content-center'>
                                <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#borrarModal$fila[id_j]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                                        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                                    </svg>
                                </button>
                            </div>
                            <div class='modal fade' id='borrarModal$fila[id_j]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='exampleModalLabel'>Borrar Usuario</h5>
                                        </div>
                                        <div class='modal-body'>
                                            Estas apunto de borrar el usuario <b>$fila[nick]</b>, ¿estas seguro que quieres continuar?
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>CANCELAR</button>
                                            <a href='eliminar.php?id=$fila[id_j]'><button type='button' class='btn btn-primary'>CONFIRMAR</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document"> 
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NUEVO USUARIO</h5>
      </div>
      <div class="modal-body">
        Introduce un nuevo nombre de usuario.
      </div>
      <div class="añadir">
        <form class="form-inline" id="añadir" name="añadir" action="añadir2.php" autocomplete="off" method="POST">
          <div class="input-group mb-2 mr-sm-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nombre de usuario" required>
          </div>
      </div>
      <form class="form-inline">
        <div class="modal-body">
          Selecciona tu main:
        </div>
        <div class="modal-body">
          <select class="form-select" name="main" aria-label="Default select example">
            <?php
            while($fila = $resultado2->fetch_assoc()){
              $idc = $fila["id_c"];
              $nombrecamp = $fila['nombre'];
              echo "<option value='$idc'>$nombrecamp</option>";
            }
            ?>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
          <button type="submit" class="btn btn-primary mb-2">AÑADIR</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.4/datatables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    $('#tabla').DataTable({
        responsive: true,
        autoWidth: false,
        deferRender: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "Todos"]],
        language: {
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            search: "Buscar:",
            paginate: {
                next: "Siguiente",
                previous: "Anterior"
            },
        }
    });
});
</script>
</body>
</html>
