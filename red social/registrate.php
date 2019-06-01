<?php include('menu index.php');  
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
  background: url("img/fondo2.jpg");
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
  <form  method="post" action="registrate.php">
<section class="contenidos">
  
	  <div class="row ">
    
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="NOMBRE" validate id="first_name" name="name" type="text" class="validate black-text">
          <label for="first_name">NAME </label>
        </div>
        <div class="input-field col s6">
          <input placeholder="APELLIDO" id="last_name" name="apellido"   type="text" class="validate black-text">
          <label for="last_name">LAST NAME</label>
        </div>
      </div>
     
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Contraseña" id="password" name="pass" type="password" class="validate black-text">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Confirmar Contraseña" id="password" name="pass1" type="password" class="validate black-text">
          <label for="password">Confirm Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Escribe aqui tu correo" id="email" type="email" name="email"   class="validate black-text">
          <label for="email">Email</label>
        </div>
      </div>
      
        </div>
      </div>
<section class="contenido"> <br>  <br>  
      <h6 class="black-text">    Aceptas terminos , reglas y condiciones de esta red social?</h6>


        <p>
      <input type="checkbox" id="test5" />
      <label for="test5">Red</label>
    </p>
  <br>  <br>  <br>  
</section>
   <br>  <b> <br>  <br>  <br>  </b>


<button type="submit" name="btnguardar" class="btn waves-effect waves-light #cfd8dc blue-grey lighten-4 black-text"> <i class="material-icons right">send</i>Finalizar registro</button> 
  
  </div>


</section>
  </form>

<?php include('footer index.php'); ?>



<script type="text/javascript">  $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
    </script>

     <?php 
include('config/conexion.php');



$name=$_POST['name'];
$apellido=$_POST['apellido']; 
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$email=$_POST['email'];
 $guardar=$_POST['btnguardar'];




 $comprobarusers="SELECT nombre FROM users WHERE nombre='$name'";
  $comprobaremail="SELECT email FROM users WHERE email='$email'";

  //codigo nombre apellido pass email//







 if($comprobarusers >= 1) {
  echo "<script>  Materialize.toast('El nobre de usuario esta en uso , por favor elija otro', 3000, 'rounded green')</script>";}else{  

    if($comprobaremail >= 1) {
  echo "<script>  Materialize.toast('El correo esta en uso , por favor elija otro', 3000, 'rounded green')</script>";}else{  

if($pass != $pass1) {echo "<script>  Materialize.toast('Las Contraseñas no coinsiden,revisalas e ingresa de nuevo los campos', 5000, 'rounded black')</script>";}else{ 




       if(isset($guardar)){
  $sql="INSERT INTO users VALUES('','$name','$apellido','$pass','$email')";
  

   if ($ejecutar=$conexion->query ($sql)){
    header("Refresh: 1 ; url = index.php");
    echo "<script>  
  Materialize.toast('Registrado correctamente', 3000, 'rounded green')</script>";
  }else{

    echo "<script> 
  Materialize.toast('Error de registro', 3000, 'rounded red')</script>";
  }
  }
 }
}

 
}
 ?>
 <script type="text/javascript"> $(document).ready(function() {
    $('select').material_select();
  });
        $('select').material_select('destroy');</script>