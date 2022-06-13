<?php

 class PatientController{
    public function auth(){
            if(isset($_POST['submit'])){
                $data['email'] = $_POST['email'];
                $result = Patient::login($data);
                if($result->Email === $_POST['email'] && ($_POST['password'] == $result->password)){
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $result->email;
                    $_SESSION['nom'] = $result->nom;

                    header('location: adminDash');
                }
            else{
               Session::set('error', 'Email ou mot de passe incorrect');
                header('location: signUp');
            
            }
        }
    }
    public function AddPatient(){
        if(isset($_POST["submit"])){
            $data = array( 
                "nom"=>$_POST["nom"],
                "email"=>$_POST["email"],
                "télé"=>$_POST["télé"],
                "genre"=>$_POST["genre"],
                "date_naissance"=>$_POST["date_naissance"],
                "password"=>$_POST["password"],
            );
            $result = Patient::signUp($data);
            if($result == "ok"){
               //  Session::set('success', 'professeur ajouté');
               header('location: adminDash');
            }else{
                echo $result;
            }
        }
   } 
   
 }
?>