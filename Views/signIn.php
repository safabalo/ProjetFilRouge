<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="shortcut icon" href="../Assets/SVG&PNG/favicon.png" type="image/x-icon">
    <title>Rendez-vous || Inscription</title>
</head>
<body class="d-flex form_body">
    <section class="w-50 ms-5">
        <form action="" method="post" class="w-50 formulaire">
            <span class="iconify logo mb-2" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="50" data-height="50"></span>
            <legend class="form_legend mb-3">Veuillez entrez vos informations</legend>
            <div class="form-group mb-2">
                <label for="name" class="label fw-bold">Nom complet</label>
                <input type="text" class="form-control inputs" id="name" name="name" placeholder="Nom et Prénom">
            </div>
            <div class="form-group mb-2">
                <label for="email" class="label fw-bold">Email</label>
                <input type="email" class="form-control inputs" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group mb-2">
                <label for="phone" class="label fw-bold">Numéro de téléphone</label>
                <input type="text" class="form-control inputs" id="phone" name="phone" placeholder="Numéro de téléphone">
            </div>
            <div class="form-group mb-2">
                <label for="phone" class="label fw-bold">Date de naissance</label>
                <input type="date" class="form-control inputs" id="birthday" name="birthday">
            </div>
            <div class="form-group mb-2">
                <label for="password" class="label fw-bold">Mot de passe</label>
                <input type="password" class="form-control inputs" id="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="form-group mb-4">
                <label for="repeat_password" class="label fw-bold">Répetez mot de passe</label>
                <input type="password" class="form-control inputs" id="repeat_password" name="repeat_password" placeholder="repété votre mot de passe">
            </div>
            <div class="d-flex justify-content-center mb-4">
                <button type="submit" class="btn sub text-white">Inscrit toi</button>
            </div>
            <div class="d-flex justify-content-around">
                <a href="https://mail.google.com/" class="btn">
                    <img src="../Assets/SVG&PNG/googleicon.png" alt="" width="40px" height="40px" class="signicons">
                </a>
                <a href="https://facebook.com" class="btn">
                    <img src="../Assets/SVG&PNG/Facebook_icon.png" alt="" width="40px" height="40px" class="signicons">
                </a>
                <a href="https://twitter.com" class="btn">
                    <img src="../Assets/SVG&PNG/twitter.png" alt="" width="40px" height="40px" class="signicons">
                </a> 
            </div>
    </section>
    <section class="w-50">
        <img src="../Assets/SVG&PNG/animation_500_l448qme6.gif" alt="" width="100%" height="vh-100">
    </section>
    <script src="../Js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>