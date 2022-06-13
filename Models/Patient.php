<?php

class Patient
{
    static function signUp($data){
        $stmt = DB::connect()->prepare("INSERT INTO patients SET nom=:nom, email=:email, télé=:télé, genre=:genre, date_naissance=:date_naissance, password=:password");
        $stmt->bindParam(":nom", $data["nom"]);
        $stmt->bindParam(":email", $data["email"]);
        $stmt->bindParam(":télé", $data["télé"]);
        $stmt->bindParam(":genre", $data["genre"]);
        $stmt->bindParam(":date_naissance", $data["date_naissance"]);
        $stmt->bindParam(":password", $data["password"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    } 
    static function login($data) {
        $email = $data["email"];
            try{
                $query="SELECT * FROM patients WHERE email = :email";
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":email"=>$email));
                $Patients = $stmt->fetch(PDO::FETCH_OBJ);
                return $Patients;
                if($stmt->execute()){
                    return "oki";
            } 
            }catch(PDOException $ex){
                echo 'error' .$ex->getMessage();
            } 
        
     }
}

?>