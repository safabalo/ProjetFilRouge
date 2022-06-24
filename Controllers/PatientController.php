<?php
    require_once('Models/Patient.php');
    require_once('app/classes/Redirect.php');
    require_once('app/classes/Session.php');

class PatientController{
    public function getAllPatients(){
            
        $patients = Patient::getAll();
        return $patients; 
    }


    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Patient::loginPatient($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'], $result->password)){
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                $_SESSION['nomcomplet'] = $result->nom;
                $_SESSION['id_patient'] = $result->id_patient;
                $_SESSION['role'] = $result->role;
                Redirect::to('patientDoc');
            }else{
           Session::set('error', 'Email ou mot de passe incorrect');
           Redirect::to('home');

        
        }
    }
}
    public function getOnePatient(){
        if(isset($_SESSION['id_patient'])){
            $data = array(
                'id_patient' => $_SESSION['id_patient'] 
            );
        }
        $patients = Patient::getPatient($data);
        return $patients;
       
    }
    public function AddPatient(){
         if(isset($_POST["submit"])){
            $option = [
                'cost' => 12,
            ];
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT, $option);
             $data = array( 
                 "nomcomplet" => $_POST["nomcomplet"],
                 "email" => $_POST["email"],
                 "genre" => $_POST["genre"],
                 "phone" => $_POST["phone"],
                 "date_naissance" => $_POST["date_naissance"],
                 "password" => $password
             );
             $result = Patient::Add($data);
              if($result == "ok"){
                 Session::set('success', 'Votre compte est créé avec succès');
                 Redirect::to('Login');

             }else{
                 echo $result;
             }
         }
    }
    public function UpdatePatient(){
        if(isset($_POST["submit"])){
            $data = array(
                "id"=>$_POST['id_patient'],
                "image"=>$_FILES['image']['name'] ,
                "nomcomplet"=>$_POST["nomcomplet"],
                 "email"=>$_POST["email"],
                 "genre"=>$_POST["genre"],
                 "phone"=>$_POST["phone"],
                 "date_naissance"=>$_POST["date_naissance"],
                "password"=>$_POST["password"]
            );
            move_uploaded_file($_FILES['image']['tmp_name'], 'Public/Assets/upload/'.$_FILES['image']['name']);
            $result =  Patient::update($data);
            if($result == "ok"){
                Session::set('info', 'Votre compte a été modifier');
                Redirect::to('patientPara');

            }else{
                echo $result;
            }
        }
   }

}
?>