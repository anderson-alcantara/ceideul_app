<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<link rel="shortcut icon" href="images/ulibre_logo.png" />
	<?php require_once "scripts.php"; ?>
</head>
<style>
body {
  background: #005682; /* fallback for old browsers */
   
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #005682;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #32779b;
}
</style>
<body>

<div class="login-page">
            <div class="form">
                <img src="images/ceideul_logo.png">
              <form class="login-form">
                <input type="text" name="nombre" id="usuario" placeholder="Usuario"/>
                <input type="password" id="password" name="clave" placeholder="Clave"/>
                <button type="button" id="entrarSistema">Ingresar</button>             
              </form>
            </div>
          </div>

<br><br><br>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuario').val()==""){
				alertify.alert("Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena="correo_electronico=" + $('#usuario').val() + 
					"&clave=" + $('#password').val();
console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/login_admin.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==1){
								window.location="home_Admin.php";
							}
							else{
								alertify.alert('Usuario o clave incorrectos').setHeader('<em>  </em> '); ;
							}
						}
					});
		});	
	});
</script>