<?php

   class SignupPractitioner extends Dbh{
    public $dbConnection;
    public function setDbConnection(){
        $this->dbConnection = $this->db();
    }
    public function checkUser($practitionerSigninPracticeNumber,$practitionerSigninIdNumber){
        $stmt = $this->dbConnection->prepare("SELECT practice_number FROM practitioner WHERE practice_number = ? AND id_number = ?;");
        if (!$stmt->execute(array($practitionerSigninPracticeNumber,$practitionerSigninIdNumber))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if($stmt->rowCount()>0){ 
            $resultCheck = true;
        }else{
            $resultCheck = false;
        }
        return $resultCheck;        
}

    public function setNewUser($practitionerSigninPracticeNumber,$practitionerSigninIdNumber,$practitionerSigninName,$practitionerSigninSurname,$practitionerSigninGender){
       
        $stmt =  $this->dbConnection->prepare('INSERT INTO practitioner (practice_number,id_number,user_name,surname,gender) VALUE (?,?,?,?,?);');

        if(!$stmt->execute(array($practitionerSigninPracticeNumber,$practitionerSigninIdNumber,$practitionerSigninName,$practitionerSigninSurname,$practitionerSigninGender))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }else{
            $stmt = null;  
           return true;
        }
    } 

    public function setNewUserLogin($practitionerSigninEmail,$practitionerSigninPracticeNumber,$practitionerSigninPassword){

        $stmt =  $this->dbConnection->prepare('INSERT INTO practitioner_login(login_email, practice_number, login_hash) VALUE (?,?,?);');  

        if(!$stmt->execute(array($practitionerSigninEmail,$practitionerSigninPracticeNumber,$practitionerSigninPassword))) {
            $stmt = null;
            header("location:../index.php?error=stmtfailed");
            exit();
        }else{
            $stmt = null;  
            return true;
        }  
    } 

    }
   
?>