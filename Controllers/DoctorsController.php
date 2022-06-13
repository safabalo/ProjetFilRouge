<?php
    include('Models/Doctors.php');

class DoctorsController{
    public function getAllDoctors(){
            
        $doctors = Doctors::getAll();
        return $doctors; 
    }

    // public function findProfesseur(){
    //     if(isset($_POST['search'])){
    //         $data = array('search' => $_POST['search']);
    //     }
    //     $professeurs = Professeurs::searchProfesseur($data);
    //     return $professeurs;
    // }

    public function getOneDoctor(){
        if(isset($_POST['id'])){
            $data = array('id' => $_POST['id'] );
        }
        $doctors= Doctors:: getDoctors($data);
        return $doctors;
       
    }
    public function AddDoctor(){
         if(isset($_POST["submit"])){
             $data = array( 
                 "nom" => $_POST["nom"],
                 "email" => $_POST["email"],
                 "date_dispo" => $_POST["date_dispo"],
                 "seance" => $_POST["seance"],
                 "specialite" => $_POST["specialite"]
             );
             $result = Doctors::Add($data);
            //  if($result == "ok"){
            //     //  Session::set('success', 'professeur ajouté');
            //     header('location: adminDoc');
            //  }else{
            //      echo $result;
            //  }
         }
    }
    public function UpdateDoctor(){
        if(isset($_POST["submit"])){
            $data = array(
                "id"=>$_POST['id'],
                "nom"=>$_POST["nom"],
                 "email"=>$_POST["email"],
                 "date_dispo"=>$_POST["date_dispo"],
                 "seance"=>$_POST["seance"],
                 "specialite"=>$_POST["specialite"]
                 
            );
            $result =  Doctors::update($data);
            if($result == "ok"){
                // Session::set('success', 'professeur modifié');
                // header('location: adminDoc');
            }else{
                echo $result;
            }
        }
   }
    public function DeleteDoctor(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Doctors:: delete($data);
        if($result === "ok"){
            // Session::set('success', 'professeur supprimé');
            header("location: adminDoc");
        }else{
            echo $result;
        }
    }

  }

    // public function CountAllProfs(){  
    //     $prof = professeurs::CountAll();
    //     return $prof; 
    // }
  
    // public function ProfFemme(){  
    //     $prof = professeurs::CountFemme();
    //     return $prof; 
    // }
        
    // public function ProfHomme(){  
    //     $prof = professeurs::CountHomme();
    //     return $prof; 
    // }
}