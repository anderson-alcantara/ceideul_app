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
<script src="../js/alertifyjs/alertify.js"></script>
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
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE EVALUACIÓN PROYECTO DE GRADO CREACIÓN DE EMPRESA</a></div>
<p style="color: red;">FOR-EP-003</p>
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

<h6>DILIGENCIE EL SIGUIENTE FORMATO SEGÚN LA INFORMACIÓN QUE SE LE HAYA BRINDADO EN EL CEIDEUL</h6>
<hr>

  <!--label&textarea-->

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE EVALUACION</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DEL ESTUDIANTE / CÓDIGO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">PROGRAMA ACADÉMICO</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>ADMINISTRACIÓN DE EMPRESAS</option>
      <option>CONTADURÍA PUBLICA</option>
      <option>Otro:</option>
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DEL SEGUNDO ESTUDIANTE / CÓDIGO </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">PROGRAMA ACADÉMICO</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>ADMINISTRACIÓN DE EMPRESAS</option>
      <option>CONTADURÍA PUBLICA</option>
      <option>Otro:</option>
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>
 
<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">SEMESTRE PRIMER ESTUDIANTE</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NÚMERO DE CONTACTO</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">SEMESTRE SEGUNDO ESTUDIANTE</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NÚMERO DE CONTACTO</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DE LA EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">TIPO DE EMPRESA </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE INICIO DE ACTIVIDADES</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">RESUMEN DEL PROYECTO</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>
  </div>
<hr>

<h5>COMITÉ DE EVALUACIÓN PARA LA OPCIÓN DE GRADO CREACIÓN DE EMPRESA</h5>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE Y ÁREA DEL EVALUADOR # 1 </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE Y ÁREA DEL EVALUADOR # 2  </label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE Y ÁREA DEL EVALUADOR # 3</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE Y ÁREA DEL EVALUADOR # 4</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<h5 style="color:red;">EVALUACIÓN PROYECTO DE GRADO “CREACIÓN DE EMPRESA”</h5>
<h6 style="text-align: justify;">De acuerdo con la inscripción de los solicitantes y su ensayo inicial, evalúe de 1 a 5 el cumplimiento de los siguientes criterios , siendo 1 el de menor cumplimiento y 5 el de mayor cumplimiento. El promedio final será determinante en la decisión final de evaluación del proyecto.</h6>
<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Según el listado de evaluadores anterior elige: </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>EVALUADOR #1</option>
      <option>EVALUADOR #2</option>
      <option>EVALUADOR #3</option>
      <option>EVALUADOR #4</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">Presentación</label>
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
      <label for="exampleFormControlSelect1" class="required">Idea de negocio clara</label>
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
      <label for="exampleFormControlSelect1" class="required">Objetivos desde el punto de vista social, económico, ambiental, y demás.</label>
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
      <label for="exampleFormControlSelect1" class="required">Razones que fundamentan el desarrollo del proyecto.</label>
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
      <label for="exampleFormControlSelect1" class="required">Antecedentes del proyecto.</label>
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
      <label for="exampleFormControlSelect1" class="required">Mercado al que va dirigida la idea de negocio y en donde se encuentra ubicado.</label>
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
      <label for="exampleFormControlSelect1" class="required">Ventajas de la iniciativa frente a otras propuestas, en cuanto a la satisfacción de las necesidades de los clientes potenciales.</label>
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
      <label for="exampleFormControlSelect1" class="required">Competidores y su ubicación.</label>
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
      <label for="exampleFormControlSelect1" class="required">Tipo de capacitación han tenido o investigado para pensar que la idea de negocio puede ser exitosa.</label>
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
      <label for="exampleFormControlSelect1" class="required">Bibliografía o fuentes consultadas</label>
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
    <label for="exampleFormControlSelect1" class="">CORRECCIONES</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;"></textarea>
    </div>
  </div>
  
<hr>

<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">RECOMENDACIONES</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="">OBSERVACIONES</label>
    <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" ></textarea>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">DECISIÓN</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>APROBADO</option>
      <option>APROBADO CON CORRECCIONES (Indique para que fecha en las observaciones)</option>
      <option>NO APROBADO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

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