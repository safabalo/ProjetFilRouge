<?php
require_once './autoload.php';
require_once './Controllers/HomeController.php';

$home = new HomeController();
$pages= ['home','Login', 'LoginDoc', 'Loginad', 'signUp', 'adminDash', 'adminlogin', 'adminDoc', 'addDoc', 'editDoc', 'deleteDoc', 'patientDash', 'patientlogin', 'patientDoc','patientPara', 'docDash', 'rendezVous','LogOut', 'adminPat' ];

  if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){      
    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
         $page = $_GET['page'];
         $home->index($page);
        }else {
        include('views/includes/404.php');
        }
     }else{
        $home->index('home');
     }
}else if(isset($_GET['page']) && $_GET['page'] == 'signUp'){
   $home->index('signUp');
}else if(isset($_GET['page']) && $_GET['page']== 'Login'){
   $home->index('Login');
}else if(isset($_GET['page']) && $_GET['page']== 'Loginad'){
   $home->index('Loginad');
}else if(isset($_GET['page']) && $_GET['page']== 'LoginDoc'){
   $home->index('LoginDoc');
}
else{
$home->index('home');
}
?>