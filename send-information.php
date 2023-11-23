<?php 

include 'connection/crudClass.php';

if($_POST['actividad']){

   $nactividad = $_POST['actividad'];
   $fecha = $_POST['fecha'];
   
   echo $fecha;

}

?>