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
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE DIAGNOSTICO PARA ASESORIA EMPRESARIAL</a></div>
<p style="color: red;">FOR-AC-001</p>
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
      <label for="inputEmail4" class="required">Fecha</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">RAZÓN SOCIAL DE LA EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DEL EMPRESARIO / REPRESENTANTE LEGAL</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">DIRECCIÓN EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">LOCALIDAD - BARRIO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">CONTACTO DIRECTO PARA LA ASESORÍA (NOMBRE)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">CARGO EN LA EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">TELÉFONO DE CONTACTO</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">ÁREA (A)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">PRINCIPALES PROBLEMAS (A)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>






<div class="form-row">
<div class="form-group col-md-6">
    <label for="exampleFormControlSelect1" class="required">POSIBLES CAUSAS (A)</label>
    <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">NIVEL DE INCIDENCIA (A)</label>
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


<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ÁREA (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">PRINCIPALES PROBLEMAS (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>

<hr>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">POSIBLES CAUSAS (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1">NIVEL DE INCIDENCIA (B)</label>
      <select class="form-control" id="exampleFormControlSelect1" >
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
<hr>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES PROBLEMA ANTERIOR (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">ÁREA (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
<hr>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">PRINCIPALES PROBLEMAS (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">POSIBLES CAUSAS (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>
<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1">NIVEL DE INCIDENCIA (C)</label>
      <select class="form-control" id="exampleFormControlSelect1" >
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES PROBLEMA ANTERIOR (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>
<hr>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">ANTECEDENTES DE SOLUCIÓN (A)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">COMPROMISOS / ACCIONES A SEGUIR (A)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required >
    </div>
  </div>
<hr>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">OBSERVACIONES (A)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">ANTECEDENTES DE SOLUCIÓN (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>
<hr>








<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">COMPROMISOS / ACCIONES A SEGUIR (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES (B)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>
<hr>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">ANTECEDENTES DE SOLUCIÓN (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">COMPROMISOS / ACCIONES A SEGUIR (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>
<hr>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES (C)</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VENTAS Y MARKETING : Se cuenta con un plan estratégico de marketing y de ventas</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
  </div>
<hr>
<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VENTAS Y MARKETING: Se planifican las actividades a implementar según el plan estratégico de esta área. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VENTAS Y MARKETING: Las actividades realizadas coinciden con la planificación.  </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>

  
  
<hr>



<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VENTAS Y MARKETING: El personal que labora en esta área de marketing y ventas, es idóneo para los cargos que desempeñan</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VENTAS Y MARKETING: Se realiza regimiento al cumplimento de las actividades realizadas según la planificación</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>










  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN Y ADMINISTRACIÓN: Se cuenta con una Visión y Misión de la empresa por escrito.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN Y ADMINISTRACIÓN: El plan de direccionamiento estratégico se basa en el cumplimento de la Misión y la Visión.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>












  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN Y ADMINISTRACIÓN: Las actividades que se llevan a cabo están acorde con el direccionamiento estratégico.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN Y ADMINISTRACIÓN: Los líderes de las distintas áreas tienen total conocimiento sobre el plan estratégico y lo tienen en cuenta para su desempeño.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>
















  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN Y ADMINISTRACIÓN: La alta gerencia verifica que la planeación en las distintas áreas este acorde con el direccionamiento estratégico.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TALENTO HUMANO: La compañía cuenta con un plan estratégico en la dirección de esta área, y está directamente relacionado con el direccionamiento estratégico de la compañía. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>


















  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TALENTO HUMANO: La compañía cuenta con los principios y valores que dan cumplimiento al direccionamiento estratégico, por escrito.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TALENTO HUMANO: Se tiene un plan de sensibilización a todo el personal sobre los principios y valores de la compañía.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>













  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TALENTO HUMANO: El actuar del personal de la compañía refleja estos principios y valores.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TALENTO HUMANO: Se verifica por parte de la dirección de esta área, el cumplimento de estos principios y valores en cada una de las áreas.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>





  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">OPERACIONES, LOGÍSTICA Y PRODUCCIÓN: Se cuenta con una planificación de la cadena de suministros, producción y operaciones que permita el cumplimiento de los objetivos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">OPERACIONES, LOGÍSTICA Y PRODUCCIÓN: En el momento de realizar las actividades diarias se tiene en cuenta la planificación.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>




  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">OPERACIONES, LOGÍSTICA Y PRODUCCIÓN: El personal operativo tiene claridad en cuanto a la planificación. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">OPERACIONES, LOGÍSTICA Y PRODUCCIÓN: Existe una flexibilidad en el momento de realizar las actividades, que permita realizar los ajustes necesarios.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>




  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">OPERACIONES, LOGÍSTICA Y PRODUCCIÓN: Se cuentan con indicadores de cumplimiento de la planificación.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LEGAL: La compañía cuenta con un plan de prevención y procedimientos para los asuntos legales.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>



  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LEGAL: Se cuenta con personal idóneo para la defensa de los intereses de la compañía.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LEGAL: Se analizan los proyecto se la compañía antes de su implementación en el marco jurídico.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LEGAL: Se realizan seguimiento a las posibles complicaciones jurídicas antes de que ocurra cualquier inconveniente. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">LEGAL: Se verifica el cumplimiento del marco legal en cada área de la compañía.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>









  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CONTABLE: Se cuenta con una planeación que permita el cumplimiento de los objetivos propuestos por el plan de direccionamiento estratégico.  </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CONTABLE: La compañía planifica cada transacción de acuerdo con el plan estratégico del área, permitiendo el cumplimento de los objetivos propuestos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CONTABLE: Las actividades del día a día están directamente direccionadas por la planeación.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CONTABLE: Se realizan auditorias para verificar la optimización de los recursos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CONTABLE: Se cuentan con indicadores de gestión que permitan evaluar el cumplimiento de los objetivos trazados.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">FINANCIERA: La empresa cuenta con una planeación financiera alineada con el plan estratégico.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">FINANCIERA: Se planifican las actividades a implementar según la planificación de esta área.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">FINANCIERA: Se realizan las actividades según lo planeado.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">FINANCIERA: Se cuentan con indicadores de gestión.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">FINANCIERA: La compañía realiza monitoreo constante para verificar el cumplimiento de los objetivos .</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>



  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN DE CONTROL Y AUDITORÍA: La compañía cuenta con una planificación en el control y auditorías internas.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN DE CONTROL Y AUDITORÍA: El cronograma de auditorías está basado en la planificación.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN DE CONTROL Y AUDITORÍA: Al establecer los controles se garantiza el cumplimiento de los objetivos de esta área. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN DE CONTROL Y AUDITORÍA: Existen controles actualizados en los puntos críticos, de los proceso de cada área.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GESTIÓN DE CONTROL Y AUDITORIA: Se controla el cumplimiento de los indicadores trazados.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TRIBUTARIA, REVISORÍA FISCAL, NIIF: En la planeación tributaria se tienen en cuenta las NIIF .</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TRIBUTARIA, REVISORÍA FISCAL, NIIF: La revisoría fiscal se basa en las NIIF, y soporta la planeación tributaria. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TRIBUTARIA, REVISORÍA FISCAL, NIIF: Las actividades diarias se basan en la planeación del área.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TRIBUTARIA, REVISORÍA FISCAL, NIIF: Se realiza monitorea sobre los cumplimientos de la planificación.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TRIBUTARIA, REVISORÍA FISCAL, NIIF: Existen controles que garanticen el cumplimiento de los objetivos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>




  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: Se cuenta con una planeación que permita el cumplimiento de los objetivos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: Se tienen en cuenta las directrices gerenciales en cuanto a optimizar los recursos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: La verificación de compras, gastos y Presupuesto se realizan basados en el plan estratégico.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: La compañía realiza controles en los costos garantizando el cumplimiento de los objetivos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: Existen indicadores que permiten el control del cumplimiento del Presupuesto.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">RSE Y GESTIÓN AMBIENTAL: Se tiene en cuenta la sustentabilidad en la planeación estratégica de la compañía.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">RSE Y GESTIÓN AMBIENTAL: A la compañía le importa el tema de la responsabilidad social, ambiental, económica.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">RSE Y GESTIÓN AMBIENTAL: Existen procedimientos para el manejo de residuos sólidos y líquidos de la compañía.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>
  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">RSE Y GESTIÓN AMBIENTAL : Existe política de responsabilidad social. </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">RSE Y GESTIÓN AMBIENTAL: Se realizan controles para garantizar el mínimo impacto negativo.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>


  </div>
  <hr>

  <div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">COSTOS Y PRESUPUESTOS: Se tienen en cuenta las directrices gerenciales en cuanto a optimizar los recursos.</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES ENCUESTA SITUACIONAL</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>


  </div>
  <hr>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA TENTATIVA</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">HORA</label>
      <input type="time" class="form-control" id="inputEmail4" placeholder="" required>
    </div>


  </div>
  <hr>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">LUGAR</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>UNIVERSIDAD LIBRE - SEDE BOSQUE POPULAR</option>
      <option>Otro:</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">ASESOR</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>


  </div>
  <hr>


  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4">ÁREA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">OBSERVACIONES ADICIONALES / TEMAS A TRATAR / COMPROMISOS DE LAS PARTES</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
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