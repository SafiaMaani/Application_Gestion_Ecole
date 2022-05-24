<?php
    class FormValidation{
        static public function emailValidation($email){
            $regexEmail = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
            if(preg_match($regexEmail,$email) && $email!=""){
                return true;
            }else{
                return false;
            }
        }
        static public function passwordValidation($password ){
            $regexPassword = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
            if(preg_match($regexPassword,$password) && $password !=""){
                return true;
            }else{
                return false;
            }
        }
    }
?>