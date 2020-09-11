<?php 

	require_once "conexion.php";
	$conexion=conexion();
		$nombreformato=$_POST['nombreformato'];
		$nombre_remit=$_POST['nombre_remit'];
		$ruta=$_POST['ruta'];
		$correo=$_POST['correo'];
		$nombre_comentador=$_POST['nombre_comentador'];
		$fecha=$_POST['fecha'];
		$comentario=nl2br($_POST['comentario']);

	
			$sql="INSERT into tb_comentarios (nombreformato,nombre_remit,ruta,correo,nombre_comentador,fecha,comentario)
				values ('$nombreformato','$nombre_remit','$ruta','$correo','$nombre_comentador','$fecha','$comentario')";
			echo $result=mysqli_query($conexion,$sql);
		




 ?>