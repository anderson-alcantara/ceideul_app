<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Registro</title>
<link rel="shortcut icon" href="images/ulibre_logo.png" />
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

</head>
<body>
<div class="login-page">
          <div class="bolas">
            <div class="form" >
                <img src="images/ceideul_logo.png">
              <form class="login-form" id="form1">
			  <input type="text" placeholder="Nombres" id="nombres" required/>
			  <input type="text" placeholder="Apellidos" id="apellidos" required/>
			  <input type="text" placeholder="Número de documento" id="documento" required/>
				<input type="text" placeholder="E-mail" id="correo_electronico" required/>

                <input type="password" placeholder="Clave" style="border-top:50px;" id="password" required/>
                <input type="password" placeholder="Repetir clave" id="password2" required/>
                <select name="tipousuario" id="selectTipo" class="select-css"
                style="border-bottom: 100px;" autocomplete="off">
                  <option value="value1" selected>Tipo de Usuario</option>
                  <option value="value2">Estudiante</option>
				  <option value="value3">Egresado</option>
				  <option value="value3">Externo</option>

				</select>
</br>
				<select name="tipousuario" id="selectSeccional" class="select-css"
                style="border-bottom: 100px;" autocomplete="off">
                  <option value="value1" selected>Seccional</option>
				  <option>Bogotá</option>
	<option>Cali</option>
	<option>Barranquilla</option>
	<option>Cartagena</option>
	<option>Socorro</option>
	<option>Cúcuta</option>
	<option>Pereira</option>

                </select>
                <button type="button" style="margin-top: 20px;" id="registrarNuevo"  >Ingresar</button> 
              </form>
            </div>
          </div>
          
</div>	
</body>
</html>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){
			if($('#nombres').val()==""){
				alertify.alert("Debes agregar el nombre").setHeader('<em>  </em> '); 
				return false;
			}
			else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar el apellido").setHeader('<em>  </em> '); 
				return false;
			}

			else if($('#documento').val()==""){
				alertify.alert("Debes agregar el documento").setHeader('<em>  </em> '); 
				return false;
			}



			else if(validateEmail($('#correo_electronico').val())==false){
				alertify.alert("email incorrecto").setHeader('<em>  </em> '); 
				return false;
			
			}

			
			else if($('#password').val()==""){
				alertify.alert("Debes agregar la contraseña").setHeader('<em>  </em> '); 
				return false;
			}
			else if($('#password').val().length< 8){
				alertify.alert("La contraseña debe tener mínimo 8 caracteres").setHeader('<em>  </em> '); 
				return false;
			}else if($('#password').val()!==$('#password2').val()){
				alertify.alert("las contraseñas no coinciden").setHeader('<em>  </em> '); 
				return false;
			}


			else if($("#selectTipo option:selected" ).text()=="Tipo de Usuario"){
				alertify.alert("Debes agregar el tipo de usuario").setHeader('<em>  </em> '); 
				return false;
			}
			else if($("#selectSeccional option:selected" ).text()=="Seccional"){
				alertify.alert("Debes agregar la seccional").setHeader('<em>  </em> '); 
				return false;
			}
			

			cadena="correo_electronico=" + $('#correo_electronico').val() +
					"&password=" + $('#password').val() +
					"&tipousuario=" + $("#selectTipo option:selected").text()+
					"&nombres=" + $('#nombres').val()+
					"&documento=" + $('#documento').val()+
					"&seccional=" + $("#selectSeccional option:selected").text()+
					"&apellidos=" + $('#apellidos').val();
				console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/registro.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro").setHeader('<em>  </em> ');
								$('#form1')[0].reset();
							}
							else if(r==1){
								alertify.alert('Usuario creado con éxito').set('onok', function(closeEvent){ window.location="index.php";} ).setHeader('<em>  </em> '); 
								
								
								
							}else{
								alertify.error("Fallo al agregar");
							}
						}
					});
		});
	});
	function validateEmail(email) 
    {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>

