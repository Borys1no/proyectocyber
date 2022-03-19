<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
     include 'db.php';
     $conn= conn();
     $id=$_REQUEST['id'];

     $sql = "SELECT * FROM admin WHERE id='$id' ";
     $resultado = mysqli_query($conn, $sql) or die (mysqli_error($conn));
     $row = $resultado->fetch_assoc();
    ?>
<form method="POST" action="saveEditAd.php?id=<?php echo $row['id'] ?>">
    <h4>Editar perfil </h4>
    <br>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombres</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Nombres" value="<?php echo $row['nombres']; ?>" name="txtNombres"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Apellidos</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>" name="txtApellidos" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Usuario/Correo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@ </span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuario/correo" aria-describedby="inputGroupPrepend2" value="<?php echo $row['usuario']; ?>" name="txtUsuario" required>
      </div>
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-5 mb-3">
      <label for="validationDefault03">Password</label>
      <input type="password" class="form-control" id="validationDefault03" placeholder="Password" value="<?php echo $row['pass']; ?>"name="txtpass" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault03">Numero telefono</label>
      <input type="text" class="form-control" id="validationDefault03" placeholder="Numero telefono" value="<?php echo $row['telefono']; ?>"name="txtnumero" onkeypress="return numeroci(event) " maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Identificacion</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="C.I." value="<?php echo $row['ci']; ?>"name="txtCi" onkeypress="return numeroci(event) " maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Tipo de perfil</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Perfil" value="<?php echo $row['perfil']; ?>"name="txtPerfil" required>
    </div>
  </div>
  
  <button class="btn btn-primary" type="submit">Guardar</button>
</form>
</body>
<script type="text/javascript">
function numeroci(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key);
numeros="0123456789";
especiales="9-37-38-46";
teclado_especial=false;
for(var i in especiales){
  if(key==especiales[i]){
    teclado_especial=true;
  }
}
if(numeros.indexOf(teclado)==-1 && !teclado_especial){
  return false;
}
}
</script>
</html>