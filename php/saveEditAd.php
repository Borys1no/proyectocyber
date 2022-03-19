<?php 
include 'db.php';
$conexion= conn();


$id = $_REQUEST['id'];
$nombres = $_POST['txtNombres'];
$apellidos = $_POST['txtApellidos'];
$usuario = $_POST['txtUsuario'];
$pass = $_POST['txtpass'];
$telefono = $_POST['txtnumero'];
$ci = $_POST['txtCi'];
$perfil = $_POST['txtPerfil'];

if(isset($_POST['txtUsuario'])){
    $usuario = $_POST['txtUsuario'];
    if(!filter_var($usuario, FILTER_VALIDATE_EMAIL)){
        echo ("Correo no es valido");
    }else{
        $sql = "UPDATE admin SET nombres='$nombres', apellidos='$apellidos', usuario='$usuario', pass='$pass', telefono='$telefono', ci='$ci', perfil='$perfil' WHERE id ='$id' ";
$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
header('location:../perfiles.php');
    }
}
