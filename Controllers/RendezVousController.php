<?php
    include('Models/RendezVous.php');

class RendezVousController{
    public function getAllRendezVous(){
            
        $rendez = RendezVous::getAll();
        return $rendez; 
    }

    // public function findProfesseur(){
    //     if(isset($_POST['search'])){
    //         $data = array('search' => $_POST['search']);
    //     }
    //     $professeurs = Professeurs::searchProfesseur($data);
    //     return $professeurs;
    // }

    // public function getRendezVous(){
    //     if(isset($_POST['id_rendezvous'])){
    //         $data = array(
    //             'id_rendezvous' => $_POST['id_rendezvous'] 
    //         );
    //     }
    //     $rendez = RendezVous::getRendez($data);
    //     return $rendez;
       
    // }
    public function AddRendezVous(){
         if(isset($_POST["submit"])){
             $data = array( 
                 "rendezvous" => $_POST["rendezvous"]
             );
             $result = RendezVous::Add($data);
              if($result == "ok"){
                //  Session::set('success', 'professeur ajouté');
                header('location:docDash');
             }else{
                 echo $result;
             }
         }
    }
//     public function UpdatePatient(){
//         if(isset($_POST["submit"])){
//             $data = array(
//                 "id"=>$_POST['id_patient'],
//                 "image"=>$_FILES['image']['name'] ,
//                 "nom"=>$_POST["nom"],
//                  "email"=>$_POST["email"],
//                  "genre"=>$_POST["genre"],
//                  "phone"=>$_POST["phone"],
//                  "date_naissance"=>$_POST["date_naissance"],
//                 "password"=>$_POST["password"]
//             );
//             move_uploaded_file($_FILES['image']['tmp_name'], 'Public/Assets/upload/'.$_FILES['image']['name']);
//             $result =  Patient::update($data);
//             if($result == "ok"){
//                 // Session::set('success', 'professeur modifié');
//                 header('location: adminDoc');
//             }else{
//                 echo $result;
//             }
//         }
//    }
//     public function DeleteDoctor(){
//         if(isset($_POST['id_patient'])){
//             $data['id_patient'] = $_POST['id_patient'];
//             $result = Patient::delete($data);
//         if($result === "ok"){
//             // Session::set('success', 'professeur supprimé');
//             header("location: adminDoc");
//         }else{
//             echo $result;
//         }
//     }

//   }

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
