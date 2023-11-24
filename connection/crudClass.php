<?php 

 include "connectionClass.php";

 class crudClass extends connectionClass {

  
    public function __construct(){

          parent::__construct();

    }

    public function insertRecord(){


        $sql = "INSERT INTO trasladopartida
        (id, 
        numeroActividad, 
        fecha, 
        nombreDirector, 
        unidadAdministrativa, 
        tipoSolicitud, 
        objetivo, 
        programa, 
        proyecto, 
        justificacion, 
        LineaAccion, 
        actividadElimina, 
        actividadRegistra, 
        observacion, 
        aprobadoDirector, 
        aprobadoProyecto, 
        aprobadoPresupuesto, 
        aprobadoJefePlanif, 
        anio
        ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,? 
        )";

        $smt = $this->connection->prepare($sql);
        
 
    }

    public function selectFunction(){
 
        try{
            $sql = "SELECT *FROM trasladoPartida";
            //in this line we save the query to execute
            $stm = $this->connection->prepare($sql);
            //In this line we execute to query previwe saved
            $stm->execute();
            //Once time execute let's to get the array and then save in a variable
            $statement=$stm->fetchAll();
            //In this line we return the values to then used in somewhere
            return $statement;
        }catch(PDOException $error){
              echo "This is the error: " . $error;
        }
           
    }


 }


?>