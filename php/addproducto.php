
<?php
include '../php/db.php';
$conexion = conn();



$producto = $_POST['product'];
$marca = $_POST['marca'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$proveedor = $_POST['proveedor'];
$preciomayor = $_POST['preciomayor'];
$preciounitario = $_POST['preciounitario'];
$image = addslashes(file_get_contents($_FILES['archivo']['tmp_name']));


$newProduct = ("SELECT producto, marca FROM producto WHERE producto='$producto' AND marca='$marca' ");
$exe = mysqli_query($conexion, $newProduct);
if (mysqli_num_rows($exe) > 0) {
    echo "Error! Este producto ya esta registrado";
} else {
    $sql = "INSERT INTO producto( producto, marca, cantidad, categoria, proveedor, preciomayor, preciounitario, image)
    VALUES('" . $producto . "','" . $marca . "', '" . $cantidad . "','" . $categoria . "','" . $proveedor . "','" . $preciomayor . "', '" . $preciounitario . "', '" . $image . "') ";
    $resultado = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    header('location:../addproducto.php');
}


$directorio = "../files/";
$archivo = $directorio . basename($_FILES["archivo"]["name"]);
$tipoarchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
$size = getimagesize($_FILES["archivo"]["tmp_name"]);



if ($size != false) {
    $tamaño = $_FILES["archivo"]["size"];
    if ($tamaño > 500000) {
        echo 'la imagen tiene que ser menor a 500kb';
    } else {
        if ($tipoarchivo == "jpg" || $tipoarchivo == "jpeg") {

            if (!empty($_FILES['archivo']['name'])) {
                move_uploaded_file($_FILES['archivo']['tmp_name'], "../files/" . $_FILES['archivo']['name']);
                
            } else {

                echo 'error al subir la imagen';
            }
        } else {
            echo 'Solo se permite archivos jpg/jpeg';
        }
    }
} else {
    echo 'Por favor solo ingrese imagenes';
}

?>