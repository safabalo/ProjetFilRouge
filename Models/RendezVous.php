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
    static function getRendezDoc($data){
        $id_doctor = $data["id_doctor"];
        try{
            $query="SELECT * FROM `rendez_vous` WHERE id_doctor=:id_doctor";
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id_doctor"=>$id_doctor));
            $rendezDoc=$stmt->fetch(PDO::FETCH_OBJ);
            return $rendezDoc;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        } 

    }
    static public function Add($data){
       
        $stmt = DB::connect()->prepare("INSERT INTO `rendz-vous` SET rendezvous=:rendezvous , patient=:id_patient, docteur=:id_docteur");
        $new= $data["rendezvous"];
        $time= str_replace("T", " ", $new);
        $stmt->bindParam(":rendezvous", $time);
    
        $stmt->bindParam(":id_patient", $_SESSION["id_patient"],PDO::PARAM_INT);
        $stmt->bindParam(":id_docteur", $_POST["id_docteur"],PDO::PARAM_INT);

        
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
     }

}

?>