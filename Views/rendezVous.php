<?php

  if(isset($_POST["submit"])){
    $data = new RendezVousController();
    $newrendez = $data->AddRendezVous();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous || le tableau des Patients</title>
    <link rel="stylesheet" href="./Public/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
</head>
<body class="d-flex justify-content-center" style="background-color:rgb(10, 161, 221);">
    <div class="d-flex flex-column align-items-center mt-5 border w-50 pb-4 pt-4" style="background-color:white;">
        <form method="POST" action="" class="form w-75" enctype="multipart/form-data" >
            <legend>						
                <h4>Choisir une date</h4>
            </legend>
            <div>
            <div class="form-group mb-2">
                <label for="date" class="form-label">Date</label>
                <input class="form-control" type="date" id="date" name="rendezvous" placeholder="date" >
            </div>
            <div class="form-group mb-2">
                <label for="heure" class="form-label">Heure</label>
                <input class="form-control" type="time" id="heure" name="rendezvous" placeholder="heure" >
            <div>
                <a class="btn btn-default" href="PatientDoc" style="background-color: rgb(121, 218, 232); padding-left: 10%; padding-right: 10%; color:#2155CD;">Cancel</a>
                <input type="submit" class="btn text-white" value="Add" name="submit" style="background-color: #2155CD; padding-left: 12%; padding-right: 12%;">
            </div>
        </form>
    </div>
    <script src="./Public/Js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./Public/Js/table.js"></script>
    <script src="./Public/Js/script.js"></script>
</body>
</html>