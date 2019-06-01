<?php include('menu A.php'); ?>
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
  background: url("");
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



<style type="text/css">

  #popup {
    visibility: hidden;
    opacity: 0;
    margin-top: -200px;
  }
  #popup:target {
    visibility:visible;
    opacity: 1;
    background-color: rgba(0,0,0,0.8);
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    margin:0;
    z-index: 999;
    -webkit-transition:all 1s;
    -moz-transition:all 1s;
    transition:all 1s;
  }
  .popup-contenedor {
    position: relative;
    margin:7% auto;
    padding:30px 50px;
    background-color: #fafafa;
    color:#333;
    border-radius: 3px;
    width:50%;
  }
  a.popup-cerrar {
    position: absolute;
    top:3px;
    right:3px;
    background-color: #333;
    padding:7px 10px;
    font-size: 20px;
    text-decoration: none;
    line-height: 1;
    color:#fff;
  }
 
    /* estilos para el enlace */
    
  a.popup-link {
      text-align: center;
      
     
  }

</style>

   
<section class="contenido"><a href="#popup" class="popup-link waves-effect waves-light btn black-text #eceff1 blue-grey lighten-5">Publicar</a>    </section><br> <br>  <br>  
 

 <article class="contenidos"> 
 "<div class='row'>"

        <div class='col s12 m12'>
          <div class='chip'>
    <img src='http://www.shenzhenparty.com/files/imagecache/blog_image/content/kungfu.jpg' alt='Contact Person'>
    Samuel Garcia montoya
  </div>
        <div class='card'>
        <div class='card-image'>
         
            <img class='materialboxed' src='http://2.bp.blogspot.com/-PokOvPCBIsQ/VNj0X-haW2I/AAAAAAAA9hY/nkEUKq60WTw/s1600/arrow-entrenando.jpg'>

            <span class='card-title'>UN DIA GENIAL</span>
         </div>

             <div class='card-content black-text'>
          <p>E pasado un dia genial en haciendo ejercicio</p>
          </div>
          <div class='card-action black-text'>
          <a href='#''><i class='material-icons'>mood</i></a>   <a href='#'><i class='material-icons'>mood_bad</i></a>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>>

      </div>

    
   

</article>


<article class="contenidos"> 
 <div class='row'>"

        <div class='col s12 m12'>
          <div class='chip'>
    <img src='http://imprimalia3d.com/sites/default/files/oso_de_peluche_suso.jpg' alt='Contact Person'>
    Sara daniela 
  </div>
        <div class='card'>
        <div class='card-image'>
         
            <img class='materialboxed' src='http://www.wedfoto.net/wp-content/uploads/photo-gallery/Modelos/Ana_Belen/DSC04808-min.jpg'>

            <span class='card-title black-text'><h3>En el campo feliz de la vida</h3></span>
         </div>

             <div class='card-content black-text'>
          <p>La paz qe se siente orando a solas en el campo acompañada solo de la naturaleza y de Dios no tiene comparacion  <p>: )</p> </p>
          </div>
          <div class='card-action black-text'>
          <a href='#''><i class='material-icons'>mood</i></a>   <a href='#'><i class='material-icons'>mood_bad</i></a>
          </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>>

      </div>
   

</article>
  

 


  



     <div class="modal-wrapper" id="popup">
    <div class="popup-contenedor">
      <form method="post" action="inicio.php"> 
      <h2>Publica algo de interes </h2>
      <div class="row">
          <div class="input-field col s12 m12">
            <i class="material-icons prefix">format_color_text</i>
            <input type="text" name="title" class="validate">
            <label for="icons-prefix">Titulo de la publicacion</label>
          </div>
      <div class="row">
         <div class="file-field input-field col s12 m12">
          <div class="btn  gray">
            <span><i class="material-icons center">add_a_photo</i></span>
            <input type="file" name="img">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
      </div> 
  <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">textsms</i>
          <input type="text" name="content" id="autocomplete-input" class="autocomplete">
          <label for="autocomplete-input">Agrega un comentario </label>
        </div>
        <center>  <button class="btn waves-effect waves-light" type="submit" name="action">Publicar
    <i class="material-icons right">send</i>
  </button>
        </center>
      </div>
    </div>  
  </div>
    
        
      <a class="popup-cerrar" href="#">X</a>
      
    </div>
  </div>
</div>
 </form>
        </div>
    </div>


</body>

<br>  <br>  <br>  <br>  <br>  <br>   <br> <br>  <br>  <br>  <br>  <br>  

<?php include('footer A.php'); ?>

<?php 
include('config/conexion.php');
error_reporting(0);
$namimage=$_FILES['img']['name'];
$tmpimage=$_FILES['img']['tmp_name'];
$extimage=pathinfo($namimage);
$url = "img/".$namimage;

$titulo = $_POST['title'];

$sql2="SELECT * FROM users  WHERE nombre='$_SESSION[user]'"; 
      while ($row=$_GET=mysql_fetch_array($sql));        
          $ejecutar=$conexion->query($sql);
          $filas=$ejecutar-> fetch_row();




$contenido = $_POST['content'];
$Fecha = date('d-m-y');
$guardar=$_POST['action'];
if (isset($guardar)) {
  if (is_uploaded_file($tmpimage)) {
    if (($extimage['extension'] =="png")||($extimage['extension']=="jpg")) {
      copy($tmpimage, $url);

        $sql="INSERT into public VALUES('','$_SESSION ['id']',$Fecha,$titulo,$contenido,'$url')";

        if ($ejecutar = $conexion->query($sql)) {
       echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('COMPARTIDO CORRECTAMENTE', 4000) // 4000 is the duration of the toast
           </script>";
      } else{
        echo "<script>// Materialize.toast(message, displayLength, className, completeCallback);
  Materialize.toast('NO SE A COMPARTIDO', 4000) // 4000 is the duration of the toast
           </script>";
         }


        }
    }

}   

 ?>


  <script type="text/javascript">   $(".button-collapse").sideNav();
 $(document).ready(function(){
    $('.collapsible').collapsible();
  });
        ;   </script>  


       <script type="text/javascript">
  $(document).ready(function(){
    var window_height = $(window).height();
    var page_height = $('#header').height() + $('#content').height();
    var footer_height = $('#footer').height();

    if (page_height < window_height) {
      margin_footer = window_height - page_height - footer_height - 40;
      $('#footer').css('margin-top', margin_footer);
    }
  });
</script>

<script type="text/javascript">  $('.chips').material_chip();
  $('.chips-initial').material_chip({
    data: [{
      tag: 'Apple',
    }, {
      tag: 'Microsoft',
    }, {
      tag: 'Google',
    }],
  });
  $('.chips-placeholder').material_chip({
    placeholder: 'Enter a tag',
    secondaryPlaceholder: '+Tag',
  });
  $('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Apple': null,
        'Microsoft': null,
        'Google': null
      },
      limit: Infinity,
      minLength: 1
    }
  });
        </script><script type="text/javascript"> $(document).ready(function(){
    $('.materialboxed').materialbox();
  }); </script>