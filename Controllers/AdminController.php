<?php
include('Models/Admin.php');
class AdminController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::loginAdmin($data);
            if($result->email === $_POST['email'] && ($_POST['password'] == $result->password)){
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                $_SESSION['nom'] = $result->nom;
                header('location: adminDoc');
            }
        else{
           Session::set('error', 'Email ou mot de passe incorrect');
            header('location: home');
        
        }
    }
}

}
?>