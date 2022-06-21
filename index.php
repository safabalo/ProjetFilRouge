<?php
require_once './autoload.php';
require_once './Controllers/HomeController.php';

$home = new HomeController();
$pages= ['home', 'adminDash', 'adminlogin', 'adminDoc', 'addDoc', 'editDoc', 'deleteDoc', 'patientDash', 'patientlogin', 'patientDoc','patientPara', 'docDash', 'rendezVous', 'User' ];

  if(isset($_SESSION['logged'])  ){      
    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
         echo $_GET['page'];
         exit;
         $page = $_GET['page'];
         $home->index($page);
        }else {
        include('views/includes/404.php');
        }
     }else{
        $home->index('home');
     }
}else if($_GET['page'] == "signUp"){
   $home->index('signUp');
}else if($_GET['page']== 'Login'){
   $home->index('Login');
}
else{
$home->index('home');
}
?>