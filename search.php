<?php 
include 'php/db.php';
$conection = conn();

if(!isset($_POST['buscar'])){
 $buscar= $_POST['buscar'] = "";
}

$buscar = $_POST['buscar'];

$sql_read ="SELECT * FROM registroventas WHERE fecha LIKE '%".$buscar."%' OR 
cliente LIKE '%".$buscar."%' OR 
producto LIKE '%".$buscar."%' OR
marca LIKE '%".$buscar."%' OR
cantidad LIKE '%".$buscar."%' OR
precio LIKE '%".$buscar."%' OR
total LIKE '%".$buscar."%' ";

$query = mysqli_query($conection, $sql_read);

?>