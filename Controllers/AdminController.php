<?php
include('Models/Admin.php');
// include('app/classes/Redirect.php');

class AdminController{
    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::loginAdmin($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'], $result->password)){
                $_SESSION['logged'] = true;
                $_SESSION['email'] = $result->email;
                $_SESSION['nom'] = $result->nom;
                $_SESSION['id'] = $result->id;
                $_SESSION['role'] = $result->role;
                Redirect::to('adminDoc');
            }
        else{
           Session::set('error', 'Email ou mot de passe incorrect');
           Redirect::to('home');
        
        }
    }
}

}
?>