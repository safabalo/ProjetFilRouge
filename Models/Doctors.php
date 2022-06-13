<?php


class Doctors{

    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM `doctors`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }

    // static public function searchProfesseur($data){
    //     $search = $data['search'];
    //     try {
    //         $query = 'SELECT * FROM professeurs WHERE Nom LIKE ?';
    //         $stmt =  DB::connect()->prepare($query);
    //         $stmt->execute(array('%'.$search.'%'));
    //         $professeur = $stmt->fetchAll();
    //         return $professeur;
    //     } catch (PDOException $ex){
    //         echo "erreur" . $ex->getMessage();
    //     }
    // }

    static function getDoctor($data) { 
        $id = $data["id"];
        try{
            $query="SELECT * FROM `doctors` WHERE id = :id";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $doctors=$stmt->fetch(PDO::FETCH_OBJ);
            return $doctors;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 
    }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `doctors` SET nom =:nom, email=:email, date_dispo=:date_dispo, seance=:seance,specialite=:specialite");
            $stmt->bindParam(":nom", $data["nom"]);
			$stmt->bindParam(":email", $data["email"]);
			$stmt->bindParam(":date_dispo", $data["date_dispo"]);
			$stmt->bindParam(":seance", $data["seance"]);
			$stmt->bindParam(":specialite", $data["specialite"]);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
     static public function update($data){
        $stmt = DB::connect()->prepare("UPDATE `doctors` SET nom=:nom, email=:email,date_dispo=:date_dispo,seance=:seance, specialite=:specialite WHERE  id=:id");
            $stmt->bindParam(":nom", $data["nom"]);
			$stmt->bindParam(":email", $data["email"]);
			$stmt->bindParam(":date_dispo", $data["date_dispo"]);
			$stmt->bindParam(":seance", $data["seance"]);
			$stmt->bindParam(":specialite", $data["specialite"]);
            $stmt->bindParam(":id", $data["id"]);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }
    static public function delete($data){
         $id = $data['id'];
        try{
            $query='DELETE FROM `doctors` WHERE id = :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(':id'=> $id));
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