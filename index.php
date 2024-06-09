<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/jpg" href="img/icons8-liga-de-leyendas-96.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/jquery.dataTables.min.css"> -->
</head>
<!-- Apartado del navbar sin contenido, solo logo -->

<body>



    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/icono.png" alt="Icono LOL" width="50" height="50"></a>
        </div>
    </nav>
    <!-- Botones de redirección para las diferentes páginas, texto y carousel. -->
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <div id="carouselExampleControls" class="carousel slide border border-black rounded" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/vayne.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/kaisa.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/faker.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>


            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Centro de administración de usuarios, campeones, objetos y builds</h1>
                <p class="lead">Apartado de administración para configurar aspectos estadísticos de los datos y elementos del juego League Of Legends.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="usuarios.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Usuarios</button></a>
                    <a href="campeones.php"><button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Campeones</button></a>
                    <a href="builds.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Herramientas</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cards de 3 con imagen y texto -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
        <div class="card">
            <img src="img/usuarios.png" class="card-img-top" alt="card-group-image" width="300" height="330">
            <div class="card-body">
                <h5 class="card-title">USUARIOS</h5>
                <p class="card-text">Apartado donde se puede visualizar estadisticas, añadir, modificar o eliminar cada usuario.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/personajes.png" class="card-img-top" alt="card-group-image" height="330">
            <div class="card-body">
                <h5 class="card-title">CAMPEONES</h5>
                <p class="card-text">Apartado para visualizar estadisticas de campeones. <br> También tener la posibilidad de poder añadir nuevos campeones.</p>
            </div>
        </div>
        <div class="card">
            <img src="img/historial.png" class="card-img-top" alt="card-group-image" height="330">
            <div class="card-body">
                <h5 class="card-title">Herramientas</h5>
                <p class="card-text">Apartado para poder ver builds o crear nuevas.</p>
            </div>
        </div>
    </div>


    <!-- Importación de scripts para bootstrap -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <script src="js/jquery.dataTables.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('.carousel').carousel()
        })
    </script>
</body>

</html>