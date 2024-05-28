<?php
    class Dbh{     
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "id22143518_doctorspet";
        
        protected function db(){
            try {
                    $dbh = new PDO("mysql:host=$this->servername;dbname=$this->database",$this->username, $this->password);
                    // set the PDO error mode to exception

                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $dbh;
                    
            } catch(PDOException $e) {    
                    //echo "dbh failed: " . $e->getMessage();
                    //"Ëerror!: ".$e->getMessage()."<br/>";
                    header("location: ../index.php?error=dbnotconnected");
                    die();
            }
        } 

    }
?>