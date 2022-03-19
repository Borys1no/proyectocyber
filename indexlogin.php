<?php
require_once 'php/db.php';
session_start();
if(isset($_SESSION['usser'])){
    if($_SESSION['usser']['perfil']== "administrador"){
        header('location: home.php');
    }else if($_SESSION['usser']['perfil']== "empleado"){
        header('location: empleado/homeE.php');
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    
<form action="" method="POST" id="login">
<h1>Inicie Sesión</h1>
<table>
<input type="text" name="user" id="user" pattern="[A-Za-z0-9_-@-]{1,15}" required placeholder="Por favor ingrese su usuario y/o correo">
<input type="password" name="pass" id="pass" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Por favor ingrese su contaseña">
<input type="submit" value="Iniciar sesion" class="boton">
</table>

</form>
     <script src="js/jquery-3.2.1.min.js"></script>
     <script src="js/min.js"></script>
</body>
</html>