<?php

class User
{
    static function loginAdmin($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM admin WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$Email));
            $Admins = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admins;

        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static function loginDoctor($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM doctors WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$Email));
            $Doctors = $stmt->fetch(PDO::FETCH_OBJ);
            return $Doctors;
            if($stmt->execute()){
                return "doctor";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static function loginPatient($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM patients WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$Email));
            $Patients = $stmt->fetch(PDO::FETCH_OBJ);
            return $Patients;
            if($stmt->execute()){
                return "patient";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
}

// if($dataAdmin || ){
//     if($dataAdmin['role'] == admin){
//         head
//     }elseif (condition) {
//         # code...
//     }
// }

?>