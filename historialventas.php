<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="js/search.js"></script>
    <link rel="stylesheet" href="css/hventas.css">
    <title>Historial de ventas</title>
</head>

<body>
    <header>
        <?php
        include 'php/header.php';
        ?>
    </header>



    <?php require_once 'php/db.php';

    $conect = conn();
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
    <br>
    <form action="historialventas.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <div class="row">
                            <h2>Historial de ventas</h2>
                        </div>
                    </div>

                    <div class="alert alert-success" style="display:none;">
                        <span class="glyphicon glyphicon-ok"></span> Drag table row and cange Order
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT Vt.id, Vt.fecha, Vt.cliente, Pd.producto, Vt.marca, Vt.cantidad, Vt.precio, Vt.total,
                            Pd.producto
                             FROM registroventas Vt
                            INNER JOIN producto Pd ON Vt.producto=Pd.id
                            ";
                            $result = mysqli_query($conect, $sql) or die(mysqli_error($conect));
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
                            
                                <tr>
                                    <td>'.  $row['fecha'].' </td>
                                    <td> ' .$row['cliente'].' </td>
                                    <td>  '.$row['producto'].' </td>
                                    <td>  '.$row['marca'].' </td>
                                    <td>  '.$row['cantidad'].' </td>
                                    <td>  '.$row['precio'].' </td>
                                    <td>  '.$row['total'].' </td>
                                    <td></td>
                                </tr>

                            '; } ?>
                        </tbody>
                        <?php
                        ?>

                    </table>
                    <div>
                        <a class="btn btn-primary" href="php/dmReporte.php">Generar reporte</a>
                    </div>
                </div>
            </div>
        </div>


    </form>
</body>

</html>