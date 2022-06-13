<?php

 class AdminController{
    public function auth(){
            if(isset($_POST['submit'])){
                $data['email'] = $_POST['email'];
                $result = Admin::login($data);
                if($result->Email === $_POST['email'] && ($_POST['password'] == $result->Password)){
                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $result->Email;
                    $_SESSION['nom'] = $result->nom;
                    header('location: adminDash');
                }
            else{
               Session::set('error', 'Email ou mot de passe incorrect');
                header('location: adminlogin');
            
            }
        }
    }
   
 }
?>