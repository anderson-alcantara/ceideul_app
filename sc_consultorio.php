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
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style copy.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
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
          <!-- <li>
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
            </ul>
          </li>

      </nav>
      <div id="content">


         <iframe src="forms/form_inicio.html" id="frameforms" width="100%" height="100%" hidden></iframe>
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
         <!-- Start Banner -->
         
         <!-- End Banner -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>What We Do</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_1.png" alt="#" />
                            <img class="default-none" src="images/icon_1w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Link Building</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_2.png" alt="#" />
                            <img class="default-none" src="images/icon_2w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Monthly SEO Task</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_3.png" alt="#" />
                            <img class="default-none" src="images/icon_3w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>On Page SEO</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="images/icon_4.png" alt="#" />
                            <img class="default-none" src="images/icon_4w.png" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Online marketing</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        
                        </div>

                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     
                  </div>
               </div>

               
            </div>
         </div>
      
         <!-- OTRA SECCION-->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row" style="margin-bottom: -150px;">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        
                     
                     
                      </div>
                  </div>
               </div>

               
           
         </div>
      </div>
         <!-- end section -->
         
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2>Area de consultoria de servicios</h2>
                        </div>
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2 style="font-size:30px;">consultorio Economico-Empresarial</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">1)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Asesorías y consultorías directas a empresarios y colaboradores, especialmente en gestión y administración, económica­financiera,derecho comercial, tributario y civil, seguridad social,
procesos productivos y tecnológicos,contabilidad, contro y auditoria, gestión del conocimiento, programas de capacitación.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
        <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">2)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Asesorías y consultorías institucionales a  nivel  regional, nacional e internacional como fuente de financiamiento y como fuente de generación de ingresos para los asesores y consultores.</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">3)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Orientación y asesoría virtual a empresarios en temas como gestión,derecho,contabilidad, costos,tributaria, liquidación de nominas,seguridad social,
prestaciones  sociales
</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">4)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Asesoría y consultoría domiciliada a empresas en diagnóstico empresarial,gestión administrativa y económico­ financiero.

</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
          <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">5)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Soporte a empresas con Talento Humano en formación profesional y como espacio de Práctica Empresarial

</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">6)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Eventos de formación y capacitación  para  empresarios inscritos y participantes en el CEIDEUL.

</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
          <!-- section -->
        <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <h2 style="text-align: left;">7)</h2>
                         <p style="text-align: justify;
                         text-justify: inter-word;">Socialización entre empresarios de resultados de procesos de asesoría, consultoría e
investigación.

</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <!-- <div class="section dark_blue_layout white_fonts layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="full">
                        <div class="heading_main text_align_left" style="margin-bottom: 0;">
                           <h2><strong class="small">Get your  free quote</strong><br>Today</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="full">
                         <div class="form_section">
                            <form class="news_submit_form">
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter url" name="#" required />
                                    <button>Submit</button>
                                 </div>
                              </fieldset>
                            </form>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color">We’ve done lot’s of work, Let’s</strong><br>Check some from here</h2>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog1.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog2.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog3.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="images/blog4.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="images/search_icon.png" alt="#" />
                      </div>
                   </div>
                </div>

              </div>
            </div>
         </div> -->
         <!-- end section -->
         <!-- section -->
         <!-- <div class="section about_section layout_padding padding_top_0">
            <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2>Get in touch</h2>
                        </div>
                     </div>
                  </div>
               </div>
         </div> -->
         <!-- section -->
         <!-- <div class="section contact_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 theme_color_bg fc3726 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12 col-md-10 offset-lg-1">
                              <div class="full contact_form">
                                 <form class="contact_form_inner" action="#">
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" name="name" placeholder="Your name" />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Email" />
                                       </div>
                                       <div class="field">
                                          <input type="text" name="phone_no" placeholder="Phone number" />
                                       </div>
                                       <div class="field">
                                          <textarea placeholder="Message"></textarea>
                                       </div>
                                       <div class="field center">
                                          <button class="margin-top_30">SEND</button>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="full map_section">
                                 <div id="map">
                                    <div id="googleMap" style="width:100%;height:440px;"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
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
function volverinicio(){
   var tipo='<?php echo $_SESSION['tipo_usuario']?>';
   if(tipo=="Estudiante"){
      window.location="home_Estudiante.php";
   }else if(tipo=="Egresado"){
      window.location="home_Egresado.php";
   }else if(tipo=="Docente"){
      window.location="home_Docente.php";
   }else if(tipo=="Externo"){
      window.location="home_Externo.php";
}
}
 </script>  
   </body>
</html>
