<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport"  content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hotel Cero Stress</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>jQuery.mobile/jquery.mobile-1.4.5.min.css">
   <script src="<?php echo base_url(); ?>jQuery.mobile/jquery.js"></script>
   <script src="<?php echo base_url(); ?>jQuery.mobile/jquery.mobile-1.4.5.js"></script>
<!-- <script src="./jQuery.mobile/jquery.js"></script>-->
  <!--  <script src="./jQuery.mobile/jquery.mobile-1.4.5.js"></script>-->
<meta charset="utf-8">
  </head>
  <body>
<div data-role="page" id="Page1" data-theme="a" data-position="fixed">
<div data-role="header">
<!--<a href="#" data-icon="home">Inicio</a>-->
<!--<a href="#" data-icon="grid">Productos</a>-->

<h1> BIENVENIDOS A SU HOTEL CERO STRESS</h1>
<nav data-role="navbar">
  <ul>
    <li><a href="<?php echo base_url() ?>index.php/controller_reserva/reservacliente" data-icon="star" data-transition="flip">RESERVA</a></li>
  <li><a href="<?php echo base_url() ?>index.php/login/index" data-icon="star">administrador</a></li>
  <li><a href="<?php echo base_url() ?>index.php/controller_cliente_registrado/clienteregistrado" data-icon="info">Clientes registrado</a></li>
<li><a href="<?php echo base_url() ?>index.php/controller_empleados/empleado" data-icon="info">Empleados</a></li>
</ul>

</div>
<div data-role="main">

    <center><img width="20%" align images="center" src="<?php echo base_url(); ?>images/camas.jpg" alt="">
</center>
<br> Este hotel boutique acogedor de estilo clásico y decoración detallada, situado en Junín, ofrece conexión Wi-Fi gratuita, jardín, zona de
  barbacoa y habitaciones con aire acondicionado.<br>
<center><img width="20%" align images="center" src="<?php echo base_url(); ?>images/cero.jpg.jpg" alt="">
  <p>Hoteles.com es un sitio web líder de hospedaje en línea. Nos apasiona viajar.
    Todos los días inspiramos y
     tenemos alcance a millones de personas gracias a nuestros 90 sitios web locales
      en 41 idiomas. Por eso, cuando se trata de reservar los mejores hoteles, casas de
      vacaciones, resorts, departamentos, casas de huéspedes o incluso una casa en un árbol,
      tenemos todo lo que necesitas..<br><br>
</div>
<div data-role="footer">
<p> Visitenos en Peñas Blancas..donde sus descansos se vuelven realidad </P>

  </div>
</div>
</div>
<!--/////////////////////////////////////////finpage1//////-->

</body>
</html>
