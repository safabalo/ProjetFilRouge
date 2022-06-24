<?php
    require_once('Models/RendezVous.php');
    require_once('app/classes/Redirect.php');
    require_once('app/classes/Session.php');

class RendezVousController{
    public function getAllRendezVous(){
            
        $rendez = RendezVous::getAll();
        return $rendez; 
    }
    public function getRendezVousDoc(){
        if(isset($_SESSION['id_doctor'])){
            $data = array(
                'id_doctor' => $_SESSION['id_doctor'] 
            );
        }
        $rendez = RendezVous::getRendezDoc($data);
        return $rendez;
    }
    public function getRendezVousPat(){
        if(isset($_SESSION['id_patient'])){
            $data = array(
                'id_patient' => $_SESSION['id_patient'] 
            );
        }
        $rendez = RendezVous::getRendezPat($data);
        return $rendez;
    }
    public function AddRendezVous(){
         if(isset($_POST["submit"])){
             $data = array( 
                "rendezvous" => $_POST["rendezvous"],
                 
             );
            //  print_r($data);
             $result = RendezVous::Add($data);
              if($result == "ok"){
                Session::set('success', 'Rendez-vous ajouté');
                Redirect::to('patientDoc');
             }else{
                 echo $result;
             }
         }
    }
}