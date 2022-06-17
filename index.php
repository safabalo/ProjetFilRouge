<?php
require_once './autoload.php';
require_once './Controllers/HomeController.php';

$home = new HomeController();
$pages= ['home', 'signUp', 'Login', 'adminDash', 'adminlogin', 'adminDoc', 'addDoc', 'editDoc', 'deleteDoc', 'patientDash', 'patientlogin', 'patientDoc','patientPara', 'docDash' ];

//  if(isset($_SESSION['logged']) && $_SESSION['logged'] === true ){      
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
// }else if(isset($_GET['page']) && $_GET['page'] == false){
//    $home->index('signIn');
// }else{
// $home->index('home');
// }
?>