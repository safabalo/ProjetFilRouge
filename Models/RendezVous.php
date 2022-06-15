<?php

class RendezVous {
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM `rendez_vous` WHERE rendezvous= rendezvous');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `rendez_vous` SET nom =:nom, email=:email, date_dispo=:date_dispo, seance=:seance,specialite=:specialite");
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

}

?>