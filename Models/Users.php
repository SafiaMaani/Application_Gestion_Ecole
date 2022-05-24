<?php

class Users{
    static public function getAll(){
        $stmt = DB::connexion()->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt ->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getOne($email,$mot){
        $stmt = DB::connexion()->prepare("SELECT * FROM users WHERE Email = '$email' AND mot_de_pass = '$mot'");
        $stmt->execute();
        $user = $stmt ->fetch(PDO::FETCH_ASSOC);
        return $user;
        // $stmt->close();
        $stmt = null;
    }
}


?>