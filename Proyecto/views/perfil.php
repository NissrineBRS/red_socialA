<?php
    require_once '../database/db.php';

    $db = new Database;
    $conexion = $db->connect();
    //session_start();
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../resources/css/index.css" rel="stylesheet" type="text/css">

    <title>Perfil</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../resources/img/AirianIcon.png" alt="" width="60px" height="25%">AIRIAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="../views/perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../models/mostrarImg.php">Publicaciones</a>
                </li>
                </ul>
            </div>

            <div class="btnLogin" style="align-items:right;">
            <a href="../views/login.php" style="text-decoration: none; color: white;">Cerrar Sesión</a>
            </div>
        </div>
      </nav>
</br>
</br>
      <div class="container col col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="perfil col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="imagenPerfil">
                    <div class="imagen">
                        <img src="../resources/img/moon.jpg" width="35%" height="35%" class="circular-square" alt="">
                    </div>
                    <br>
                    <div class="datosP">
                    <form action="">
                        <ul class="navbar-nav">
                            <li>
                                <a class="nav-link" aria-current="page" href="#">Likes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../models/mostrarImg.php">Publicaciones</a>
                            </li>
                        </ul>
                    </form>
                    </div>
                   
                </div>
                <div class="bodyPerfil">
                    <form id="formPerfil" action="../models/subirImagen.php" method="POST" enctype="multipart/form-data"> <!--para enviar los archivos a la base de datos-->
                        <div class="publicacionPerfil">
                            <input type="text" id="nombre" name="nombre" placeholder="nombre de la imagen"></br></br>
                            <input type="file" id="imagen" name="imagen" clase="btnFile" value=""></br></br>
                            <input type="submit" class="btnPubli" value="Publicar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>