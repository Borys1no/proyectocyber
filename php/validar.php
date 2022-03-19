<?php 
require_once 'db.php';
session_start();
$conn=conn();
$sql = "SELECT nombres, perfil
FROM admin WHERE usuario= '".$_POST['user']."'
AND pass='".$_POST['pass']."' ";
$consul=mysqli_query($conn,$sql)or die(mysqli_error($conn));

if($consul->num_rows==1):
    $datos = $consul->fetch_assoc();
    $_SESSION['usser']=$datos;
    echo json_encode(array('error' =>  false, 'tipo'=>$datos['perfil']));
else:
    echo json_encode(array('error' => true));
endif;

mysqli_close($conn);

?>