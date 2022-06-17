<?php

class RendezVous {
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM `rendez_vous` WHERE rendezvous=:rendezvous');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `rendez_vous` SET , rendezvous=:rendezvous , dossier_medical=:id_dossier ,patient=:id_patient , doctor=:id_doctor");
            $stmt->bindParam(":rendezvous", $data["rendezvous"]);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }

}

?>