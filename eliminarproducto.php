<?php 
include 'php/db.php';
$conn = conn();
$id = $_REQUEST['id'];
$sql = "DELETE FROM producto WHERE id = '$id'";
$resultado = mysqli_query($conn, $sql)or die(mysqli_error($conn));
if($resultado){
    header('location: productos.php');

}else{
    echo 'No se pudo eliminar ';
}
?>