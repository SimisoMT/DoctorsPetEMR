<?php

   class SigninPractitioner extends Dbh{
    public $dbConnection;
    public function setDbConnection(){
        $this->dbConnection = $this->db();
    }

   public function checkCredentials($practitionerSigninEmail,$practitionerSigninPassword){
       
        //for practitioners
        $stmt = $this->dbConnection->prepare("SELECT hash_key FROM practitioner_login WHERE login_email = ?;");
        if (!$stmt->execute(array($practitionerSigninEmail))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }
            $resultCheck;
            if($stmt->rowCount()>0){
                $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if(password_verify($practitionerSigninPassword, $pwdHashed[0]["hash_key"])){
                    $resultCheck = true;
                }
            }else{
                $resultCheck = false;
            }
            return $resultCheck;  
        }


    }
   
?>