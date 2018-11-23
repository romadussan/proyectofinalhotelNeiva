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
<link rel="stylesheet" href="<?php echo base_url(); ?>css/global.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Jquery.Mobile/jquery.mobile-1.4.5.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/habitacion.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/jquery.mobile.icons.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Jquery.Mobile/jquery.mobile.structure-1.4.5.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  </head>
  <body>
<div data-role="page" id="Page1" data-theme="b" data-position="fixed">
<div data-role="header">
<!--<a href="#" data-icon="home">Inicio</a>-->
<!--<a href="#" data-icon="grid">Productos</a>-->

<h1> SOLICITUD DE RESERVA</h1>
<nav data-role="navbar">
  <ul>
    <li><a href="page" data-icon="star" data-transition="flip">Acerca</a></li>

  </ul>

</div>
<div data-role="main">

    <center><img width="20%" align images="center" src="<?php echo base_url(); ?>images/camas.jpg" alt="">
</center>
<br> Este hotel boutique acogedor de estilo clásico y decoración detallada, situado en Junín, ofrece conexión Wi-Fi gratuita, jardín, zona de
  barbacoa y habitaciones con aire acondicionado.<br>

--------------------------------------------------------------------------------------------<br>
Estimado cliente, acceda a nuesto sistema para que accesda a nuestros servicios<br>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">

      <form class="form_container" class=""
      action="<?php echo base_url(); ?>index.php/controller_reserva/registroreserva" method="post" data-ajax="false">
        <div class="form-group">
          <img width="60%" src="<?php echo base_url(); ?>images/hotel.png" alt="">
        </div>
        <div class="form-group">
          <label>ingrese usuario:</label><input type="text" name="usuario" value="" >
          <div class="form-group">
            <label>Documento:</label><input type="text" name="documento" value="" >
          </div>
        </div>
        <div class="form-group">
          <label>ingrese contraseña:</label><input type="text" name="password" value="" >
        </div>
        <div class="form-group">
          <label>Fecha inicio reserva:</label><input type="date" name="fechareserva" value="" >
        </div>
        <div class="form-group">
        <label>Fecha final reserva:</label>  <input type="date" name="fechafinal" value="" >
        </div>
        <div class="form-group">
          <label>Numero de personas:</label><input type="text" name="numeropersonas" value="" >
        </div>
        <div class="form-group">
        <label>Numero de Camas:</label>  <input type="text" name="numerocamas" value="" >
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="" value="Reservar">
        </div>
      </form>

    </div>
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>


</form>

</div>
<div data-role="footer">
<p> HOTEL CERO ESTRES </P>

  </div>
</div>
</div>
</body>
<!--/////////////////////////////////////////finpage1//////-->
