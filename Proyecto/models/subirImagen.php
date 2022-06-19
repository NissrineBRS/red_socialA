<?php
    require_once '../database/db.php';

    $db = new Database;
    $conexion = $db->connect();
    //$conexion = mysqli_connect('localhost', 'root', '', 'red_social');

    $nombre = $_POST['nombre'];
    $Imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])); //guarda la imagen en byte en la db

    $query = "INSERT INTO publicacion(titulo, imagen) VALUES('$nombre','$Imagen')";
    $resultado = $conexion->query($query);

    // if($resultado){
    //     echo 'INSERTADA';
    // }
    // else{
    //     echo 'NO INSERTADO';
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href = '../views/perfil.php'>Volver</button>
</body>
</html>