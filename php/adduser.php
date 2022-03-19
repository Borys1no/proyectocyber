<?php

require_once 'db.php';
$conn = conn();

$nombres      =  $_POST['nombres'];
$apellidos    =  $_POST['apellidos'];
$usuario      =  $_POST['usuario'];
$pass         =  $_POST['pass'];
$telefono     = $_POST['txttelefono'];
$ci           = $_POST['txtci'];
$perfil       = $_POST['txtperfil'];


$busAdmin = ("SELECT  usuario, ci FROM admin WHERE usuario='$usuario' AND ci='$ci'");
$exe = mysqli_query($conn, $busAdmin) or die(mysqli_error($conn));

if (isset($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
        echo ("Correo no es valido");
    }
    elseif (mysqli_num_rows($exe) > 0) {
        echo "Este usuario ya esta registrado! Por favor pruebe con otro.";
        
    }else{
        
        $sqli = "INSERT INTO admin (nombres, apellidos, usuario, pass, telefono, ci, perfil) 
            VALUES('" . $nombres . "', '" . $apellidos . "','" . $usuario . "','" . $pass . "', '" . $telefono . "', '" . $ci . "', '" . $perfil . "')";
        $resultado = mysqli_query($conn, $sqli) or die(mysqli_error($conn));
        header('location:../adduser.php');
    }
}

/*function cedula($cedula) {
    $sum = 0;
    $sumi = 0;
    for ($i = 0; $i < strlen($cedula) - 2; $i++) {
        if ($i % 2 == 0) {
            $sum += substr($cedula, $i + 1, 1);
        }
    }
    $j = 0;
    while ($j < strlen($cedula) - 1) {
        $b = substr($cedula, $j, 1);
        $b = $b * 2;
        if ($b > 9) {
            $b = $b - 9;
        }
        $sumi += $b;
        $j = $j + 2;
    }
    $t = $sum + $sumi;
    $res = 10 - $t % 10;
    $aux = substr($cedula, 9, 9);
    if ($res == $aux) {
        return 1;
    } else {
        return 0;
    }
}

$e = "1001968310";
$d = "1002205980";
$e = "1003887492";

echo "VALOR " + cedula($e) . '<br>';
echo "VALOR " + cedula($d) . '<br>';
echo "VALOR " + cedula($e) . '<br>';
*/