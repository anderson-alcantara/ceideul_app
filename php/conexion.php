

<?php 
	function conexion()
	{
		 $link= mysqli_connect("localhost","root","","ceideul");
		

		mysqli_set_charset($link, "utf8");

		return $link;
	}

 ?>