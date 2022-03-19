<?php 
include 'php/db.php';

$conn = conn();
$id = $_REQUEST['ide'];
$sql = "DELETE FROM admin WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if($resultado){
    header('location: perfiles.php');

}else{
    echo 'No se pudo eliminar ';
}

?>