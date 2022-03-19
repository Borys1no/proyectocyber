<?php 
include 'db.php';
$conexion= conn();


$id = $_REQUEST['id'];
$producto = $_POST['product'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$preciounitario = $_POST['preciounitario'];
$image = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));


$sql = "UPDATE producto SET producto='$producto', marca='$marca', cantidad='$cantidad', categoria='$categoria', preciounitario='$preciounitario', image='$image' WHERE id ='$id' ";
$resultado = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
if($resultado){
    header('location:../productos.php');
   
}else{
    echo "no se guardo";
}
?> 