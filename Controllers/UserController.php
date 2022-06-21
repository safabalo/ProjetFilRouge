<?php

 class UserController{
    public function auth(){
            if(isset($_POST['submit'])){
                $data['email'] = $_POST['email'];
                $resultAdmin = User::loginAdmin($data);
                $resultDoctor = User::loginDoctor($data);
                $resultPatient = User::loginPatient($data);
                if($resultAdmin || $resultDoctor || $resultPatien){
                    if($resultAdmin['role'] == 'admin'){
                        if($resultAdmin->Email === $_POST['email'] && ($_POST['password'] == $result->Password)){
                            $_SESSION['logged'] = $resultAdmin;
                            echo $resultAdmin;
                            $_SESSION['email'] = $resultAdmin->Email;
                            $_SESSION['nom'] = $resultAdmin->nom;
                            header('location:adminDoc');
                        }
                        
                    

                    }
                }
                
            }
    }
   
 }
?>