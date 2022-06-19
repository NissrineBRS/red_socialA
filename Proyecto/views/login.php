<?php
    require_once '../database/db.php';

    $db = new Database;
    $conexion = $db->connect();
    //$conexion = mysqli_connect('localhost', 'root', '', 'red_social');

    //RECOGE LOS DATOS DEL REGISTRO Y LOS GUARDA EN LA BASE DE DATOS.
    if(!empty($_POST['registro'])){
        //var_dump($_POST);
        if($_POST['password'] == $_POST['password2']){
            $sql = "INSERT INTO usuarios(email, username, contraseña) VALUES (?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sss', $_POST['email'], $_POST['name'], $_POST['password']);
            $query->execute();
            $query->close();
        }else {
            echo '<script type="text/javascript">alert("Las contraseñas no coinciden")</script>';
        } 
    }
    
    //EXTRAE DE LA BASE DE DATOS LOS DATOS GUARDADOS DEL REGISTRO PARA HACER LOGIN.
    if(!empty($_POST['inicio'])){
      //var_dump($_POST);
        $sql = "SELECT * from usuarios where email='".$_POST['email']."' and contraseña='".$_POST['password']."';";
        
        //echo($sql);
        $resultado = $conexion->query($sql);
        //echo ($resultado->num_rows);
       // var_dump($resultado);
        if($resultado->num_rows>0){
          $datos = $resultado->fetch_assoc();
          session_start();
          $_SESSION['usuario']=$datos;
          echo ($_SESSION['usuario']['username']);

        }
    }     

    
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Airian Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

  <link href="../resources/css/login.css" rel="stylesheet" type="text/css"> <!--CSS ENLAZADO-->
  

</head>
<body>

  <div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
    <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
      
      <form action="" method="POST">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bodyLogin">
        <ul class="encabezado">
          <li>

            <input type="radio" name="encabezado" id="tab1" checked="checked"/>
            <label class="nav" for="tab1" style="border-radius: 17%; background-color:#080f08;">Iniciar Sesión</label>

            <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12" id="loginTabContent">
              <form id="loginForm" method="POST">
              <input type="hidden" name="inicio" value="1">
                <label class="frm" for="email">Correo electronico</label>
                <input type="email" id="email" name="email" required="required" placeholder="usuario134@mail.com"/>

                <label class="frm" for="password">Contraseña</label>
                <input type="password"id="password" name="password" required="required" placeholder="KI7+dkcvdf3/"/>

                <input type="checkbox" name="keep"/>
                <label class="frm" for="keep">Mantenme conectado</label>

                <button id="loginBtn" type="submit" onclick = "location='../views/perfil.php'">Iniciar Sesión</button>
                <span><a href="">¿Has olvidado tu contraseña?</a></span>

              </form>
            </div>

          </li>

          <li>
            <input type="radio" name="encabezado" id="tab2"/>
            <label class="nav" for="tab2" style="border-radius: 17%; background-color:#080f08;">Registrarse</label>

            <div class="tab-content col-lg-12 col-md-12 col-sm-12 col-xs-12" id="signupTabContent">
              <form method="POST">
                <input type="hidden" name="registro" value="2">
                <label class="frm" for="email">Nombre Usuario</label>
                <input type="text" id="name" name="name" size="26" required="required" placeholder="usuario134"/>

                <label class="frm" for="email">Correo electronico</label>
                <input type="email" id="email" name="email" size="26" required="required" placeholder="usuario134@mail.com"/>

                <label class="frm" for="password">Contraseña</label>
                <input type="password" id="password" name="password" size="26" required="required" placeholder="KI7+dkcvdf3/"/>

                <label class="frm" for="password">Confirmar Contraseña</label>
                <input type="password" id="password" name="password2" size="26" required="required" placeholder="KI7+dkcvdf3/"/>

                <button id="loginBtn" type="submit">Registrarse</button>

              </form>
            </div>

          </li>

        </ul>
      </div>
    </form>

    </div>

  </div>

  <!--<script></script>-->

</body>
</html>