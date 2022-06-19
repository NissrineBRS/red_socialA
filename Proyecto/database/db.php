<?php

    // $servidor= 'localhost';
    // $usuario='root';
    // $password='';
    // $nombreBD='red_social';

    // try {
    //     $conn = new PDO('mysql:host=$servidor; dbname=$nombreBD; $username=$usuario; $contraseña=$password');
    // } catch(PDOException $e) {
    //     die('Connected failed:' .$e->getMessage());
    
    // }

    class Database{
        private $localhost;
        private $username;
        private $password;
        private $bdname;
    
        /*function __construct($localhost, $username, $password, $bdname){
            $this->localhost=$localhost;
            $this->username=$username;
            $this->password=$password;
            $this->bdname=$bdname;
        }*/
    
        function connect(){
            $mysqli = new mysqli("localhost", "root", "", "red_social");
            if($mysqli->connect_error){
                die('Error de Conexión (' . $mysqli->connect_errno . ') '
                    . $mysqli->connect_error);
            }else{
                return $mysqli;
            }
        }
    
        function connectNoPass(){
            $mysqli = new mysqli("localhost", "root", "", "red_social");
            if($mysqli->connect_error){
                die('Error de Conexión (' . $mysqli->connect_errno . ') '
                    . $mysqli->connect_error);
            }else{
                return $mysqli;
            }
        }

        function querySelect($bbdd, $query){
            $consulta = $bbdd->query($query);
            return $consulta;
    
        }
    
        function queryAssoc($bbdd, $query){
            return $bbdd->query($query)->fetch_assoc();
        }

        function queryArray($bbdd, $query){
            return $bbdd->query($query)->fetch_array();
        }
    
        function queryInsert($bbdd, $query){
            $bbdd->query($query);
        }
    
    }
    
    session_start();
    
?>