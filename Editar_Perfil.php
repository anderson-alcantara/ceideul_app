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
      <link rel="stylesheet" href="css/custom.css"/>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

<script src="js/jquery-3.2.1.min.js"></script>
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
                <li>
                </li>
              </ul>
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
        
         <!-- End Banner -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container" style="width:100%; margin-top:200px;">
            <form class="w3-container w3-card-4 w3-light-grey">
            <h2>Editar Perfil</h2>
  <p><label>Nombres</label>
  <input class="w3-input w3-border" name="first" id="txtnombreperfil" type="text"></p>

  <p><label>Apellidos</label>
  <input class="w3-input w3-border" name="last" id="txtapellidosperfil" type="text"></p>

  <p><label>Contraseña</label>
  <input class="w3-input w3-border" name="last" id="txtpass1" type="password"></p>

  <p><label>Repetir Contraseña</label>
  <input class="w3-input w3-border" name="last" id="txtpass2" type="password"></p>
  <button class="w3-btn w3-red" type="button" id="btn_confirm">Guardar Cambios</button></p>
</form>
            </div>
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
         else if($('#txtpass1').val().length< 8){
				alertify.alert("La contraseña debe tener mínimo 8 caracteres").setHeader('<em>  </em> '); 
				return false;
         }
			else if(($('#txtpass1').val()!==$('#txtpass2').val()) &&($("#lblpass2").css("visibility")!=='hidden')){
				alertify.alert("las contraseñas no coinciden").setHeader('<em>  </em> '); 
				return false;
			}

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
   </body>
</html>
