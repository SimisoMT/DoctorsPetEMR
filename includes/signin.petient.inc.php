<?php
    if(isset($_POST["submit"])){
        //Grabbing the data
        $petientSigninEmail = $_POST["petientSigninEmail"];
        $petientSigninPassword = $_POST["petientSigninPassword"]; 
        echo $petientSigninEmail." | ". $petientSigninPassword."something"."something on the read.";
        //$petientSigninPassword2 = password_hash($_POST["petientSigninPassword"],PASSWORD_DEFAULT); 
        //Instantiate SigninContr class
        include "../classes/db/dbh.classes.php";
        include "../classes/petient/signin.petient.classes.php";
        include "../classes/petient/signin.petient.contr.classes.php";
        
        $signinPetientCtrlObj = new SigninPetientContr($petientSigninEmail, $petientSigninPassword); 

        //Running error handles and user Signin
        $signinPetientCtrlObj->setDbConnection();
        $signinPetientCtrlObj->checkCredentialsIfExist();
        /*
         if($signinCtrlObj->petientCheckCredentials() == true){
           //im on the dashboard  
        } */


        /*         if($SigninCtrlObj->checkUser($petientSigninPracticeNumber,$petientSigninIdNumber)){
 
        } */

        
        //$SigninCtrlObj->SigninUser();
        //Going back to front page
        //header("location: ../index.php?error=none");
    }
?>