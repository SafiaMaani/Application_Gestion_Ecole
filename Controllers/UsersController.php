<?php

class UsersController{
    public function getAllUsers(){
        $users = Users::getAll();
        return $users;
    }

    public function checkUser($email,$mot){
        $inputEmail = FormValidation::emailValidation($email);
        $inputPassword = FormValidation::passwordValidation($mot);
        if($inputEmail == true && $inputPassword == true){
            $Log = Users::getOne($email,$mot);
            if(is_array($Log)){
                $_SESSION['user']=$Log;
                header('location:dashboard');
            }else{
                $message =  "Mot de passe ou email incorect";
                return $message;
            }
        }
    }
}

?>