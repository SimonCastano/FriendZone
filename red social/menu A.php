<?php
include('config/conexion.php');

error_reporting(0);
 session_start(); 
if (empty($_SESSION ['user'])) {
  header('location:incio.php');
}
$salir=$_POST['btnsalir'];

if (isset($salir)) {
  session_destroy();
  header('location:index.php' );  
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>FriendZone</title>
      <meta charset="utf-8">
      <meta charset="utf-8">
  <link type="image/x-icon" href="img/logo.jpg" rel="shortcut icon" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projetion"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projetion"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/jquery-3.3.1.js" type="text/javascript"></script>
<script src="js/materialize.js" type="text/javascript"></script>
<script src="js/materialize.min.js" type="text/javascript"></script>

<body> 
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper #455a64 blue-grey darken-2">
        <img class="brand-logo center" src="img/logobit.png" width="160" height="90">

       
        <ul class="right hide-on-med-and-down">
            <li><a class="white-text" href="index.php">Inicio</a></li>

         <li><a class="white-text" href="mensajes.php  ">mensajes</a></li>
        
           <li> <a class='dropdown-button btn #eceff1 blue-grey lighten-5 black-text' href='#' data-activates='dropdown1'><i class="material-icons"> notifications_active</i></a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!"><div class="chip">

    <img src="https://webtematica.com/sites/default/files/field/image/paginas-web-para-fotografos.jpg" alt="Contact Person">
    le han dado un like a tu publicacion
  </div> </a></li>
    <li><a href="#!">two</a></li>
   
  </ul>
        </li>
           <li> <form method="post" action="inicio.php">   <BUTTON  class="black-text" name="btnsalir" class="btn-floating btn-large waves-effect waves-light #eceff1 blue-grey lighten-5"><i class="material-icons black-text">power_settings_new</i></BUTTON></form></li>
     
          <li></li>
        </ul>
         
      </div>
    </nav>
  </div>
<nav>
    <div class="nav-wrapper #455a64 blue-grey darken-2 ">
      <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
    </div>
  </nav>






    <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="https://i.ytimg.com/vi/lt0WQ8JzLz4/maxresdefault.jpg">
      </div>
      <a href="#!user"> <?php echo "<img class='circle' src='https://static.zerochan.net/K%27.full.73530.jpg'>"; ?></a>
      <a href="#!name"><li> 

        <?php   

          session_start();include('config/conexion.php');
        $sql='SELECT * FROM users';
        $ejecutar=$conexion->query($sql);
 
          echo "<H4> <strong> HOLA  $_SESSION[user]</strong>$filas[2]  "; 
          echo $_GET=$_SESSION ['id']=$row['id'];
            ?>
 </li> </a>
      <a href="#!email"><span class="black-text-text email"> . Castamosimon2002@gmail.com </span></a>
    </div></li>
 <form method="get" action="inicio.php">
      
<?php 
 include('config/conexion.php');

        $sql="SELECT * FROM users where nombre='$_SESSION[user]'";
        
        $ejecutar=$conexion->query($sql);
 while($filas=$ejecutar->fetch_row()){

  $id=$_GET['$filas[1]'];
          echo "<center><p name='id'></p></center>";
        }
        $code=$_GET['id'];

$code= array_keys($_GET)['id'];

 ?>

    </form>
    <li><a href="#!"><i class="material-icons">accessibility</i>Mi perfil</a></li>
    <li><a href="#!">configuracion</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="#!">privacidad</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse  waves-effect waves-light btn #eceff1 blue-grey lighten-1 large"><i class="material-icons black-text">menu</i></a>


  <script type="text/javascript">
  // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();</script>
 <script type="text/javascript">  $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is opened
      onClose: function(el) { /* Do Stuff* / }, // A function to be called when sideNav is closed
    }
  );</script>
<script type="  ">
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );</script>