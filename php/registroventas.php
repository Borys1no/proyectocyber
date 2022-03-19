<?php 
include 'db.php';
$conn = conn();
$fecha = $_POST['fecha'];
$cliente = $_POST['vCliente'];
$producto = $_POST['producto'];
$marca = $_POST['vMarca'];
$cantidad = $_POST['vCanditad'];
$precio = $_POST['vPrecio'];
$total = $_POST['total'];

desCantidad($producto,$cantidad);
 function desCantidad($productob, $cantidads){
     $conexion = conn();
     $consult ="SELECT cantidad FROM producto WHERE id='$productob' ";
     $result=mysqli_query($conexion, $consult)or die (mysqli_error($conexion));
     $cantU=mysqli_fetch_row($result)[0];
     $nuevaC=abs($cantidads - $cantU);
     $query = "UPDATE producto SET cantidad='$nuevaC' WHERE id='$productob'";
     mysqli_query($conexion, $query)or die(mysqli_error($conexion));

    };

$sqlq="INSERT INTO registroventas (fecha, cliente, producto, marca, cantidad, precio, total) 
        VALUES ('".$fecha."', '".$cliente."', '".$producto."', '".$marca."', '".$cantidad."', '".$precio."', '".$total."' )";
$result = mysqli_query($conn, $sqlq) or die(mysqli_error($conn));



?>
<script type="text/javascript">
alert("Venta realizada con exito!");
window.location.href="../productos.php"
</script>
