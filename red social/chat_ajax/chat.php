<?php
	include "db.php";
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
