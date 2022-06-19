<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../resources/css/index.css" rel="stylesheet" type="text/css">

    <title>Publicaciones</title>

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
                    <a class="nav-link active" aria-current="page" href="../models/mostrarImg.php">Publicaciones</a>
                </li>
                </ul>
            </div>

            <div class="btnLogin" style="align-items:right;">
                <a href="../views/login.php" style="text-decoration: none; color: white;">Cerrar Sesión</a>
            </div>
        </div>
      </nav>
    <br>
    <br>
    <center>
        <table class="tabla" border="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Operacion</th>
                </tr>

            </thead> 
            <tbody>
            <?php
                require_once '../database/db.php';
                $db = new Database;
                $conexion = $db->connect();

                $query = "SELECT * FROM publicacion";
                $resultado = $conexion->query($query);
                while($row = $resultado->fetch_assoc()){

            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><img src="data:image/jpg;base64,"<?php echo base64_encode($row['imagen']); ?>/></td>
                    <th><a href="../models/eliminar.php">Eliminar</a></th>
                </tr>
            <?php
                }
                ?>
            </tbody> 
        </table>
    </center>          
    
</body>
</html>