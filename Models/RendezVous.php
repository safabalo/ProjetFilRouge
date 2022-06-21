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
       
        $stmt = DB::connect()->prepare("INSERT INTO `rendz-vous` SET rendezvous=:rendezvous , patient=:patient, docteur=:docteur, dossier_medical=:dossier_medical");
        $stmt->bindParam(":rendezvous", $data["rendezvous"]);
        $stmt->bindParam(":patient", 2);
        $stmt->bindParam(":docteur", 1);
        $stmt->bindParam(":dossier_medical", 1);

        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }

}

?>