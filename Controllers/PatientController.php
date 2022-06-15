<?php
    include('Models/Patient.php');

class PatientController{
    public function getAllPatients(){
            
        $patients = Patient::getAll();
        return $patients; 
    }

    // public function findProfesseur(){
    //     if(isset($_POST['search'])){
    //         $data = array('search' => $_POST['search']);
    //     }
    //     $professeurs = Professeurs::searchProfesseur($data);
    //     return $professeurs;
    // }

    public function getOnePatient(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id'] 
            );
        }
        $patients = Patient::getPatients($data);
        return $patients;
       
    }
    public function AddPatient(){
         if(isset($_POST["submit"])){
             $data = array( 
                "image"=>$_FILES['image']['name'] ,
                 "nom" => $_POST["nom"],
                 "email" => $_POST["email"],
                 "date_dispo" => $_POST["date_dispo"],
                 "seance" => $_POST["seance"],
                 "specialite" => $_POST["specialite"]
             );
             $result = Patient::Add($data);
             move_uploaded_file($_FILES['image']['tmp_name'], 'Public/Assets/upload/'.$_FILES['image']['name']);
              if($result == "ok"){
                //  Session::set('success', 'professeur ajouté');
                header('location: adminDoc');
             }else{
                 echo $result;
             }
         }
    }
    public function UpdatePatient(){
        if(isset($_POST["submit"])){
            $data = array(
                "id"=>$_POST['id'],
                "image"=>$_POST['image'],
                "nom"=>$_POST["nom"],
                 "email"=>$_POST["email"],
                 "date_dispo"=>$_POST["date_dispo"],
                 "seance"=>$_POST["seance"],
                 "specialite"=>$_POST["specialite"]
            );
            $result =  Patient::update($data);
            if($result == "ok"){
                // Session::set('success', 'professeur modifié');
                header('location: adminDoc');
            }else{
                echo $result;
            }
        }
   }
    public function DeleteDoctor(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Patient::delete($data);
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
