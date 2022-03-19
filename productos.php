<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/stylesecond.css">
    <link rel="stylesheet" href="css/popup.css">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/decimal.js"></script>
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        include 'php/header.php';
        ?>
    </header>
    <?php include 'php/db.php';
    $conn = conn();
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>




    <div class=".col-md-4 .col-md-offset-4">
        <div class="widget stacked widget-table action-table">

            <div class="widget-header">

                <h3>Lista de productos</h3>
            </div> <!-- /widget-header -->

            <div class="widget-content">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Producto</th>
                            <th>Marca</th>
                            <th>Cantidad</th>
                            <th>Categoria</th>
                            <th>Precio</th>
                            <th class="td-actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT id, producto, marca, cantidad, categoria, preciounitario, image FROM producto ";
                        $resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        while ($row = $resultado->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><img height="70px" width="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']) ?>" /></td>
                                <td><?php echo $row['producto'] ?></td>
                                <td><?php echo $row['marca'] ?></td>
                                <td><?php echo $row['cantidad'] ?></td>
                                <td><?php echo $row['categoria'] ?></td>
                                <td>$<?php echo $row['preciounitario'] ?></td>
                                <td class="td-actions">
                                    <a href="modificarproducto.php?id=<?php echo $row['id']; ?>" class="btn btn-small btn-primary">
                                        <i class="btn-icon-only icon-edit"></i>
                                    </a>

                                    <a href="eliminarproducto.php?id=<?php echo $row['id']; ?>" class="btn btn-small">
                                        <i class="btn-icon-only icon-remove"></i>
                                    </a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>


            </div> <!-- /widget-content -->

        </div> <!-- /widget -->
        <th><button class=" btn btn-primary" id="btnAbrir"><a href="#vender" class="vender">Realizar venta</a></button></th>
    </div>
    <br><br><br><br><br>




    <div class="container-venta">
        <div id="vender">
            <div class="container">
                <div class="row centered-form">
                    <div class="col-xs-12 col-sm-10 col-md-6 col-sm-offset-5 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Por favor ingrese todos los datos requeridos <small>Cyber space ventas</small></h3>
                            </div>
                            <div class="panel-body">
                                <form action="php/registroventas.php" method="POST" role="form">
                                    <div class="row">

                                        <div class="col-xs-10 col-sm-10 col-md-10">
                                            <div class="fecha">
                                                <span>Fecha</span><br>
                                                <input type="date" name="fecha" id="fecha" class="col-xs-10 col-sm-10 col-md-10" required>

                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="vCliente" id="first_name" class="form-control input-sm" placeholder="Nombres" required>
                                            </div>

                                            <div class="producto">
                                                <label>Producto</label><br>
                                                <select name="producto" id="producto" class="col-xs-10 col-sm-10 col-md-10" required>
                                                    <option value="">Seleccionar producto</option>
                                                    <?php
                                                    $query = "SELECT id, producto FROM producto";
                                                    $exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                                    while ($rows = mysqli_fetch_row($exe)) :

                                                    ?>
                                                        <option value="<?php echo $rows[0] ?>"><?php echo $rows[1] ?></option>

                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-10 col-sm-10 col-md-10">
                                            <input type="text" name="vMarca" id="vMarca" class="form-control input-sm" placeholder="Ingrese la marca del producto" required>
                                        </div>
                                        <div class="col-xs-10 col-sm-10 col-md-10">
                                            <div class="form-group">
                                                <input type="text" name="vCanditad" id="vCanditad" class="form-control input-sm" placeholder="Ingrese la cantidad" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 col-sm-10 col-md-10">
                                            <div class="form-group">
                                                <input type="text" name="vPrecio" id="vPrecio" class="form-control input-sm" placeholder="Ingrese el precio" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-10 col-sm-10 col-md-10">
                                            <div class="form-group">
                                                <input type="text" name="total" id="total" class="form-control input-sm" placeholder="El valor a pagar es..." required>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="button" value="Calcular" class="btn btn-info btn-block" id="btnCal" class="btnCal" onclick="totalpagar()">
                                    <input type="submit" value="Register" class="btn btn-info btn-block" id="btnSave" class="btnSave">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <script type="text/javascript">
        function tot(id) {
            return document.getElementById(id);
        }

        function totalpagar() {
            var cantidad = parseInt(tot('vCanditad').value);
            var precioU = parseFloat(tot('vPrecio').value);
            var total = (cantidad * precioU);
            tot('total').value = parseFloat(total).toFixed(2);
        }
    </script>
</body>

</html>