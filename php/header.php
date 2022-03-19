<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="icons/flaticon.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Home</title>
</head>
<body>
 <header>
     <div class="slo">Cyber Space</div>
     <nav>
         <ul>
             <li><a href="home.php" class="active">Home</a></li>
             <li class="sub-menu"><a href="#">Productos <span>&#9660;</span></a>
             <ul>
                 <li><a href="productos.php">Tus productos</a></li>
                 <li><a href="addproducto.php">Añadir productos</a></li>
             </ul>
            </li>
             

             <li class="sub-menu" ><a href="#">Servicios<span>&#9660;</span></a>
            <ul>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="historialventas.php">Historial de ventas</a></li>
            </ul>
            </li>
             <li class="sub-menu"><a href="#">Perfil <span>&#9660;</span></a>
             <ul>
                 <li><a href="perfiles.php">perfiles</a></li>
                 <li><a href="adduser.php">Añadir admin</a></li>
                 <li><a href="cerrarsesion.php">Cerrar sesion</a></li>
             </ul>
            </li>
             
             
         </ul>
     </nav>
     <div class="menu-toggle"><i class="flaticon-boton-de-menu-de-tres-lineas-horizontales"></i></div>
 </header>
 <script
  src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript">
$(document).ready(function(){

    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    })
    $('ul li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).toggleClass('active');
    })
})
</script>
 


</body>
</html>