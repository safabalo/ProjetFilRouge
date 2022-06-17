<?php

class RendezVous {
    static public function getAll() {
        $stmt = DB::connect()->prepare('SELECT * FROM `rendz-vous` INNER JOIN `patients` ON `rendz-vous`.`patient` = `patients`.`id_patient`');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close(); 
        $stmt = null;
    }
    // static function getRendez($data) { 
    //     $id_rendezvous = $data["id_rendezvous"];
    //     try{
    //         $query="SELECT * FROM `rendez_vous` WHERE id_rendezvous=:id_rendezvous";
    //         $stmt = DB::connect()->prepare($query);
    //         $stmt->execute(array(":id_rendezvous"=>$id_rendezvous));
    //         $rendez=$stmt->fetch(PDO::FETCH_OBJ);
    //         return $rendez;
    //     }catch(PDOException $ex){
    //         echo 'error' .$ex->getMessage();
    //     } 
    // }
    static public function Add($data){
        $stmt = DB::connect()->prepare("INSERT INTO `rendz-vous` SET ,id_rendezvous=:id_rendezvous, rendezvous=:rendezvous , dossier_medical=:id_dossier ,patient=:id_patient , doctor=:id_doctor");
            $stmt->bindParam(":rendezvous", $data["rendezvous"]);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }

}

?>