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
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE COMPROMISO A LA CÁTEDRA DE EMPRENDIMIENTO</a></div>
<p style="color: red;">FOR-EP-004</p>
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
  <!--label&textarea-->

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5 style="color:red;">POR FAVOR LEA ATENTAMENTE...</h5>
<p style="text-align:justify;">De antemano le damos la bienvenida a la CÁTEDRA DE EMPRENDIMIENTO ofrecida por la Universidad Libre sede Bosque Popular (Bogotá D.C.). Usted ha decidido participar en la presente cátedra y si bien el curso no tiene costo para usted, y aunque no esté inscrito oficialmente por ser externo, sin motivación por una calificación académica, deseamos destacar el compromiso que usted asume:</p>
como estan todos</p>
<p style="text-align:justify;">
 Cumplir mínimo con el 90% de la asistencia.</p>
<p style="text-align:justify;"> Respetar los horarios establecidos y definidos para la Cátedra.</p>
<p style="text-align:justify;"> Realizar las actividades propuestas de forma individual y/o con su equipo de trabajo.</p>
<p style="text-align:justify;"> Completarlo en su totalidad (Asistir a la totalidad de las reuniones hasta la culminación del Elevator Pitch).</p>
<p style="text-align:justify;"> Respetar a todos los asistentes de la Cátedra y al personal de la institución</p>
<p style="text-align:justify;"> Cumplir con los plazos que se establezcan para cada una de las actividades y con la entrega permanente de ta-reas diversas, de acuerdo con los cronogramas establecidos. </p>
<p style="text-align:justify;"> Respetar todos los espacios e instalaciones de la Universidad Libre sede Bosque Popular.</p>
<p style="text-align:justify;"> Ser susceptible de que monitoreen su desempeño en la Cátedra .</p>
<p style="text-align:justify;">Al concluir el curso, si Usted finaliza el mismo y cumple con todos los requisitos exigidos, el Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre –CEIDEUL le expedirá un Certificado de Aprobación.</p>
<p style="text-align:justify;">El incumplimiento de las actividades del curso, la poca participación y las ausencias injustificadas, conllevará a la cancelación de su participación.</p>
<p style="text-align:justify;">A continuación, si usted ha leído y entendido la información precedente, y se compromete a cumplir con los requisitos de la Cátedra de Emprendimiento le solicitamos firmar el presente documento.</p>
<hr>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">¿ACEPTA LAS CONDICIONES Y PARÁMETROS DE LA CÁTEDRA?</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>SI</option>
      <option>NO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5>PARÁMETROS DE LA CÁTEDRA</h5>
<h6>Diligencie según la información que recibió del CEIDEUL</h6>

<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE INICIO</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA DE FINALIZACIÓN</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    </div>
<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LUGAR DE ASISTENCIA</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>UNIVERSIDAD LIBRE (SEDE BOSQUE POPULAR)</option>
      <option>NO LO TIENE CLARO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LUGAR DE ASISTENCIA</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>SÁBADOS - DIURNO</option>
      <option>NO LO TIENE CLARO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>

<h5>INFORMACIÓN DEL PARTICIPANTE</h5>
<hr>

<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE COMPLETO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TIPO DE IDENTIFICACIÓN</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>CÉDULA DE CIUDADANIA</option>
      <option>CÉDULA DE EXTRANJERIA</option>
      <option>TARJETA DE IDENTIDAD</option>
      <option>NIT</option>
      <option>PASAPORTE</option>
      <option>PEP</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>


<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">No. IDENTIFICACIÓN</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TIPO DE PERSONA </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>ESTUDIANTE</option>
      <option>DOCENTE</option>
      <option>ADMINISTRATIVO</option>
      <option>EXTERNO</option>
      <option>Otro:</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
  </div>

<hr>


<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">PROGRAMA / PROFESIÓN / EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">No. CELULAR</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

  <hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">¿TIENE ALGUNA DUDA, PETICIÓN, QUEJA O SUGERENCIA A CERCA DE LA CÁTEDRA?</label>
      <textarea class="form-control" id="inputEmail4" rows="3" style="white-space: pre-wrap;" required></textarea>
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