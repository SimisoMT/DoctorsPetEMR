<?php

    class SignupPractitionerContr extends SignupPractitioner{
        private $practitionerSignupPracticeNumber;
        private $practitionerSignupIdNumber;
        private $practitionerSignupName;
        private $practitionerSignupSurname;
        private $practitionerSignupGender;
        private $practitionerSignupEmail;
        private $practitionerSignupPassword;
        private $practitionerSignupPasswordRetype;

        public function __construct(
            $practitionerSignupPracticeNumber,$practitionerSignupIdNumber
            ,$practitionerSignupName,$practitionerSignupSurname
            ,$practitionerSignupGender,$practitionerSignupEmail
            ,$practitionerSignupPassword,$practitionerSignupPasswordRetype
       ){
                $this->practitionerSignupPracticeNumber = $practitionerSignupPracticeNumber;
                $this->practitionerSignupIdNumber = $practitionerSignupIdNumber;
                $this->practitionerSignupName = $practitionerSignupName;
                $this->practitionerSignupSurname = $practitionerSignupSurname;
                $this->practitionerSignupGender = $practitionerSignupGender;
                $this->practitionerSignupEmail = $practitionerSignupEmail;
                $this->practitionerSignupPassword = $practitionerSignupPassword;
                $this->practitionerSignupPasswordRetype = $practitionerSignupPasswordRetype;
            }

        public function signupNewUser(){
            if($this->setNewUser($this->practitionerSignupPracticeNumber,$this->practitionerSignupIdNumber,$this->practitionerSignupName,$this->practitionerSignupSurname,$this->practitionerSignupGender)){
                if($this->setNewUserLogin($this->practitionerSignupEmail,$this->practitionerSignupPracticeNumber,$this->practitionerSignupPassword)){
                    header("location:../dashboard/index.php?note=newUserCreated");
                }
            }

/*             if(emptyInput() == false){
                //echo empty input
                header("location: ../index.php?error=emptyinput");
                exit();
            }
            if(usidTakenCheck() == false){
                //echo empty input
                header("location: ../index.php?error=useridtaken");
                exit();
            } 

            $this->setUser($this->practitionerSignupPracticeNumber,$this->practitionerSignupIdNumber,$this->practitionerSignupName,$this->practitionerSignupSurname
            ,$this->practitionerSignupGender,$this->practitionerSignupEmail,$this->practitionerSignupPassword);
      */  }

        //error handlers
        public function emptyInput(){
            $result;
            if(empty($this->practitionerSignupPracticeNumber)||empty($this->practitionerSignupIdNumber)||
            empty( $this->practitionerSignupName)||empty( $this->practitionerSignupSurname)||
            empty( $this->practitionerSignupGender)||empty( $this->practitionerSignupEmail)||
            empty( $this->practitionerSignupPassword)||empty( $this->practitionerSignupPasswordRetype)){
                $result = false;  
            }else{
                $result = true;
            }
            return $result;
        }            

        public function usidTakenCheck(){
            $result;
            if($this->checkUser($this->practitionerSignupPracticeNumber,$this->practitionerSignupIdNumber)){
                header("location:../index.php?error=userTaken");  
            }else{
                $result = false;
            }
            return $result;
        }
    }

?>