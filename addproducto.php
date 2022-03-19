<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/pro.css">
    <title>Añadir productos</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<style media="screen">
    img {

        height: 200px;
    }
</style>
<br>
<br>
<br>
<br>
<br>

<body>
    <header>
        <?php
        include 'php/header.php';
        ?>
    </header>

    
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-4">
                    <div class="portlet light profile-sidebar-portlet bordered">
                        <div id="imagePreview">
                        </div>

                    </div>
                </div>
                <div class=".col-md-4 .col-md-offset-4">
                    <div class="portlet light bordered">
                        <div class="portlet-title tabbable-line">
                            <div class="caption caption-md">
                                <i class="icon-globe theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Registro de producto</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                    <form method="POST" action="php/addproducto.php" id="form_subir" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="inputName">Producto</label>
                                                <input type="text" class="form-control" name="product" id="product" placeholder="ingrese el nombre del producto" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputLastName">Marca del producto</label>
                                                <input type="text" class="form-control" name="marca" id="marca" placeholder="ingrese la marca del producto" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Cantidad</label>
                                                <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="ingrese la cantidad del producto" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Categoria</label>
                                                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="ingrese la categoria" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Proveedor</label>
                                                <input type="text" class="form-control" name="proveedor" id="proveedor" placeholder="ingrese el proveedor" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Precio al por mayor</label>
                                                <input type="text" class="form-control" name="preciomayor" id="preciomayor" placeholder="ingrese el precio al por mayor" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Precio unitario</label>
                                                <input type="text" class="form-control" name="preciounitario" id="preciounitario" placeholder="ingrese el precio unitario" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">Añadir imagen</label>
                                                <input type="file" name="archivo" id="archivo" accept="image/*" required>
                                               
                                            </div>
                                            <div class="checkbox">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
                                    </div>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function() {
            function filePreview(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imagePreview').html("<img src='" + e.target.result + "' />");
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