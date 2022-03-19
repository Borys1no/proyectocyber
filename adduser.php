<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register user</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
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
    <br>
    <form action="php/adduser.php" method="POST">
    <h1>Registro de administrador</h1>
   
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nombres</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Nombres" name="nombres" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Apellidos</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Apellidos" name="apellidos" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Usuario/Correo</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsuario/Correo" placeholder="Correo" aria-describedby="inputGroupPrepend2" name="usuario" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Password</label>
      <input type="password" class="form-control" id="validationDefault03" placeholder="Password" name="pass" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Telefono</label>
      <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="txttelefono" onkeypress="return numeroci(event) " maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">C.I.</label>
      <input type="text" class="form-control" id="cedula" placeholder="C.I." name="txtci" onkeypress="return numeroci(event) " maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Perfil</label><br>
      <select name="txtperfil" id="select" class="col-xs-10 col-sm-10 col-md-10" required style="border: 1px solid #DEE1E4;">
      <option value="">Seleccione el perfil</option>
      <option value="administrador">administrador</option>
      </select>
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