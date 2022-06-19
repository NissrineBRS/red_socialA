<?php

class Usuarios{
    private $email=0;
    private $username=0;
    private $contraseña=0;

    function __construct($email, $username, $contraseña){
        $this->email=$email;
        $this->username=$username;
        $this->contraseña=$contraseña;
    }

}

?>