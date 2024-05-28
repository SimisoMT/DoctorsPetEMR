<?php

    class SigninPractitionerContr extends SigninPractitioner{
        private $practitionerSigninEmail;
        private $practitionerSigninPassword;

        public function __construct($practitionerSigninEmail,$practitionerSigninPassword){
                $this->practitionerSigninEmail = $practitionerSigninEmail;
                $this->practitionerSigninPassword = $practitionerSigninPassword;
            }

        //error handlers          

        public function checkCredentialsIfExist(){
            $result;      
            if($this->checkCredentials($this->practitionerSigninEmail,$this->practitionerSigninPassword)){
                header("location:../dashboard/index.php?note=accessGrantedToDashboard"); 
            }else{
                $result = false;
                header("location:../index.php?note=accessNotGrantedToDashboard"); 
            }
            return $result;
        }
    }

?>