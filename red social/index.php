<?php include('menu index.php'); ?>

<?php
ob_start();
session_start();
if (isset( $_SESSION ['user'])) {
  header('location:inicio.php');}
?>
  <script type="text/javascript">
    window.onload = function() {
  
  document.onmousemove = function(e) {
    
    var x = -(e.clientX/10);
    
    var y = -(e.clientY/10);
    
    this.body.style.backgroundPosition = x + 'px ' + y + 'px';
  };
};
  </script>
  <style type="text/css">
body {
  background: url("img/fondo web.jpg");
  background-size: 120% 120% ;
}
#info {
  width: 400px;
  text-align: center; background: #fff;
  margin: 150px auto 0 auto;
  padding: 30px;
  border-radius: 5px;
}
  </style>
  <section class="contenido " class="uk-animation-toggle">
   

<!--contraseña de samuel   alesburg12 samugarci2015@gmail.com-->

      <div class="input-field col s12">
      	<a href="#modal1" class="btn tooltipped waves-effect waves-light btn modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Iniciar Sesion">INICIA SESSION	</a> 
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>INICIA SESION</h4>
      <form class="col s12" method="post" action="index.php">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="nombre de usuario" name="user" id="first_name" type="text" 
          pattern="[A-Za-z]{1,100}{ }" class="validate">
          <label for="first_name"> Name</label>
        </div><div class="input-field col s6">
          <input id="password" placeholder="contraseña" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
    </div>
    </div>
    <div class="modal-footer">
    	<button name="login"  class="waves-effect waves-light btn">INICIAR SESION</button>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">CERRAR</a>
    </div>
  </div>
</form>
<?php 
include('config/conexion.php');
  error_reporting(0);
  session_start();
$nom=$_POST['user'];
$contra=$_POST['password'];
$guardar=$_POST['login'];
  
  if (isset($guardar)) {
  
 
      $sql="SELECT * FROM users  WHERE nombre='$nom' and pass='$contra'"; 
              
          $ejecutar=$conexion->query($sql);
          $filas=$ejecutar-> fetch_row();
          if(empty($nom)|| empty($contra)){
        echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('INGRESE TODOS LOS CAMPOS', 4000) // 4000 is the duration of the toast
           </script>";
      }
 else{
       if ($filas[1]==$nom and  $filas[3]==$contra){
        $_SESSION ['user']=$nom;
        header('location:inicio.php');
      }else{
          echo "<script>// Materialize.toast(message, displayLength, className, completeCallback red);
  Materialize.toast('USUARIO O Contraseña INCORECTOS', 4000) // 4000 is the duration of the toast
           </script>";

      }
       }
       }
?>

          
          </div><br>

        
<img  class="uk-animation-shake" src="img/logotipo.png" >
 </div>
  </section>

<article ><div style="text-align:center;padding:1em 0;"> <h2><a style="text-decoration:none;" href=""><span style="color:gray;">HORA ACTUAL EN </span><br /> TU PAIS</a></h2> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=large&timezone=America%2FBogota" width="100%" height="140" frameborder="0" seamless></iframe> </div></article>


  <div class="container">
    <div class="section">

    
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons pulse">blur_circular</i></h2>
            <h5 class="center">Asistente personal</h5>

            <p class="light">Estamos trabajamdo para crear tu propia asistente virtual personalisada por vos para que te ayude paresida a siri o cortana las asistentes personales de iphone o microsoft windows10 .</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Registrate </h5>

            <p class="light">Debes registrarte por que conoseras nuevos amigos y te mantendras en conmpañia y contacto con los que ya tienes</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5   class="center">El modo de uso</h5>

            <p class="light">Tenesmos muchas herramientas y servicios que te serviran en tu vida <strong>recuerda no cuesta nada si te registras.</strong></p>
          </div>
        </div>
      </div>

    </div>
  </div>
   <?php include('footer index.php'); ?>








      <script type="text/javascript"> $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
          </script>
          <?php  ob_end_flush();  ?>