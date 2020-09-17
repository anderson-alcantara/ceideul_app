<!DOCTYPE html>
<html lang="es">
   <!-- Basic -->
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>CEIDEUL</title>
<link rel="shortcut icon" href="images/ulibre_logo.png" />
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style copy.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css"/>

      <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/datatable.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
      
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
<script src="js/alertifyjs/alertify.js"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:index.php");
	 exit(); 
 }
?>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <div class="loader">
            <img src="images/loader.gif" alt="#" />
         </div>
      </div> -->
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">


<li><a onclick="volverinicio()" style="cursor:pointer;">Inicio</a></li>

<ul class="nav__list">
   <li>
        <input id="group-1er" type="checkbox" hidden />
        <label for="group-1er"><span class="fa fa-angle-right"></span>Sobre CEIDEUL</label>
        <ul class="group-list">
        <li style="background-color:#353535;"><a href="sc_catedra_emprendimieto.php">Cátedra de emprendimiento</a></li>
        <li style="background-color:#353535;"><a href="sc_elevator_pitch.php">Elevator Pitch</a></li>
        <li style="background-color:#353535;"><a href="sc_feria_empresarial.php">Feria empresarial</a></li>
        <li style="background-color:#353535;"><a href="sc_opcion_grado.php">Opción de grado creación de empresa</a></li>
        <li style="background-color:#353535;"><a href="sc_proyeccion_social.php">Proyección social</a></li>
        <li style="background-color:#353535;"><a href="sc_consultorio.php">Consultorio</a></li>
        <li style="background-color:#353535;"><a href="sc_asesoria.php">Asesoría</a></li>
        <li style="background-color:#353535;"><a href="sc_innovacion.php">Innovación</a></li>
        <!--Extensión-->
        <!--Clúster Fami-Pyme-->
          </li>
        </ul>
        <li id="li_verRegistros"><a href="Admin_forms.php">Ver registros</a></li>
