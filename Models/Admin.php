<?php

class Admin{
    static function login($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM admin WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$Email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;
            if($stmt->execute()){
                return "oki";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }

  }
?>