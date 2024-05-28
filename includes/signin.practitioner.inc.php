<?php
    if(isset($_POST["submit"])){
        //Grabbing the data
        $practitionerSigninEmail = $_POST["practitionerSigninEmail"];
        $practitionerSigninPassword = $_POST["practitionerSigninPassword"]; 
        //$practitionerSigninPassword2 = password_hash($_POST["practitionerSigninPassword"],PASSWORD_DEFAULT); 
        //Instantiate SigninContr class
        include "../classes/db/dbh.classes.php";
        include "../classes/signin.practitioner.classes.php";
        include "../classes/signin.practitioner.contr.classes.php";
        
        $signinPractitionerCtrlObj = new SigninPractitionerContr($practitionerSigninEmail, $practitionerSigninPassword); 

        //Running error handles and user Signin
        $signinPractitionerCtrlObj->setDbConnection();
        $signinPractitionerCtrlObj->checkCredentialsIfExist();
        /*
         if($signinCtrlObj->practitionerCheckCredentials() == true){
           //im on the dashboard  
        } */


        /*         if($SigninCtrlObj->checkUser($practitionerSigninPracticeNumber,$practitionerSigninIdNumber)){
 
        } */

        
        //$SigninCtrlObj->SigninUser();
        //Going back to front page
        //header("location: ../index.php?error=none");
    }
?>