<?php
require 'conexion.php';

$sql = "SELECT * FROM build";
$resultado = $mysqli->query($sql);

$sql2 = "SELECT * FROM campeon ORDER BY NOMBRE";
$resultado2 = $mysqli->query($sql2);

$sql10 = "SELECT * FROM objetos WHERE tipo != 'Botas' ORDER BY NOMBRE";
$resultado10 = $mysqli->query($sql10);

$sql11 = "SELECT * FROM objetos WHERE tipo != 'Botas' ORDER BY NOMBRE";
$resultado11 = $mysqli->query($sql11);

$sql12 = "SELECT * FROM objetos WHERE tipo != 'Botas' ORDER BY NOMBRE";
$resultado12 = $mysqli->query($sql12);

$sql13 = "SELECT * FROM objetos WHERE tipo != 'Botas' ORDER BY NOMBRE";
$resultado13 = $mysqli->query($sql13);

$sql14 = "SELECT * FROM objetos WHERE tipo != 'Botas' ORDER BY NOMBRE";
$resultado14 = $mysqli->query($sql14);

$sql15 = "SELECT * FROM objetos WHERE tipo LIKE 'Botas'";
$resultado15 = $mysqli->query($sql15);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herramientas - Builds</title>
    <link rel="icon" type="image/jpg" href="img/icons8-liga-de-leyendas-96.png"/>
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.4/datatables.min.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* Centrar el contenido de las celdas */
        .text-center th, .text-center td {
            text-align: center;
        }
        .img-small {
             width: 50px;
             height: 50 px;
             border-radius: 10px;
        }
        .img-small2 {
             width: 60px;
             height: 60px;
             border-radius: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/icono.png" alt="Icono LOL" width="50" height="50"></a>
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
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
          </svg>
        </button>
    </div>
    </div>
    <div>
    <table  id="tabla" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>CAMPEÓN</th>
                <th class='text-center'>OBJETO 1</th>
                <th class='text-center'>OBJETO 2</th>
                <th class='text-center'>OBJETO 3</th>
                <th class='text-center'>OBJETO 4</th>
                <th class='text-center'>OBJETO 5</th>
                <th class='text-center'>BOTAS</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $resultado->fetch_assoc()) {
                $sql3 = "SELECT * FROM campeon WHERE id_c = '$fila[idcamp]'";
                $resultado3 = $mysqli->query($sql3);
                $fila2 = $resultado3->fetch_assoc();

                $sql4 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj1]'";
                $resultado4 = $mysqli->query($sql4);
                $fila3 = $resultado4->fetch_assoc();

                $sql5 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj2]'";
                $resultado5 = $mysqli->query($sql5);
                $fila4 = $resultado5->fetch_assoc();

                $sql6 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj3]'";
                $resultado6 = $mysqli->query($sql6);
                $fila5 = $resultado6->fetch_assoc();

                $sql7 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj4]'";
                $resultado7 = $mysqli->query($sql7);
                $fila6 = $resultado7->fetch_assoc();

                $sql8 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj5]'";
                $resultado8 = $mysqli->query($sql8);
                $fila7 = $resultado8->fetch_assoc();

                $sql9 = "SELECT * FROM objetos WHERE id_obj = '$fila[obj6]'";
                $resultado9 = $mysqli->query($sql9);
                $fila8 = $resultado9->fetch_assoc();
                

                echo "<tr>";
                echo "<td class='text-center'><img src='img/campeones/$fila2[nombre].png' data-toggle='tooltip' data-placement='right' title='$fila2[nombre]' class='img-small2'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila3[id_obj].png' alt='$fila3[nombre]' data-toggle='tooltip' data-placement='right' title='$fila3[nombre]' class='img-small'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila4[id_obj].png' alt='$fila4[nombre]' data-toggle='tooltip' data-placement='right' title='$fila4[nombre]' class='img-small'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila5[id_obj].png' alt='$fila5[nombre]' data-toggle='tooltip' data-placement='right' title='$fila5[nombre]' class='img-small'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila6[id_obj].png' alt='$fila6[nombre]' data-toggle='tooltip' data-placement='right' title='$fila6[nombre]' class='img-small'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila7[id_obj].png' alt='$fila7[nombre]' data-toggle='tooltip' data-placement='right' title='$fila7[nombre]' class='img-small'></td>";
                echo "<td class='text-center'><img src='img/objetos/$fila8[id_obj].png' alt='$fila8[nombre]' data-toggle='tooltip' data-placement='right' title='$fila8[nombre]' class='img-small'></td>";
                echo "<td>
                    <div class='d-flex justify-content-center'>
                        <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#borrarModal'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
                                <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
                            </svg>
                        </button>
                        <div class='modal fade' id='borrarModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Borrar Build</h5>
                                    </div>
                                    <div class='modal-body'>
                                        Estas apunto de borrar la build, ¿estas seguro que quieres continuar?
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>CANCELAR</button>
                                        <a href='eliminar3.php?id=$fila[id_build]'><button type='button' class='btn btn-primary'>CONFIRMAR</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>";
                echo "</tr>";
            }
            $mysqli->close();
            ?>
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CREADOR DE BUILD</h5>
            </div>
            <div class="modal-body">
                Introduce los objetos y selecciona el personaje.
            </div>
            <form class="form-inline" id="añadir" name="añadir" action="añadir3.php" autocomplete="off" method="POST">
                <div class="modal-body">
                    Elige el campeón:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="personaje">
                        <?php
                        while ($fila = $resultado2->fetch_assoc()) {
                            echo "<option value='{$fila["id_c"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Primer Objeto:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj1">
                        <?php
                        while ($fila = $resultado10->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Segundo Objeto:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj2">
                        <?php
                        while ($fila = $resultado11->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Tercer Objeto:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj3">
                        <?php
                        while ($fila = $resultado12->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Cuarto Objeto:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj4">
                        <?php
                        while ($fila = $resultado13->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Quinto Objeto:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj5">
                        <?php
                        while ($fila = $resultado14->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="modal-body">
                    Botas:
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="obj6">
                        <?php
                        while ($fila = $resultado15->fetch_assoc()) {
                            echo "<option value='{$fila["id_obj"]}'>{$fila["nombre"]}</option>";
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip({ placement: 'bottom', animation: true, delay: 150})
             });
</script>
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
