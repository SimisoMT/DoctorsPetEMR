<?php

    class SigninPetientContr extends SigninPetient{
        private $petientSigninEmail;
        private $petientSigninPassword;

        public function __construct($petientSigninEmail,$petientSigninPassword){
                $this->petientSigninEmail = $petientSigninEmail;
                $this->petientSigninPassword = $petientSigninPassword;
            }

        //error handlers          

        public function checkCredentialsIfExist(){
            $result;      
            if($this->checkCredentials($this->petientSigninEmail,$this->petientSigninPassword)){
                header("location:../dashboard/index.php?note=accessGrantedToDashboardPetient"); 
            }else{
                $result = false;
                header("location:../index.php?note=accessNotGrantedToDashboardPetient"); 
            }
            return $result;
        }
    }

?>