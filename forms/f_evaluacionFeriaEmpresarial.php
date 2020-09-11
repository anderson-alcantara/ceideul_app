<!DOCTYPE html>
<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:../index.php");
	 exit(); 
 }
?>
<html lang="es">
<head>
<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
<link rel="shortcut icon" href="../images/ulibre_logo.png" />
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/mdb.min.css" />
<script src="../js/alertifyjs/alertify.js"></script>
<script src="../js/alertifyjs/mdb.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/styleform2.css">
  <title>CEIDEUL</title>
</head>
<body>
<p></p>
<form class="form" id="form1" action="./" method="POST">
<div id="pag1">
  <!--Titulo princiapl-->
  <div style="">
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE EVALUACIÓN FERIA EMPRESARIAL</a></div>
<p style="color: red;">FOR-EP-007</p>
</div>
<hr style="color:red; background-color:red;">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="txtnombre" class="required">Nombre</label>
      <input type="text" class="form-control" id="txtnombre" placeholder="Email" required disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="txtcorreo" class="required">Email</label>
      <input type="text" class="form-control" id="txtcorreo" placeholder="" required disabled>
    </div>
  </div>

<hr>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE DILIGENCIAMIENTO</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>
<hr>


<h5>PARÁMETROS DE LA FERIA</h5>
<h6>Diligencie según la información que recibió del CEIDEUL</h6>
<hr>

  <!--label&textarea-->

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">No. EDICIÓN DE LA FERIA EMPRESARIAL</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE INICIO</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE FINALIZACIÓN</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5>INFORMACIÓN DEL PARTICIPANTE</h5>
<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="">No. STAND</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE PARTICIPANTE</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DEL JURADO EVALUADOR</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">OCUPACIÓN / ÁREA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5>EVALUACIÓN FERIA EMPRESARIAL</h5>
<p style="text-align:justify;">Apreciado jurado, le solicitamos diligenciar el siguiente formato, con el fin de otorgar los premios correspondientes. Marque con una “X” en el espacio que corresponda, teniendo en cuenta: </p>
<p>5 = Excelente; 4 = Bueno; 3 = Aceptable; 2 = Regular; 1= Deficiente.</p>
<hr>

<h6>PRESENTACIÓN</h6>
<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Stand</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Expositores</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Productos / Servicios</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5>SERVICIO</h5>
<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Atención al publico</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Disponibilidad</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>

<h5>PROPUESTA</h5>
<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Calidad</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Innovación</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="">OBSERVACIONES FINALES.</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;"></textarea>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class=""></label>
    </div>
  </div>

<hr>

<h5>¡MUCHAS GRACIAS POR SU PARTICIPACIÓN!</h5>
<hr>
  <!--botón enviar-->
  <div class="form__item">
    <button class="btn btn-success" type="button" id="botonenviar">Enviar</button>
  </div>
</form>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/FileSaver.js"></script>
<script src="../js/jquery.wordexport.js"></script>
<script>
 function invisibleradio(){
  $(".grupordbuttons").each(function(){
 $(this).remove(); //traigo todos los radio button
});
 }



function verificarvacio(){

var retorno=true;
  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
     

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
case "INPUT":
case "SELECT":
case "TEXTAREA":
var valor=$(this).val();
if(valor=="" && $(this).is(":visible") && $(this).prop('required')){
  $(this).css({"border": "2px solid red", "border-radius": "4px"});
  retorno= false;
}else{

  $(this).css({"border": "", "border-radius": ""});
}
break;
}
    })




  }
  
})


});
return retorno;
}





function addrespuesta(){

  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
      var that=$(this);

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
 case "INPUT":
 case "SELECT":
case "TEXTAREA":
debugger
  var elem2 = document.createElement('label');
    elem2.style.color="red";
    elem2.style.whiteSpace="pre-wrap";
  var tipo=($(this).prop('type'));
var valor=$(this).val();
 var valorspace= valor.replace(/(\r\n|\n|\r)/gm, "<br />");
elem2.innerHTML = valorspace; 
      that.append(elem2);
break;
}
    })




  }
  
})


});
}




  </script>
<script>

$(document).ready(function(){
    $("select").change(function(){
        var selected = $(this).children("option:selected").val();
        
        if(selected=="Otro:"){
         $(this).closest('div').find("input").attr("hidden",false); 
         $(this).closest('div').find("input").val("");

         
        }else{

          $(this).closest('div').find("input").attr("hidden",true); 
          $(this).closest('div').find("input").val(selected);
        }


    });
});

</script>
<script>

$('#txtnombre').val('<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>');
$('#txtcorreo').val('<?php echo $_SESSION['user']; ?>');
document.getElementById("botonenviar").addEventListener ("click", Ongeneratepdf, false);






  function Ongeneratepdf(){
    if(verificarvacio()==true){
      addrespuesta();
      var doc = new jsPDF();
var elementHTML = document.body;
var specialElementHandlers = {
    '#elementH': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
var pdf =doc.output();
var nombres='<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
var correo='<?php echo $_SESSION['user']?>';
var tipousuario='<?php echo $_SESSION['tipo_usuario']?>';
var nombreform=filenamesinpunto;
var nombreform_completo=$("#nombre_form").text();
var d=new Date();
var mes=d.getMonth()+1
var fecha=d.getDate()+" "+mes+" "+d.getFullYear()+"_"+d.getHours()+"-"+d.getMinutes()+"-"+d.getSeconds();
var nombrearchivo=fecha+"_"+nombres+"_"+nombreform;
var seccional='<?php echo $_SESSION['seccional']?>';
cadena="pdf=" + pdf +
					"&nombres=" + nombres +
					"&correo=" + correo+
					"&tipousuario=" +tipousuario+
          "&nombreform=" +nombreform+
          "&nombreform_completo=" +nombreform_completo+
          "&nombrearchivo=" +nombrearchivo+
					"&fecha=" +fecha+
          "&seccional=" +seccional;
console.log(cadena);
$.ajax({
						type:"POST",
						url:"../php/subir_form.php",
						data:cadena,
						success:function(r){
                if(r==1){
                  alertify.alert('Formulario enviado con éxito').set('onok', function(closeEvent){ 
                    window.close();

									} ).setHeader('<em>  </em> '); 

                }else if(r==2){
                  alertify.alert('Este formulario ya fué registrado por el usuario').setHeader('<em>  </em> '); 
                }else if(r==3){
                  alertify.alert('error en conexión').setHeader('<em>  </em> '); 
                }
            }						
					});
    
    }else{
      alert('Por favor llenar todos los campos obligatorios'); 
    }

  }

</script>
<script>
var loc = window.location.pathname;


var index = loc.lastIndexOf("/") + 1;
var filename = loc.slice(index);
var filenamesinpunto= filename.substr(0, filename.indexOf('.')); 

</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/html2canvas.min.js"></script>
  <script src="../js/jspdf.debug.js"></script>
  <script src="../js/docx.js"></script>

  <script src="../js/canvas2image.min.js"></script>
</html>