<li><a href="ver_comentarios.php">Notificaciones</a></li>
   <ul class="nav__list">
   <li>
        <input id="group-1" type="checkbox" hidden />
        <label for="group-1"><span class="fa fa-angle-right"></span>Mi perfil</label>
        <ul class="group-list">
        <li style="background-color:#353535;"><a href="Editar_Perfil.php">Editar Perfil</a></li>
          <li><a href="index.php" style="background-color:#353535;">Cerrar sesión</a></li>
          <li>
          </li>
        </ul>
      </li>

         
      <!-- <label for="group-3"><span class="fa fa-angle-right"></span> First level</label>
      <ul class="group-list">
        <li>
        <li><a href="#">1st level item</a></li>
        <li><a href="#">1st level item</a></li>
        <input id="sub-group-3" type="checkbox" hidden />
        <label for="sub-group-3"><span class="fa fa-angle-right"></span> Second level</label>
        <ul class="sub-group-list">
          <li><a href="#">2nd level nav item</a></li>
          <li><a href="#">2nd level nav item</a></li>
          <li><a href="#">2nd level nav item</a></li>
          <li>
            <input id="sub-sub-group-3" type="checkbox" hidden />
            <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span> Third level</label>
            <ul class="sub-sub-group-list">
              <li><a href="#">3rd level nav item</a></li>
              <li><a href="#">3rd level nav item</a></li>
              <li><a href="#">3rd level nav item</a></li>
            </ul>
          </li>
        </ul>
        </li>
      </ul>
      </li>
      <li>
      <input id="group-4" type="checkbox" hidden />
      <label for="group-4"><span class="fa fa-angle-right"></span> Elevator Pitch</label>
      <ul class="group-list">
        <li>
        <li><a href="#">1st level item</a></li>
        <input id="sub-group-4" type="checkbox" hidden />
        <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
        <ul class="sub-group-list">
          <li><a href="#">2nd level nav item</a></li>
          <li><a href="#">2nd level nav item</a></li>
        </ul>
        </li>
      </ul>
      </li>
      <ul class="group-list">
         <li>
         <li><a href="#">1st level item</a></li>
         <input id="sub-group-4" type="checkbox" hidden />
         <label for="sub-group-4"><span class="fa fa-angle-right"></span> Second level</label>
         <ul class="sub-group-list">
           <li><a href="#">2nd level nav item</a></li>
           <li><a href="#">2nd level nav item</a></li>
         </ul>
         </li>
       </ul>
    </ul> -->
    <!-- <li id="li_formularios">
      <input id="group-2" type="checkbox" hidden  />
      <label for="group-2"><span class="fa fa-angle-right"></span>Formularios</label>
      <ul class="group-list">
        <li>
          <input id="sub-group-2" type="checkbox" hidden onclick="onhandleformularios('sub-group-2')" />
          <label for="sub-group-2" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Asesoría y Consultoría</label>
          <ul class="sub-group-list">

            <li>
               
              <input id="sub-sub-group-2" type="checkbox" hidden />
              <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span>asesoría y consultoría empresarial</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="forms/f_diagAsesoria.php" target="_blank">Formato de Diagnostico Para Asesoría Empresarial</a></li>
                <li><a href="forms/f_inicioAsesoriaEmp.html" target="_blank">Formato de Inicio de Asesoría Empresarial</a></li>
                <li><a href="forms/f_EntregaAsesoria.html" target="_blank">Formato de Entrega de Asesoría</a></li>
              </ul>
            </li>
            <li>
               
               <input id="sub-sub-group-3" type="checkbox" hidden />
               <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span>herramientas para la asesoría y consultoría empresarial</label>
            <ul class="sub-sub-group-list" style="font-size: 12px;">
                 <li><a href="forms/f_DiagAppOfimatica.html" target="_blank">Formato de Diagnostico de Aplicaciones Ofimaticas E Informatica</a></li>
                 <li><a href="forms/f_AnalisisDisePtrabajo.html" target="_blank">Formato de Análisis Para El Diseño de Puestos de Trabajo</a></li>
                 <li><a href="forms/f_perfilacion.php" target="_blank">Formato de Perfilación de Puestos de Trabajo</a></li>
                 <li><a href="forms/f_analisis" target="_blank">Formato de análisis Del Entorno</a></li>
                 <li><a href="forms/f_balance.html" target="_blank">Formato de Balance Scorecard</a></li>
                 <li><a href="">Formato de Identificación de Mercado</a></li>
                 <li><a href="forms/f_ishikawa.html" target="_blank">Formato de Diagrama de Ishikawa / Espina de Pescado</a></li>
                 <li><a href="#">Formato de Caracterización de Procesos</a></li>
                 <li><a href="#">Formato de Evaluación de Marco Estratégico</a></li>
                 <li><a href="#">Formato de Diagnostico Interno</a></li>
                 <li><a href="#">Formato de Matriz Dofa</a></li>
                 <li><a href="#">Formato de Cadena de Valor</a></li>
                 <li><a href="#">Formato de Modelo Canvas</a></li>
                 <li><a href="#">Formato de Solicitud de Acciones Preventivas Y de Mejora</a></li>
               </ul>
             </li>
          </ul>

          


          <input id="sub-group-3" type="checkbox" hidden onclick="onhandleformularios('sub-group-3')" />
          <label for="sub-group-3" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Opción de Grado</label>
          <ul class="sub-group-list">

            <li>
               
              <input id="sub-sub-group-4" type="checkbox" hidden />
              <label for="sub-sub-group-4"><span class="fa fa-angle-right"></span>Opciones de Grado CEIDEUL</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="#">Formato de Inscripción Para Opción de Grado Creación de Empresa</a></li>
                <li><a href="#">Formato de Recurso Estudiante / Externo</a></li>
 
              </ul>
              <input id="sub-sub-group-5" type="checkbox" hidden />
              <label for="sub-sub-group-5"><span class="fa fa-angle-right"></span>Opciones de Grado Creación de Empresa</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="#">Formato de Asignación de Tutor Para Proyecto de Grado</a></li>
                <li><a href="#">Formato de Evaluación Proyecto de Grado “creación de Empresa”</a></li>

              </ul>
            </li>
          </ul>


          <input id="sub-group-6" type="checkbox" hidden onclick="onhandleformularios('sub-group-6')" />
          <label for="sub-group-6" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Cátedra de emprendimiento</label>
          <ul class="sub-group-list">
            <li style="margin-bottom: 10px;"><a href="forms/f_compromiso">Formato de Compromiso a La Catedra de Emprendimiento</a></li>

            



            
            <input id="sub-sub-group-8" type="checkbox" hidden />
            <label for="sub-sub-group-8"><span class="fa fa-angle-right"></span>Ideas de Negocio</label>
            <ul class="sub-sub-group-list" style="font-size: 12px;">
              <li><a href="#">Formato Cátedra de Emprendimiento- Ideas de Negocio</a></li>
            </ul>
               
            <input id="sub-sub-group-7" type="checkbox" hidden />
            <label for="sub-sub-group-7"><span class="fa fa-angle-right"></span>Elevator Pitch</label>
            <ul class="sub-sub-group-list" style="font-size: 12px;">
              <li><a href="#">Formato de Banco de Ideas de Negocio</a></li>
            </ul>

          </ul>

          



          <input id="sub-group-8" type="checkbox" hidden onclick="onhandleformularios('sub-group-8')"/>
          <label for="sub-group-8" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Feria Empresarial</label>
          <ul class="sub-group-list">
            <li><a href="#">Formato Inscripción Feria Empresarial</a></li>
            <li><a href="#">Formato Protocolo Expositores Feria Empresarial</a></li>
            <li><a href="#">Formato de Inventario Feria Empresarial</a></li>
            <li>
               
              <input id="sub-sub-group-9" type="checkbox" hidden />
              <label for="sub-sub-group-9"><span class="fa fa-angle-right"></span>Evaluación Empresarial</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="#">Formato de Evaluación Feria Empresarial</a></li>
                <li><a href="#">Formato de Satisfacción Del Expositor</a></li>
              </ul>
            </li>
          </ul>



          <input id="sub-group-10" type="checkbox" hidden onclick="onhandleformularios('sub-group-10')"/>
          <label for="sub-group-10" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Práctica Empresarial</label>
          <ul class="sub-group-list">
            <li><a href="#">Formato de Inicio de Practica Empresarial</a></li>
            <li><a href="#">Formato de Concepto Docente Experto Disciplinar Práctica Empresarial</a></li>
            <li><a href="#">Formato de Entrega Final de Trabajo de Práctica Empresarial</a></li>
            <li><a href="#">Formato de Evaluación Entrega Final Practica Empresarial</a></li>

          </ul>








        </li> -->
      <!-- </ul>
    </li> -->
    <li id="li_formularios">
      <input id="group-2" type="checkbox" hidden  />
      <label for="group-2"><span class="fa fa-angle-right"></span>Formularios</label>
      <ul class="group-list">
        <li>
          <input id="sub-group-2" type="checkbox" hidden onclick="onhandleformularios('sub-group-2')" />
          <label for="sub-group-2" style="background-color: #aa1a1a6c;" if="li_asesoriaconsult" ><span class="fa fa-angle-right"></span> Asesoría y Consultoría</label>
          <ul class="sub-group-list">

            <li>
               <!--jkldfghjdfklhjdfjklh-->
              <input id="sub-sub-group-2" type="checkbox" hidden />
              <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span>asesoría y consultoría empresarial</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="forms/f_diagAsesoria.php" target="_blank">Formato de Diagnostico Para Asesoría Empresarial</a></li>
                <li><a href="forms/f_inicioAsesoriaEmp.php" target="_blank">Formato de Inicio de Asesoría Empresarial</a></li>
                <li><a href="forms/f_EntregaAsesoria.php" target="_blank">Formato de Entrega de Asesoría</a></li>
              </ul>
            </li>
            <li>
               
               <input id="sub-sub-group-3" type="checkbox" hidden />
               <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span>herramientas para la asesoría y consultoría empresarial</label>
            <ul class="sub-sub-group-list" style="font-size: 12px;">
                 <li><a href="forms/f_DiagAppOfimatica.php" target="_blank">Formato de Diagnostico de Aplicaciones Ofimaticas E Informatica</a></li>
                 <li><a href="forms/f_AnalisisDisePtrabajo.php" target="_blank">Formato de Análisis Para El Diseño de Puestos de Trabajo</a></li>
                 <li><a href="forms/f_perfilacion.php" target="_blank">Formato de Perfilación de Puestos de Trabajo</a></li>
                 <li><a href="forms/f_analisisEntorno.php" target="_blank">Formato de análisis del Entorno</a></li>
                 <li><a href="forms/f_BalanceScoreCard.php" target="_blank">Formato de Balance Scorecard</a></li>
                 <li><a href="forms/f_identificacionMercado.php" target="_blank">Formato de Identificación de Mercado</a></li>
                 <li><a href="forms/f_ishikawa.php" target="_blank">Formato de Diagrama de Ishikawa / Espina de Pescado</a></li>
                 <li><a href="forms/f_CaracterizacionProcesos.php" target="_blank">Formato de Caracterización de Procesos</a></li>
                 <li><a href="forms/f_EvaluacionMarcoEstrategico.php" target="_blank" >Formato de Evaluación de Marco Estratégico</a></li>
                 <li><a href="forms/f_DiagInterno.php" target="_blank">Formato de Diagnostico Interno</a></li>
                 <li><a href="forms/f_Dofa.php" target="_blank">Formato de Matriz Dofa</a></li>
                 <li><a href="forms/f_CadenaValor.php" target="_blank">Formato de Cadena de Valor</a></li>
                 <li><a href="forms/f_Canvas.php" target="_blank">Formato de Modelo Canvas</a></li>
                 <li><a href="forms/f_SolicitudAccionesPreventivas.php">Formato de Solicitud de Acciones Preventivas Y de Mejora</a></li>
               </ul>
             </li>
          </ul>

          

          <input id="sub-group-3" type="checkbox" hidden onclick="onhandleformularios('sub-group-3')" />
          <label for="sub-group-3" style="background-color: #aa1a1a6c;" id="li_opciongrado"><span class="fa fa-angle-right"></span> Opción de Grado</label>
          <ul class="sub-group-list">

            <li>
               
              <input id="sub-sub-group-4" type="checkbox" hidden />
              <label for="sub-sub-group-4"><span class="fa fa-angle-right"></span>Opciones de Grado CEIDEUL</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="forms/f_inscripcionCreacionDeEmpresa.php" target="_blank">Formato de Inscripción Para Opción de Grado Creación de Empresa</a></li>
                <li><a href="forms/f_RecursoEstudianteExt.php">Formato de Recurso Estudiante / Externo</a></li>
 
              </ul>
              <input id="sub-sub-group-5" type="checkbox" hidden />
              <label for="sub-sub-group-5"><span class="fa fa-angle-right"></span>Opciones de Grado Creación de Empresa</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="forms/f_asignaciondetutorproyecto.php" target="_blank">Formato de Asignación de Tutor Para Proyecto de Grado</a></li>
                <li><a href="forms/home_Estudiante.php">Formato de Evaluación Proyecto de Grado “creación de Empresa”</a></li>

              </ul>
            </li>
          </ul>


          <input id="sub-group-6" type="checkbox" hidden onclick="onhandleformularios('sub-group-6')" />
          <label for="sub-group-6" style="background-color: #aa1a1a6c;" id="li_catedraempren"><span class="fa fa-angle-right"></span> Cátedra de emprendimiento</label>
          <ul class="sub-group-list">
            <li style="margin-bottom: 10px;"><a href="forms/f_compromisocatedraemprendimiento.php" target="_blank">Formato de Compromiso a La Catedra de Emprendimiento</a></li>

            



            
            <input id="sub-sub-group-8" type="checkbox" hidden />
            <label for="sub-sub-group-8"><span class="fa fa-angle-right"></span>Ideas de Negocio</label>
            <ul class="sub-sub-group-list" style="font-size: 12px;">
              <li><a href="forms/f_BancoDeIdeas.php" target="_blank">Formato Cátedra de Emprendimiento- Ideas de Negocio</a></li>
            </ul>
          </ul>
          <input id="sub-group-8" type="checkbox" hidden onclick="onhandleformularios('sub-group-8')"/>
          <label for="sub-group-8" style="background-color: #aa1a1a6c;" id="li_feria"><span class="fa fa-angle-right"></span> Feria Empresarial</label>
          <ul class="sub-group-list">
            <li><a href="forms/f_inscripcionFeriaEmpresarial.php" target="_blank">Formato Inscripción Feria Empresarial</a></li>
            <li><a href="forms/f_ProtocoloExpositores.php" target="_blank">Formato Protocolo Expositores Feria Empresarial</a></li>
            <li><a href="forms/f_formatoInventarioFeriaEmpresarial.php" target="_blank">Formato de Inventario Feria Empresarial</a></li>
            <li>
               
              <input id="sub-sub-group-9" type="checkbox" hidden />
              <label for="sub-sub-group-9"><span class="fa fa-angle-right"></span>Evaluación Empresarial</label>
              <ul class="sub-sub-group-list" style="font-size: 12px;">
                <li><a href="forms/f_evaluacionFeriaEmpresarial.php" target="_blank">Formato de Evaluación Feria Empresarial</a></li>
                <li><a href="f_satisfaccionDelExpositor.php" target="_blank">Formato de Satisfacción Del Expositor</a></li>
              </ul>
            </li>
          </ul>



          <input id="sub-group-10" type="checkbox" hidden onclick="onhandleformularios('sub-group-10')"/>
          <label for="sub-group-10" style="background-color: #aa1a1a6c;" id="li_practica"><span class="fa fa-angle-right"></span> Práctica Empresarial</label>
          <ul class="sub-group-list">
            <li><a href="#">Formato de Inicio de Practica Empresarial</a></li>
            <li><a href="#">Formato de Concepto Docente Experto Disciplinar Práctica Empresarial</a></li>
            <li><a href="#">Formato de Entrega Final de Trabajo de Práctica Empresarial</a></li>
            <li><a href="#">Formato de Evaluación Entrega Final Practica Empresarial</a></li>

          </ul>








        </li>
      </ul>
    </li>
