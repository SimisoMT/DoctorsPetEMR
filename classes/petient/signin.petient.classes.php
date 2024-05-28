<?php

   class SigninPetient extends Dbh{
    public $dbConnection;
    public function setDbConnection(){
        $this->dbConnection = $this->db();
    }

   public function checkCredentials($petientSigninEmail,$petientSigninPassword){
       
        //for petients
        $stmt = $this->dbConnection->prepare("SELECT login_hash FROM petient_login WHERE login_email = ?;");
        if (!$stmt->execute(array($petientSigninEmail))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
            $resultCheck;
            if($stmt->rowCount()>0){
                $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if(password_verify($petientSigninPassword, $pwdHashed[0]["login_hash"])){
                    $resultCheck = true;
                }
            }else{
                $resultCheck = false;
            }
            return $resultCheck;  
        }


    }
   
?>