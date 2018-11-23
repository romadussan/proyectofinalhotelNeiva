<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport"  content="width=device-width, initial-scale=1">

    <title>JqueryMobile</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jQuery.mobile/jquery.mobile-1.4.5.min.css">
   <script src="<?php echo base_url(); ?>jQuery.mobile/jquery.js"></script>
   <script src="<?php echo base_url(); ?>jQuery.mobile/jquery.mobile-1.4.5.js"></script>
<!-- <script src="./jQuery.mobile/jquery.js"></script>-->
  <!--  <script src="./jQuery.mobile/jquery.mobile-1.4.5.js"></script>-->
<meta charset="utf-8">
  </head>
  <body>
<div data-role="page" id="Page1" data-theme="b" data-position="fixed">
<div data-role="header">
<!--<a href="#" data-icon="home">Inicio</a>-->
<!--<a href="#" data-icon="grid">Productos</a>-->

<h1> SOLICITUD DE SERVICIOS A CUARTO</h1>
<nav data-role="navbar">
  <ul>
    <li><a href="#page2" data-icon="star" data-transition="flip">Acerca</a></li>
  <li><a href="#" data-icon="star">Sucursales</a></li>
  <li><a href="#" data-icon="info">Contactos</a></li>
  </ul>

</div>
<div data-role="main">

    <center><img width="20%" align images="center" src="<?php echo base_url(); ?>images/camas.jpg" alt="">
</center>
<br> Este hotel boutique acogedor de estilo clásico y decoración detallada, situado en Junín, ofrece conexión Wi-Fi gratuita, jardín, zona de
  barbacoa y habitaciones con aire acondicionado.<br>
<form class="" action="respuesta.php" method="post" data-ajax="false">
--------------------------------------------------------------------------------------------<br>
Estimado cliente, acceda a nuesto sistema para que accesda a nuestros servicios<br>
  <label for="correo">USUARIO</label>
  <input type="text" name="usercliente" value="">
  <label for="password">CONTRASEÑA</label>
  <input type="password" name="passcliente" value="">
  <input type="submit"  value="Entrar">

</form>

</div>
<div data-role="footer">
<p> esto es piedeágina1 </P>
  <div data-role="controlgroup" data-type="horizontal">
  <a href="#" data-role="button" data-icon="plus">Agregar</a></li>
    <a href="#confirmar" data-role="button" data-icon="delete" data-rel="dialog">Eliminar</a></li>
  </div>
</div>
</div>
<!--/////////////////////////////////////////finpage1//////-->


<!--/////////////////////////////////////////page2//////-->
<div data-role="page" id="page2" data-theme="b">
<div data-role="header">
<a href="#Page1" data-icon="home" data-transition="slide">Inicio</a>
<a href="#" data-icon="grid">Productos</a>


<h1> INICIO</h1>
<nav data-role="navbar">
  <ul>
    <li><a href="#" data-icon="star">Acerca</a></li>
  <li><a href="#" data-icon="check">Productos</a></li>
  <li><a href="#" data-icon="star">Sucursales</a></li>
  <li><a href="#" data-icon="info">Contactos</a></li>
  </ul>

</div>
<div data-role="main">
<p> Diseño de sistema de acquisicion de datos basado en PLC Siemens,
   CPU S7 1.</p>
</div>
<div data-role="footer">
<p> esto es piedeágina1 </P>
</div>

<!--/////////////////////////////////////////finpage2//////-->
<!--modales-->

<div data-role="page" id="confirmar">
  <div data-role="header">
    <h1>Eliminar</h1>
  </div>
  <div data-role="main">
    <p> Esta seguro?</p>
</div>
<div data-role="footer">
  <a href="#page1" data-role="button" data-icon="info">Eliminar</a>
  <a href="#page1" data-role="button" data-icon="info">cancelar</a>
</div>
</div>
  </body>
</html>
