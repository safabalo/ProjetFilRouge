<?php
require_once './autoload.php';
require_once './Controllers/HomeController.php';
require_once './Controllers/DoctorsController.php';
require_once './Controllers/AdminController.php';
require_once './Controllers/PatientController.php';
require_once './app/classes/Redirect.php';
require_once './app/classes/Session.php';
$home = new HomeController();
$pages=['home', 'Login', 'signUp', 'Loginad' , 'LoginDoc' ];
$pagesPat= ['patientDoc','patientPara', 'rendezVous','LogOut', 'mesRendezVous' ];
$pagesDoc= ['LoginDoc', 'docDash', 'rendezVous','LogOut', 'mesRendezVous' ];
$pagesAd= ['Loginad', 'adminDash', 'adminlogin', 'adminDoc', 'addDoc', 'editDoc', 'deleteDoc', 'adminPat', 'LogOut'];
if(!isset($_GET['page'])){
   $home->index("home");
  exit;
}
   if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){      
    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pagesPat) || in_array($_GET['page'],$pagesDoc) || in_array($_GET['page'],$pagesAd)){
         if(in_array($_GET['page'],$pagesPat) && $_SESSION['role'] == 'patient'){
            $page = $_GET['page'];
            $home->index($page);
         }elseif(in_array($_GET['page'],$pagesDoc) && $_SESSION['role'] == 'doctor'){
            $page = $_GET['page'];
            $home->index($page);

         }elseif(in_array($_GET['page'],$pagesAd) && $_SESSION['role'] == 'admin'){
            $page = $_GET['page'];
            $home->index($page);
        }else {
        include('views/includes/404.php');
        }}else{
            include('views/includes/404.php');
        }
     }else{
        $home->index('home');
     }
}else if(in_array($_GET['page'], $pages) && $_GET['page'] == 'signUp'){
   $home->index('signUp');
}else if(in_array($_GET['page'], $pages) && $_GET['page']== 'Login'){
   $home->index('Login');
}else if(in_array($_GET['page'], $pages) && $_GET['page']== 'Loginad'){
   $home->index('Loginad');
}else if(in_array($_GET['page'],$pages ) && $_GET['page']== 'LoginDoc'){
   $home->index('LoginDoc');
}
else{
$home->index('home');
}
?>