<?php
    include('Models/Doctors.php');
    include('app/classes/Redirect.php');
    include('app/classes/Session.php');

class DoctorsController{
    public function getAllDoctors(){
            
        $doctors = Doctors::getAll();
        return $doctors; 
    }
    public function auth(){
               if(isset($_POST['submit'])){
                   $data['email'] = $_POST['email'];
                   $result = Doctors::loginDoctor($data);
                   if($result->email === $_POST['email'] && ($_POST['password'] == $result->password)){
                       $_SESSION['logged'] = true;
                       $_SESSION['email'] = $result->email;
                       $_SESSION['nom'] = $result->nom;
                       $_SESSION['id_doctor'] = $result->id_doctor;
                          Redirect::to('docDash');
                   }
               else{
                  Session::set('error', 'Email ou mot de passe incorrect');
                  Redirect::to('home');
               
               }
           }
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
            $option = [
                'cost' => 12,
            ];
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT, $option);
             $data = array( 
                "image"=>$_FILES['image']['name'] ,
                 "nom" => $_POST["nom"],
                 "email" => $_POST["email"],
                 "password" => $password,
                 "seance" => $_POST["seance"],
                 "specialite" => $_POST["specialite"]
             );
             $result = Doctors::Add($data);
             move_uploaded_file($_FILES['image']['tmp_name'], 'Public/Assets/upload/'.$_FILES['image']['name']);
             
              if($result == "ok"){
                 Session::set('success', 'docteur ajouté');
                Redirect::to('adminDoc');
                // header('location: adminDoc');
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
                Session::set('success', 'docteur modifié');
                Redirect::to('adminDoc');
                // header('location: adminDoc');
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
            Session::set('success', 'Docteur supprimé');
            Redirect::to('adminDoc');
            // header("location:adminDoc");
        }else{
            echo $result;
        }
    }

  }

    public function CountAllDoctors(){  
        $doc = Doctors::CountAll();
        return $doc; 
    }
  
    // public function ProfFemme(){  
    //     $prof = professeurs::CountFemme();
    //     return $prof; 
    // }
        
    // public function ProfHomme(){  
    //     $prof = professeurs::CountHomme();
    //     return $prof; 
    // }
}