</nav>
      <div id="content">

         <!-- Start header -->
         <div class="header">
            <div class="aclass">
            <p onclick="volverinicio()" style="cursor:pointer;"><img src="images/ceideul_logo.png" style="width: 310px; height: 130px; margin-top:-10px;" /></p>
         </div>         
  <div class="header-right">
    <p id="txtnombre" style="padding: 12px;"></p>
    <a style="font-size:45px; cursor:pointer; color:white;" id="sidebarCollapse">≡</a>
  </div>
</div>
         <!-- End header -->
        
         <!-- End Banner -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container" style="width:100%;">
         
            <table id="myTable" class="table table-bordered table-dark" style="width=100%;">  
        <thead class="thead-dark">  
          <tr>  
          <th hidden>id</th>  
          <th>Fecha de envío</th>  
            <th data-order='desc'>Nombre del formato</th>  
            <th>Archivo</th>
            <th>enviado por</th>  
            <th>Comentario</th>  
           
            <th hidden>ruta</th>  
          </tr>  
        </thead>  
        <tbody id="mytbody">  

        <?php
   require_once "php/conexion.php";
   $conexion=conexion();
   $usuario=$_SESSION['user'];
   $sql="SELECT * from tb_comentarios 
            where correo='$usuario'";
            
            $result=mysqli_query($conexion,$sql);
           

            while($row = $result->fetch_assoc()){
               $fecha=str_replace(" ", "/", $row['fecha']);

            ?>
            <script></script>
            <tr>
            <td class="tdnombre" hidden><?php echo ($row['id']); ?></td>
            <td class="tdfecha"><?php echo ($fecha); ?></td>   
            <td class="tdnombre"><?php echo ($row['nombreformato']); ?></td>
               <td class="tdarchivo"><a target="_blank"href="<?php echo ($row['ruta'])?>">Abrir</a></td> 
                <td class="tdfecha"><?php echo ($row['nombre_comentador']); ?></td>
                <td class="tdcomentario"><a class="vercomentario" style="cursor:pointer;">Ver</a></td>
                <td class="tdcomentario2" style="white-space: pre-wrap;" hidden><textarea id="txtcomment" rows="1"><?php echo ($row['comentario']); ?></textarea></td>
                             

                
            </tr>
                
          <?php  } ?>

        
        
        </tbody>  
      </table>  


            </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
 
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box" >
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre (CEIDEUL)</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"  >
                     <div class="full footer_blog f_icon_1">
                         <p>Dirección<br><small>Carrera 70 No. 53-40<br>Bogotá, Colombia</small></p>
                     </div>
                  </div>

               <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"> 
                     <div class="full footer_blog f_icon_2">
                        <p>Teléfono<br><small>423 27 00<br>Ext. 1812</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>E-mail<br><small>ceideul@unilibre.edu.co</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Derechos de autor</p>
                         <p><small>
                           Copyright © 2020 Unilibre Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación</small>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">Universidad Libre</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->

      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/rutinas.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
                  function onhandleformularios(idformulario){

            var ids=["sub-group-2","sub-group-3","sub-group-6","sub-group-8","sub-group-10"];


            $.each(ids, function( index, value ) {

              if(value!==idformulario){
               $("#"+value).prop("checked", false);
               debugger
              }  
            
            });

           
         }
      </script>
