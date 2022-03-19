
<?php include 'php/db.php';
$conect = conn();
?>

<div class="container">
    <div class="row">
        <div class="col-xs-10">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="logo" style="font-weight: bold; font-size: 25px; text-align: center; font-family: sans-serif;">
                    CYBERSPACE
                </div>
                <div class="panel-heading">
                    <h2 class="panel-title" style="font-family: sans-serif ;">
                        Reporte de ventas
                    </h2>
                </div>
                <div class="panel-body">
                    <h3 style="background-color: #56BCE5; font-weight: bold; text-align: center ; ">
                        Detalles del reporte
                    </h3>
                </div>
                <ul class="list-group">

                    <li class="list-group-item">
                        <table class="table table-hover" style="width: 90%; border: 1px solid #DEE1E4;">
                            <thead>
                                <tr>
                                    <th style="width: 25%; text-align: left;">Fecha</th>
                                    <th style="width: 25%; text-align: left;">Cliente</th>
                                    <th style="width: 25%; text-align: left;">Producto</th>
                                    <th style="width: 25%; text-align: left;">Marca</th>
                                    <th style="width: 25%; text-align: left;">Cantidad</th>
                                    <th style="width: 25%; text-align: left;">Precio</th>
                                    <th style="width: 25%; text-align: left;">Total</th>
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
                                    <td>' .  $row['fecha'] . ' </td>
                                    <td> ' . $row['cliente'] . ' </td>
                                    <td>  ' . $row['producto'] . ' </td>
                                    <td>  ' . $row['marca'] . ' </td>
                                    <td>  ' . $row['cantidad'] . ' </td>
                                    <td>  ' . $row['precio'] . ' </td>
                                    <td>  ' . $row['total'] . ' </td>
                                    <td></td>
                                </tr>

                            ';
                                } ?>
                            </tbody>

                        </table>
                    </li>



                </ul>
            </div>
        </div>
    </div>
</div>