<?php
  require_once '../database/db.php';
  $db = new Database;
  $conexion = $db->connect();
  
  $_SESSION['username'];
  session_start();
  session_destroy();
?>