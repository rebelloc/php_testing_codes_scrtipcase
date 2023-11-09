<?php 

 include "connectionClass.php";

 class crudClass extends connectionClass {

  
    public function __construct(){

          parent::__construct();

    }

    public function selectFunction(){
        // $sql = "INSERT INTO trasladopartida
        // (id, 
        // numeroActividad, 
        // fecha, 
        // nombreDirector, 
        // unidadAdministrativa, 
        // tipoSolicitud, 
        // objetivo, 
        // programa, 
        // proyecto, 
        // justificacion, 
        // LineaAccion, 
        // actividadElimina, 
        // actividadRegistra, 
        // observacion, 
        // aprobadoDirector, 
        // aprobadoProyecto, 
        // aprobadoPresupuesto, 
        // aprobadoJefePlanif, 
        // anio
        // ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,? 
        // )";
        $bluePrintVariable;
        try{
            $sql = "SELECT *FROM trasladoPartida";
            $bluePrintVariable = $this->connection->prepare($sql);
            $statement = $bluePrintVariable->execute();
            return $statement;
        }catch(PDOException $error){
              echo "This is the error: " . $error;
        }
       
        // return $statement;
        
    }


 }

 $printResponse = new crudClass();
 $arryaPrint = $printResponse->selectFunction();
 $ar = array($arryaPrint);
 foreach ($ar as $arPin){

        $code = $arPin['id'];
        $colegio = $arPin['numeroActividad'];
        // $estudiante = $res['estudiante'];
        // $mail = $res['correo'];
        // $name = $res['nombre'];
        // $lastname = $res['apellido'];
        // $aboutme = $res['acerca_de_mi'];
        // $imgup = $res['img'];
    
 }


?>