<script>
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
document.getElementById("txtnombreperfil").value = '<?php echo $_SESSION['nombres']?>';
document.getElementById("txtapellidosperfil").value = '<?php echo $_SESSION['apellidos']?>';
document.getElementById("txtpass1").value = '<?php echo $_SESSION['clave']?>';
$(document).ready(function(){
		$('#btn_confirm').click(function(){
			if($('#txtnombreperfil').val()==""){
				alertify.alert("Debes agregar tu nombre").setHeader('<em>  </em> '); 
				return false;
			}else if($('#txtapellidosperfil').val()==""){
				alertify.alert("Debes agregar tus apellidos").setHeader('<em>  </em> '); 
				return false;
			}
		else if($('#txtpass1').val()==""){
				alertify.alert("Debes agregar una contraseña").setHeader('<em>  </em> '); 
				return false;
			}
			else if(($('#txtpass1').val()!==$('#txtpass2').val()) &&($("#lblpass2").css("visibility")!=='hidden')){
				alertify.alert("las contraseñas no coinciden").setHeader('<em>  </em> '); 
				return false;
			}
alert("hola");
			var cadena="correo_electronico=" + '<?php echo $_SESSION['user']; ?>' + 
					"&nombres=" + $('#txtnombreperfil').val()+"&apellidos="
					+ $('#txtapellidosperfil').val()+"&clave="+ $('#txtpass1').val();

console.log(cadena);
					$.ajax({
						type:"POST",
						url:"php/editarperfil.php",
						data:cadena,
						success:function(r){
							console.log(r)
							if(r==1){
						

								alertify.alert('Usuario modificado con éxito').set('onok', function(closeEvent){ window.location="index.php";
									<?php
 ?>} ).setHeader('<em>  </em> '); 
							}else{
								alertify.alert('error al modificar').setHeader('<em>  </em> '); ;
							}
						}
					});
		});	
	});


   function volverinicio(){
   var tipo='<?php echo $_SESSION['tipo_usuario']?>';
   if(tipo=="Estudiante"){
      window.location="home_Estudiante.php";
   }else if(tipo=="Egresado"){
      window.location="home_Egresado.php";
   }else if(tipo=="Docente"){
      window.location="home_Docente.php";
   }      
   else if(tipo=="Externo"){
      window.location="home_Externo.php";
   }    
}



 </script>  
 <script>
   var data;
  $(document).ready(function(){
     
    var table= $('#myTable').DataTable({

      "order": [[ 0, "desc" ]]
    });

});
$(".vercomentario").click(function() {
   var row = $(this).closest("tr"); 
   var comentario = row.find("#txtcomment").val();
   var c="<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>";

   alertify.alert(comentario).setHeader('<em>  </em> '); 
   //  var row = $(this).closest("tr");    // Find the row
   //  var correo = row.find(".tdcorreo").text(); 
   //  var fecha = row.find(".tdfecha").text();// Find the text
   //  var tipo_usuario=row.find(".tipo_usuario").text();
   //  var tdnombre=row.find(".tdnombre").text(); 
   //  var tdformulario=row.find(".tdformulario").text(); 
   //  var tdarchivo=row.find(".tdruta").text(); 
   //  location.href="agregar_comentario.php?variable="+tdformulario+"&variable2="+tdnombre+"&variable3="+tdarchivo+"&variable4="+correo;

})



