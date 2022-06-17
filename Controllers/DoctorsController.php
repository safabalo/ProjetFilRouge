<?php
    include('Models/Doctors.php');

class DoctorsController{
    public function getAllDoctors(){
            
        $doctors = Doctors::getAll();
        return $doctors; 
    }

    public function findDoctor(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $doctors = Doctors::searchDoctor($data);
        return $doctors;
    }

    public function getOneDoctor(){
        if(isset($_POST['id_doctor'])){
            $data = array(
                'id_doctor' => $_POST['id_doctor'] 
            );
        }
        $doctors = Doctors::getDoctors($data);
        return $doctors;
       
    }

    public function AddDoctor(){
         if(isset($_POST["submit"])){
             $data = array( 
                "image"=>$_FILES['image']['name'] ,
                 "nom" => $_POST["nom"],
                 "email" => $_POST["email"],
                 "date_dispo" => $_POST["date_dispo"],
                 "seance" => $_POST["seance"],
                 "specialite" => $_POST["specialite"]
             );
             $result = Doctors::Add($data);
             move_uploaded_file($_FILES['image']['tmp_name'], 'Public/Assets/upload/'.$_FILES['image']['name']);
              if($result == "ok"){
                //  Session::set('success', 'professeur ajouté');
                header('location: adminDoc');
             }else{
                 echo $result;
             }
         }
    }
    public function UpdateDoctor(){
        if(isset($_POST["submit"])){
            $data = array(
                "id_doctor"=>$_POST['id_doctor'],
                "image"=>$_POST['image'],
                "nom"=>$_POST["nom"],
                 "email"=>$_POST["email"],
                 "date_dispo"=>$_POST["date_dispo"],
                 "seance"=>$_POST["seance"],
                 "specialite"=>$_POST["specialite"]
            );
            $result =  Doctors::update($data);
            if($result == "ok"){
                // Session::set('success', 'professeur modifié');
                header('location: adminDoc');
            }else{
                echo $result;
            }
        }
   }
    public function DeleteDoctor(){
        if(isset($_POST['id_doctor'])){
            $data['id_doctor'] = $_POST['id_doctor'];
            $result = Doctors::delete($data);
        if($result === "ok"){
            // Session::set('success', 'professeur supprimé');
            header("location:adminDoc");
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
