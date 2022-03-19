<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/main.css">
    <title>Home</title>
</head>

<body background="assets/backhome.jpg" style="background-repeat: no-repeat; background-size: cover;">
    <header>
        <?php
        include 'php/header.php';
        ?>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container">

            <?php
            require_once 'php/db.php';
            $conn = conn();
            $sql = "SELECT COUNT(*)FROM producto";
            $sql2 ="SELECT COUNT(*)FROM admin";
            $execute = mysqli_query($conn, $sql) or die(mysqli_error($conn));
            $execute2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

            ?>
            <div class="row mbr-justify-content-center">
                <?php
                while ($row = $execute->fetch_row()) {
                ?>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Productos <span>Stock</span> <br> <span>#<?php echo $row[0]; ?></span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Para obtener un reporte detallado de los productos en stock, pulse el botón <br></p>
                                <a class="btn btn-secondary" href="php/reportestockpdf.php" target="_blank">Reporte</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php
                while($file = $execute2->fetch_row()){

                 ?>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Perfiles
                                <span>registrados</span> <br> <span># <?php echo $file[0]; ?></span>
                            </h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Para obtener un reporte detallado de los perfiles registrados, pulse el botón</p>
                            <a class="btn btn-secondary" href="php/adminreporte.php" target="_blank">Reporte</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
                




            </div>

        </div>

    </section>



</body>

</html>