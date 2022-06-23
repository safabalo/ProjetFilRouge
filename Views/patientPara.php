<?php 
  if(isset($_SESSION['id_patient'])) { 
    $existPat = new PatientController;
    $patient = $existPat->getOnePatient();
}
if(isset($_POST['submit'])){
    $existPat = new PatientController;
    $existPat->UpdatePatient();
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
        <?php require('./Views/sidebarpatient.php'); ?>
            <div class="main" style="width: 90%;">
                <div class="d-flex justify-content-between" >
                    <span class="iconify" data-icon="material-symbols:arrow-circle-left-outline" style="color: #2155cd;" data-width="30" data-height="30" onclick=""></span>
                    <h1 class="text-center">Hopitale X</h1>
                    <span class="iconify" data-icon="clarity:notification-outline-badged" style="color: #2155cd;" data-width="30" data-height="30"></span>
                </div>
                <div class="container-xl mt-1">
                <form action="" method="POST">
                    <input type="hidden" name="id_patient" value="<?php echo $_SESSION['id_patient'] ?>">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" class="form-control" name="nomcomplet" id="nomcomplet" placeholder="Nom complet" value="<?php echo $patient->nomcomplet;?>">
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
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
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