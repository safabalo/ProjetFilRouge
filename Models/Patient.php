<?php

class Patient
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM `patients`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    static function loginPatient($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM patients WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $Patients = $stmt->fetch(PDO::FETCH_OBJ);
            return $Patients;
            if($stmt->execute()){
                return "doctor";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static function getPatient($data) { 
        $id_patient = $data["id_patient"];
        try{
            $query="SELECT * FROM `patients` WHERE id_patient = :id_patient";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_patient"=>$id_patient));
            $patients=$stmt->fetch(PDO::FETCH_OBJ);
            return $patients;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `patients` SET nomcomplet=:nomcomplet, email=:email, genre=:genre, phone=:phone, date_naissance=:date_naissance, password=:password");
        $stmt->bindParam(":nomcomplet", $data["nomcomplet"]);
        $stmt->bindParam(":email", $data["email"]);
        $stmt->bindParam(":genre", $data["genre"]);
        $stmt->bindParam(":phone", $data["phone"]);
        $stmt->bindParam(":date_naissance", $data["date_naissance"]);
        $stmt->bindParam(":password", $data["password"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
    } 
    static public function update($data){
        $stmt = DB::connect()->prepare("UPDATE `patients` SET image=:image, nomcomplet=:nomcomplet, email=:email, date_dispo=:date_dispo, seance=:seance, specialite=:specialite WHERE  id_patient=:id_patient");
            $stmt->bindParam(":image", $data["image"]);
            $stmt->bindParam(":nomcomplet", $data["nomcomplet"]);
            $stmt->bindParam(":email", $data["email"]);
            $stmt->bindParam(":genre", $data["genre"]);
            $stmt->bindParam(":phone", $data["phone"]);
            $stmt->bindParam(":date_naissance", $data["date_naissance"]);
            $stmt->bindParam(":password", $data["password"]);
            $stmt->bindParam(":id_patient", $data["id_patient"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
     static public function delete($data){
        $id_patient = $data['id_patient'];
       try{
           $query='DELETE FROM `patients` WHERE id_patient = :id_patient';
           $stmt = DB::connect()->prepare($query);
           $stmt->execute(array(':id_patient'=> $id_patient));
           if($stmt->execute()){
               return 'ok';
           }
       }catch(PDOException $ex){
           echo 'erreur' .$ex->getMessage();
       } 
   }

    // static function login($data) {
    //     $email = $data["email"];
    //         try{
    //             $query="SELECT * FROM patients WHERE email = :email";
    //             $stmt = DB::connect()->prepare($query);
    //             $stmt->execute(array(":email"=>$email));
    //             $Patients = $stmt->fetch(PDO::FETCH_OBJ);
    //             return $Patients;
    //             if($stmt->execute()){
    //                 return "oki";
    //         } 
    //         }catch(PDOException $ex){
    //             echo 'error' .$ex->getMessage();
    //         } 
        
    //  }
}

?>