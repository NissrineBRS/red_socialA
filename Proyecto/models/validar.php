<?php

    $email=$_POST['email'];
    $contraseña=$_POST['password'];

    //validar usuario
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$contraseña;

?>