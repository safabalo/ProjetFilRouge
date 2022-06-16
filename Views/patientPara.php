<<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Public/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Styles/style.css">
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rendez-vous || Patient Paramètres</title>
</head>
<body>
    <main>
        <section class="d-flex ">
            <nav class="sidebar nav navbar d-flex flex-column">
                <div class="navbar-brand d-flex">
                    <span class="iconify" data-icon="healthicons:ministry-of-health-outline" style="color: #2155cd;" data-width="30" data-height="30" id="sidebarToggle"></span>
                    <p>Your Hospital</p>
                </div>
                <div>
                    <ul class="nav d-flex flex-column mb-2" id="list">
                        <li class="nav-items d-flex">
                           <img src="" width="60px" height="60px" style="border-radius: 50%;"/>
                        </li>
                        <li class="nav-items d-flex mb-3 mt-3">
                            <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Rendez-vous</a>
                        </li>
                        <li class="nav-items d-flex mb-3">
                            <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Symptomes</a>
                        </li>
                        <li class="nav-items d-flex">
                            <span class="iconify" data-icon="clarity:settings-line" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="" class="nav-link">Paramètres</a>
                        </li>
                        <li class="nav-items d-flex mb-3" id="logout">
                            <span class="iconify" data-icon="carbon:logout" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="" class="nav-link"> LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="main" style="width: 90%;">
                <div class="d-flex justify-content-between" >
                    <span class="iconify" data-icon="material-symbols:arrow-circle-left-outline" style="color: #2155cd;" data-width="30" data-height="30" onclick=""></span>
                    <h1 class="text-center">Hopitale X</h1>
                    <span class="iconify" data-icon="clarity:notification-outline-badged" style="color: #2155cd;" data-width="30" data-height="30"></span>
                </div>
                <div class="container-xl mt-1">
                <div class="d-flex justify-content-center">
                    <img src="" width="120px" height="120px" style="border-radius: 50%; border:1px solid #2155cd;"/>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="image">Votre image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image" >
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom complet" value="<?php echo $patient->nom;?>">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $patient->email;?>">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" name="date_naissance" id="date_naissance" value="<?php echo $patient->date_naissance;?>">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="téléphone" value="<?php echo $patient->phone;?>">
                        <label for="genre">Genre</label>
                        <select class="form-select mb-2" aria-label="Default select example" style="border-color: rgb(33, 85, 205); color: rgb(33, 85, 205); " name="genre" id="genre">
                            <!-- <option value=""></option> -->
                            <option value="Homme"<?php echo ($patient->genre === 'Homme') ? 'selected': '';?>>Homme</option>
                            <option value="Femme"<?php echo ($patient->genre === 'Femme') ? 'selected': '';?>>Femme</option>
                        </select>
                        <label for="">Mot de passe</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="mot de passe" value="<?php echo $patient->password;?>">
                        <label for="">Répéter le Mot de passe</label>
                        <input type="password" class="form-control" name="repeat_password" id="repeat_password" placeholder="Répéter mot de passe">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
                </div>
            </div>

                   
            <script src="./Public/Js/bootstrap.bundle.min.js"></script>
            <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <script src="../Public/Js/table.js"></script>
            <script src="../Public/Js/script.js"></script>
</body>
</html>