<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/edit.css">
    <title>Modificar producto</title>
</head>

<body>
<style media="screen">
img{
    
    height: 70px;
}


</style>
    <header>
        <?php 
        include 'php/header.php';
        ?>
    </header>
    <?php 
    include 'php/db.php';
    $conn= conn();
    $id=$_REQUEST['id'];



    $sql = "SELECT * FROM producto WHERE id='$id' ";
        $resultado = mysqli_query($conn, $sql) or die (mysqli_error($conn));
        $row = $resultado->fetch_assoc();
    ?>

    <center>
    <h1>Editar producto</h1>
    <div>
        <section class="form-register">
        <form method="POST" action="php/modificarproductos.php?id=<?php echo $row['id'] ?>"  id="form_subir"  enctype="multipart/form-data">
            <img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']) ?>" />
            <input class="controls" required type="text" name="product" id="product" placeholder="ingrese el nombre del producto" value="<?php echo $row['producto']; ?>" />
            <input class="controls" required type="text" name="marca" id="marca" placeholder="ingrese la marca del producto" value="<?php echo $row['marca']; ?>">
            <input class="controls" required type="number" name="cantidad" id="cantidad" placeholder="ingrese la cantidad del producto" value="<?php echo $row['cantidad']; ?>">
            <input class="controls" required type="text" name="categoria" id="categoria" placeholder="ingrese la categoria " value="<?php echo $row['categoria']; ?>">
            <input class="controls" required type="text" name="preciounitario" id="preciounitario" placeholder="ingrese el precio  " value="<?php echo $row['preciounitario']; ?>">
            
            <div class="form-file">
                <p id="texto">Cambiar imagen</p>
                <input type="file" name="archivo" id="archivo" accept="image/*">

            </div>
            <input class="botons" type="submit" value="Guardar">

        </form>
            
        </section>
        <div id="imagePreview">
        <span>Previsualizacion de la imagen</span>
    </div>

    </div>
    </center>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function() {
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imagePreview').html("<img src='" +e.target.result+ "' />");
                    }
                    reader.readAsDataURL(input.files[0]);
                }

            }
            $('#archivo').change(function() {
                filePreview(this);
            });

        })();
    </script>
    
</body>

</html>