$(".miboton").click(function() {
    var row = $(this).closest("tr");    // Find the row
    var correo = row.find(".tdcorreo").text(); 
    var fecha = row.find(".tdfecha").text();// Find the text
    var tipo_usuario=row.find(".tipo_usuario").text();
    var tdnombre=row.find(".tdnombre").text(); 
    var tdformulario=row.find(".tdformulario").text(); 
    var tdarchivo=row.find(".tdruta").text(); 
    location.href="agregar_comentario.php?variable="+tdformulario+"&variable2="+tdnombre+"&variable3="+tdarchivo+"&variable4="+correo;
   //  cadena="correo_electronico=" + correo + 
   //             "&fecha=" + fecha+
   //             "&tipo_usuario=" + tipo_usuario+
   //             "&nombre=" + tdnombre+
   //             "&formulario=" + tdformulario+
   //             "&archivo=" + tdarchivo;

					// $.ajax({
					// 	type:"POST",
					// 	url:"agregar_comentario.php",
					// 	data:cadena,
					// 	success:function(r){
               //          window.location="agregar_comentario.php";
					// 	}
					// });
});
 </script>
 <script>
 
 var perfil='<?php echo $_SESSION['tipo_usuario']; ?>';
if(perfil!=="Estudiante"){
   $("#li_catedraempren").remove();
   $("#li_opciongrado").remove();
   $("#li_practica").remove();
}

if(perfil!=="Docente"){
   $("#li_verRegistros").attr("hidden",true);

}


 </script> 
   </body>
</html>
