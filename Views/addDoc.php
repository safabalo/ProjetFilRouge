<?php

  if(isset($_POST["submit"])){
    $data = new DoctorsController();
    $newDoctor = $data->AddDoctor();
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
                       <!-- Edit Modal HTML -->
                       <div id="addEmployeeModal" class="modal fade form">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form method="POST">
                                <div class="modal-header">						
                                        <h4 class="modal-title">Ajouté un Docteur</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">					
                                        <div class="form-group">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required>
                                            <div class="errorNom text-danger"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="email" required>
                                            <div class="errorEmail text-danger"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="date">Date disponible</label>
                                            <input class="form-control" type="date" id="date_dispo" name="date_dispo" placeholder="date" required>
                                            <div class="errorerrorDate text-danger"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="seance">Séance</label>
                                            <input class="form-control" type="number" id="seance" name="seance" placeholder="séance" required>
                                            <div class="errorSeance text-danger"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="specialite">Spécialité</label>
                                            <input class="form-control" type="text" id="specialite" name="specialite" placeholder="specialite" required>
                                            <div class="errorSpecialite text-danger"></div>
                                        </div>					
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-success" value="Add" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script>
    let formEl = document.querySelector('.form')

    let nomEl = document.querySelector('#nom')
    let emailEl = document.querySelector('#email')
    let dateEl = document.querySelector('#date_dispo')
    let seanceEl = document.querySelector('#seance')
    let specialiteEl = document.querySelector('#specialité')

    let errorNom = document.querySelector('.errornom')
    let errorEmail = document.querySelector('.erroremail')
    let errorDate = document.querySelector('.errordate_dispo')
    let errorSeance = document.querySelector('.errorséance')
    let errorSpecialite = document.querySelector('.errorspécialité')

    formEl.addEventListener('submit', (e) =>  {
        if(nomEl.value.trim() == ''){
            e.preventDefault()
            errorNom.textContent = "Nom est vide"
        }else{
            errorNom.textContent = ""
        }
        
        if(emailEl.value.trim() == ''){
            e.preventDefault()
            errorEmail.textContent = "Email est vide"
        }else{
            errorEmail.textContent = ""
        }
        
        if(dateEl.value.trim() == ''){
            e.preventDefault()
            errorDate.textContent = "Date est vide"
        }else{
            errorDate.textContent = ""
        }
        
        if(seanceEl.value.trim() == ''){
            e.preventDefault()
            errorSeance.textContent = "Séance est vide"
        }else{
            errorSeance.textContent = ""
        }
        
        // let regexPhone = ^[\+]?[212][-\s\.]?[06][-\s\.]?[0-9]{4,6}$
        if(specialiteEl.value.trim() == ''){
            e.preventDefault()
            errorSpecialite.textContent = "Spécialité est vide"
        }
        // elseif(!regexPhone.test(phoneEl.value.trim()){
        //     e.preventDefault()
        //     errorPhone.textContent = "Phone no empty sous forme +212 ou 06"
        // }
        else{
            errorSpecialite.textContent = ""
        }
    })
  </script>

                    <script src="./Public/Js/bootstrap.bundle.min.js"></script>
                    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                    <script src="./Public/Js/table.js"></script>
                    <script src="./Public/Js/script.js"></script>
</body>