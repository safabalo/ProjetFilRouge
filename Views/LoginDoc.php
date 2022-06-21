<?php 
if(isset($_POST['submit'])){
  $logindoc = new DoctorsController();
  $logindoc->auth();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
    <title>Rendez-vous || Login</title>
</head>
<body class="d-flex form_body">
    <section class="w-50 ms-5 form_sect">
        <form action="" method="post" class="w-50 formulaire_login">
            <span class="iconify logo mb-3" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="50" data-height="50"></span>
            <legend class="form_legend mb-4">Veuillez entrez vos informations</legend>
            <div class="form-group mb-4">
                <label for="email" class="label fw-bold">Email</label>
                <input type="email" class="form-control inputs" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group mb-5">
                <label for="password" class="label fw-bold">Mot de passe</label>
                <input type="password" class="form-control inputs" id="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="form-group mb-5 d-flex justify-content-center">
                <input type="checkbox" id="checkbox" class="mt-2 me-3">
                <label for="checkbox" class="label fw-bold">Rappeler moi</label>
            
            </div>
            <div class="form-group mb-4 d-flex justify-content-center">
                <button type="submit" class="btn sub text-white" name="submit">Se connecter</button>
            </div>
            <div class="d-flex justify-content-around">
                <a href="https://mail.google.com/" class="btn">
                    <img src="./Public/SVG&PNG/googleicon.png" alt="" width="30px" height="30px" class="signicons">
                </a>
                <a href="https://facebook.com" class="btn">
                    <img src="./Public/SVG&PNG/Facebook_icon.png" alt="" width="30px" height="30px" class="signicons">
                </a>
                <a href="https://twitter.com" class="btn">
                    <img src="./Public/SVG&PNG/twitter.png" alt="" width="30px" height="30px" class="signicons">
                </a> 
            </div> 
        </form> 
    </section>
    <section class="w-50 img_sect">
        <img src="./Public/SVG&PNG/animation_500_l448qme6.gif" alt="" width="100%" height="vh-100">
    </section>
    <script src="./Public/Js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>