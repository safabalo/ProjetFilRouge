<?php


class Doctors{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `doctors`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    static function loginDoctor($data) { 
        $email = $data["email"];
        try{
            $query="SELECT * FROM doctors WHERE email = :email";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":email"=>$email));
            $Doctors = $stmt->fetch(PDO::FETCH_OBJ);
            return $Doctors;
            if($stmt->execute()){
                return "doctor";
        } 
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static public function searchDoctor($data){
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM doctors WHERE specialite LIKE ?';
            $stmt =  DB::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%'));
            $doctors = $stmt->fetchAll();
            return $doctors;
        } catch (PDOException $ex){
            echo "erreur" . $ex->getMessage();
        }
    }

    static function getDoctors($data) { 
        $id = $data["id_doctor"];
        try{
            $query="SELECT * FROM `doctors` WHERE id_doctor = :id_doctor";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_doctor"=>$id));
            $doctors=$stmt->fetch(PDO::FETCH_OBJ);
            return $doctors;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `doctors` SET image=:image, nom =:nom, email=:email, password=:password, seance=:seance,specialite=:specialite");
            $stmt->bindParam(':image', $data['image']);
            $stmt->bindParam(":nom", $data["nom"]);
			$stmt->bindParam(":email", $data["email"]);
			$stmt->bindParam(":password", $data["password"]);
			$stmt->bindParam(":seance", $data["seance"]);
			$stmt->bindParam(":specialite", $data["specialite"]);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
     static public function update($data){
        $stmt = DB::connect()->prepare("UPDATE `doctors` SET image=:image, nom=:nom, email=:email,seance=:seance, specialite=:specialite WHERE  id_doctor=:id_doctor");
            $stmt->bindParam(":image", $data["image"]);
            $stmt->bindParam(":nom", $data["nom"]);
			$stmt->bindParam(":email", $data["email"]);
			$stmt->bindParam(":seance", $data["seance"]);
			$stmt->bindParam(":specialite", $data["specialite"]);
            $stmt->bindParam(":id_doctor", $data["id_doctor"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
    static public function delete($data){
         $id = $data['id_doctor'];
        try{
            $query='DELETE FROM `doctors` WHERE id_doctor = :id_doctor';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id_doctor'=> $id));
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        } 
    }

    // static public function CountAll(){
    //     $stmt = DB::connect()->prepare('SELECT count(*) FROM professeurs');
    //     $stmt->execute();
    //     return $stmt->fetch();
    // }
    // static public function CountFemme(){
    //     $stmt = DB::connect()->prepare("SELECT count(*) FROM professeurs WHERE Genre='Femme'");
    //     $stmt->execute();
    //     return $stmt->fetch();
    //   }
    //   static public function CountHomme(){
    //     $stmt = DB::connect()->prepare("SELECT count(*) FROM professeurs WHERE Genre='Homme'");
    //     $stmt->execute();
    //     return $stmt->fetch();
    //   }
}