<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="resource/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="resource/css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="resource/css/themify-icons.css">

  <script src="resource/js/jquery.min.js"></script>
  <script src="resource/js/bootstrap.min.js"></script>
  <script src="resource/js/bootstrap-notify.js"></script>
  <script src="resource/js/default.js"></script>
</head>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <li class ="active"><a class="navbar-brand "  href="">APPSENA</a></li>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php if(!isset($_SESSION['USU_ID'])){?>
        <li><a href=""><span class="glyphicon glyphicon-home"></span> Inicio </a></li>
        <?php } ?>
        <?php if(isset($_SESSION['USU_ID'])){?>
          <?php if($_SESSION['USU_ROL'] == 1){?>
          <li><a href="/APPSENA"><span class="glyphicon glyphicon-home"></span> Inicio </a></li>
          <li><a href="?controlador=usuario&accion=index"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
        <li><a href="?controlador=programa&accion=index"><span class="glyphicon glyphicon-th"></span> Programas</a></li>
        <li><a href="?controlador=formacion&accion=index"><span class="glyphicon glyphicon-th"></span> Formación</a></li>
        <?php }} ?>
      </ul>
      <?php if(!isset($_SESSION['USU_ID'])){?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="?controlador=inicio&accion=frmLogin"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion</a></li>
      </ul>
      <?php }else{ ?>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['USU_NOMBRE']." ".$_SESSION['USU_APELLIDO'];?> <span class="caret"></span></a>

        <ul class="dropdown-menu">
          <li><a href="?controlador=usuario&accion=frmPass"><span class="glyphicon glyphicon-lock"></span> Cambiar Contraseña</a></li>
          <li><a href="?controlador=inicio&accion=cerrar"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
        </ul>
      </li>
     </ul>
      <?php } ?>
      <?php if(!isset($_SESSION['USU_ID'])){?>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="?controlador=usuario&accion=frmCrear"><span class="glyphicon glyphicon-log-in"></span> Registrarse</a></li>
      </ul>
      <?php } ?>
    </div>
  </div>
</nav>
<div class="container">
<div class="jumbotron">
  <h1>APP SENA</h1>
  <p>Aplicativo para la gestion de matriculas</p>
</div>

  <?php
require_once "ruta.php";
?>
</div>
</div>
</div>
</head>
</html>
