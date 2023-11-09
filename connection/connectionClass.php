<?php 

 class connectionClass{

   
        protected $connection;

        public function __construct($hostname="127.0.0.1",$dbname="test_increment", $username="root", $pass="EASYdude123#") {
         
                     try{

                     $this->connection = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $pass);
                     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                     // echo "Everithing ok";

                     }catch(PDOException $error){
                     
                            echo "There is wrong this is desc... " . $erro->getMessague();
                     }
            
        
        }

 }


// $seeing = new connectionClass;
// $seeing->__connectionClass();

?>
