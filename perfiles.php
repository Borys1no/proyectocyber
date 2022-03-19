<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<header>
<?php
include 'php/header.php';
?>
</header>

<?php
include 'php/db.php';
$conn = conn();
$sql = "SELECT * FROM admin";
$resultado = mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>
<br>
<br>
<br>

<h4>Perfiles administradores</h4>
<br>
<br>



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">C.I.</th>
      <th scope="col">Perfil</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <?php 
while($row = $resultado->fetch_assoc()){

?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['nombres']; ?></td>
      <td><?php echo $row['apellidos']; ?></td>
      <td><?php echo $row['usuario']; ?></td>
      <td><?php echo $row['telefono']; ?></td>
      <td><?php echo $row['ci']; ?></td>
      <td><?php echo $row['perfil']; ?></td>
      <th><li><a href="php/editarAdmin.php?id=<?php echo $row['id'] ?>" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
        <li><a href="eliminar.php?ide=<?php echo $row['id'] ?>" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li></th>
      
    </tr>
  </tbody>
  <?php } ?>
</table>



</body>
</html>