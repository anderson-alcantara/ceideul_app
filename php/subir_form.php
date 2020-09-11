<?php 
session_start();

require_once "conexion.php";
$pdf=($_POST['pdf']);
$nombres=($_POST['nombres']);
$fecha=$_POST['fecha'];
$correo=($_POST['correo']);
$tipousuario=$_POST['tipousuario'];
$nombreform=($_POST['nombreform']);
$nombrearchivo=($_POST['nombrearchivo']);
$nombreform_completo=($_POST['nombreform_completo']);
$seccional=($_POST['seccional']);
$conexion=conexion();








if(isset($_FILES['file'])){
   $documento=$_SESSION['documento'];
   $archivoadicional=$_FILES['file'];
   $nombreAdicional=($_POST['filename']);
   $fileNameadicional=$documento.'_'.$fecha.'_'.$nombreAdicional;

}


if(isset($_FILES['file2'])){
   $archivoadicional2=$_FILES['file2'];
   $nombreAdicional2=($_POST['filename2']);
   $fileNameadicional2=$documento.'_'.$fecha.'_'.$nombreAdicional2;
   $rutan2="archivosextra/" .$fileNameadicional2;


}

$sql1="SELECT * from tb_formularios 
where correo='$correo' and formulario='$nombreform_completo'";
$resultado=mysqli_query($conexion,$sql1);
$retorno=0;
if(mysqli_num_rows($resultado) > 0){

   while($row = $resultado->fetch_assoc()){
      $nombreformrow = $row['formulario'];
      if($nombreformrow=="FORMATO DE EVALUACIÓN PROYECTO DE GRADO CREACIÓN DE EMPRESA"
      || $nombreformrow=="FORMATO DE EVALUACIÓN FERIA EMPRESARIAL"
      || $nombreformrow=="FORMATO DE IDEAS DE NEGOCIO"
      || $nombreformrow=="FORMATO DE CONCEPTO DOCENTE EXPERTO DISCIPLINAR PRÁCTICA EMPRESARIAL"
      || $nombreformrow=="FORMATO DE EVALUACIÓN ENTREGA FINAL PRACTICA EMPRESARIAL"
      ){

         $retorno=1;
      }else{

         $retorno=2;
         echo 2;
      }

   }
}else{
$retorno=1;
}
if($retorno==1){
   if(!empty($_POST['pdf'])){
      $fname =$nombrearchivo.".pdf"; // name the file
      $ruta="../formularios_registrados/" .$fname;
      $ruta="formularios_registrados/" .$fname;
 $sql="";

if(isset($archivoadicional)){
   $rutan="archivosextra/" .$fileNameadicional;

   if(!isset($rutan2)){
      $rutan2="";
   }
   $sql="INSERT into tb_formularios (archivo,nombre,tipo_usuario,formulario,fecha,correo,seccional,archivo_adicional,archivo_adicional2)
   values ('$ruta','$nombres','$tipousuario','$nombreform_completo','$fecha','$correo','$seccional','$rutan','$rutan2')";
}else{
   $sql="INSERT into tb_formularios (archivo,nombre,tipo_usuario,formulario,fecha,correo,seccional)
   values ('$ruta','$nombres','$tipousuario','$nombreform_completo','$fecha','$correo','$seccional')";
}


   echo $result=mysqli_query($conexion,$sql);
   $file = fopen("../formularios_registrados/" .$fname, 'w'); 
   fwrite($file,utf8_decode($pdf)); //save data
   fclose($file);





     }

     if(!empty($_FILES['file'])){
      $rutan="../archivosextra/".$fileNameadicional;
      move_uploaded_file( $_FILES['file']['tmp_name'], $rutan);

      
   }

   if(!empty($_FILES['file2'])){
      $rutanu2="../archivosextra/".$fileNameadicional2;
      move_uploaded_file( $_FILES['file2']['tmp_name'], $rutanu2);

      
   }

}




 ?>