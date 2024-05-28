<?php
    if(isset($_POST["submit"])){
        //Grabbing the data

        $petientSignupPracticeNumber = $_POST["petientSignupPracticeNumber"];
        $petientSignupIdNumber = $_POST["petientSignupIdNumber"];
        $petientSignupName = $_POST["petientSignupName"];
        $petientSignupSurname = $_POST["petientSignupSurname"];
        $petientSignupGender = $_POST["petientSignupGender"];
        $petientSignupEmail = $_POST["petientSignupEmail"];
        $petientSignupPassword = password_hash($_POST["petientSignupPassword"],PASSWORD_DEFAULT); 
        $petientSignupPasswordRetype = password_hash($_POST["petientSignupPasswordRetype"],PASSWORD_DEFAULT); 

        //Instantiate SignupContr class
        include "../classes/db/dbh.classes.php";
        include "../classes/petient/signup.petient.classes.php";
        include "../classes/petient/signup.petient.contr.classes.php";
        
        $signupPetientContrObj = new SignuppetientContr(
            $petientSignupPracticeNumber,$petientSignupIdNumber
            ,$petientSignupName,$petientSignupSurname
            ,$petientSignupGender,$petientSignupEmail
            ,$petientSignupPassword,$petientSignupPasswordRetype
        );

        //Running error handles and user signup
        $signupPetientContrObj->setDbConnection();
        if($signupPetientContrObj-> usidTakenCheck() == false){
            $signupPetientContrObj->signupNewUser();
        }
        

        /*         if($signuppetientContrObj->checkUser($petientSignupPracticeNumber,$petientSignupIdNumber)){
 
        } */

        
        //$signuppetientContrObj->signupUser();
        //Going back to front page
        //header("location: ../index.php?error=none");
    }
?>