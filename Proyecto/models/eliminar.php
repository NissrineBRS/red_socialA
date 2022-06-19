<?php

require_once '../database/db.php';
require_once '../models/mostrarImg.php';
$db = new Database;
$conexion = $db->connect();

$idP = $_POST['id'];
$erase = "DELETE FROM publicacion WHERE id= '$idP'";
$query = $conexion->prepare($erase);

?>