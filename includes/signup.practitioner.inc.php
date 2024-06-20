<?php
    if(isset($_POST["submit"])){
        //Grabbing the data

        $practitionerSignupPracticeNumber = $_POST["practitionerSignupPracticeNumber"];
        $practitionerSignupIdNumber = $_POST["practitionerSignupIdNumber"];
        $practitionerSignupName = $_POST["practitionerSignupName"];
        $practitionerSignupSurname = $_POST["practitionerSignupSurname"];
        $practitionerSignupGender = $_POST["practitionerSignupGender"];
        $practitionerSignupEmail = $_POST["practitionerSignupEmail"];
        $practitionerSignupPassword = password_hash($_POST["practitionerSignupPassword"],PASSWORD_DEFAULT); 
        $practitionerSignupPasswordRetype = password_hash($_POST["practitionerSignupPasswordRetype"],PASSWORD_DEFAULT); 

        //Instantiate SignupContr class
        include "../classes/db/dbh.classes.php";
        include "../classes/practitioner/signup.practitioner.classes.php";
        include "../classes/practitioner/signup.practitioner.contr.classes.php";
        
        $signupPractitionerContrObj = new SignupPractitionerContr(
            $practitionerSignupPracticeNumber,$practitionerSignupIdNumber
            ,$practitionerSignupName,$practitionerSignupSurname
            ,$practitionerSignupGender,$practitionerSignupEmail
            ,$practitionerSignupPassword,$practitionerSignupPasswordRetype
        );

        //Running error handles and user signup
        $signupPractitionerContrObj->setDbConnection();
        if($signupPractitionerContrObj-> usidTakenCheck() == false){
            $signupPractitionerContrObj->signupNewUser();
        }
        

        /*         if($signupPractitionerContrObj->checkUser($practitionerSignupPracticeNumber,$practitionerSignupIdNumber)){
 
        } */

        
        //$signupPractitionerContrObj->signupUser();
        //Going back to front page
        //header("location: ../index.php?error=none");
    }
?>