<?php include ('menu A.php'); ?>
<script type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="estilos.css">
<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet">

<script type="text/javascript">
  function ajax(){
    var req = new XMLHttpRequest();

    req.onreadystatechange = function(){
      if (req.readyState == 4 && req.status == 200) {
        document.getElementById('chat').innerHTML = req.responseText;
      }
    }

    req.open('GET', 'chat.php', true);
    req.send();
  }

    //linea que hace que se refreseque la pagina cada segundo
    setInterval(function(){ajax();}, 1000);
  </script>
</head><br><br><script type="text/javascript">
    function ajax(){
      var req = new XMLHttpRequest();

      req.onreadystatechange = function(){
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById('chat').innerHTML = req.responseText;
        }
      }

      req.open('GET', 'chat.php', true);
      req.send();
    }

    //linea que hace que se refreseque la pagina cada segundo
    setInterval(function(){ajax();}, 1000);
  </script>
<body onload="ajax();" >
<?php
  include "config/conexion.php.php";
  ///consultamos a la base
  $consulta = "SELECT * FROM chat  ";
  $ejecutar = $conexion->query($consulta); 
  while($fila = $ejecutar->fetch_array()) : 
?>
<link rel="stylesheet" type="text/css" href="">
  <div id="datos-chat">
    <span style="color: #1C62C4;"><?php echo $fila['nombre']; ?></span>
    <span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
    <span style="float: right;"><?php echo formatearFecha($fila['fecha']); ?></span>
  </div>
  
  <?php endwhile; ?>


  <form method="post" action="mensaje.php">
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" name="nombre">
        <label for="icon_prefix">First Name</label>
      </div>
<section class="black-text">
      <div class="input-field col s7">
           <i class="material-icons prefix">textsms</i>
        <textarea id="textarea1" class="materialize-textarea" ></textarea>
        <label for="textarea1">Escribir mensaje</label>
      </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
      <i class="material-icons right">send</i>
    </button>

  </form>
</div>
</body>
<?php
      if (isset($_POST['enviar'])) {
        
        $nombre = $_POST['nombre'];
        $mensaje = $_POST['mensaje'];


        $consulta = "INSERT INTO chat (nombre, mensaje) VALUES ('$nombre', '$mensaje')";

        $ejecutar = $conexion->query($consulta);

        if ($ejecutar) {
          echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
          echo "<script>M.toast({html: 'El mensaje a sido emviado', classes: 'rounded ,  green'});</script>";
        }else{
          echo "<script>M.toast({html: 'El mensaje no se a emviado ', classes: 'rounded ,  red'});</script>";
        }
      }

    ?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.scrollto.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
      // Accion que nos ubica en el mensaje mas reciente 
      function setScroll(){
        $('#chat-mensajes').scrollTo('div:last', 1000 );
      }

      // Indicamos las acciones a ejecutar al enviar un mensaje
      $('#chat-form').submit(function() {
        $.post('insertar-mensaje.php', $('#chat-form').serialize(), function(data) {
          $('#chat-mensajes').append(data);   // Añadir el nuevo mensaje al final
          $('#chat-form-mensaje').val('');        // Limpiar el cuadro de texto
          setScroll();
        });
        return false;
      });

      // Cargamos los mensajes y nos ubicamos al ultimo
      $('#chat-mensajes').load('chat/cargar-mensajes.php', function(response, status, xhr) {
        if (status == "error") {
          var msg = "Hubo un error en la carga del chat: ";
          $("#error").html(msg + xhr.status + " " + xhr.statusText);
        } else {
          setScroll();
        }
      });

      // Le indicamos cargar los mensajes cada 15 segundos 
      setInterval(function() {
        $('#chat-mensajes').load('cargar-mensajes.php');
        setScroll();
      },15000);

    });

   var elem = document.querySelector('.modal');
  var instance = M.Modal.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
          

  </script><script src="js/jquery-3.3.1.js" type="text/javascript"> var elem = document.querySelector('.modal');
  var instance = M.Modal.init(elem, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
          </script>