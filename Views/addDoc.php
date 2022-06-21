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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
</head>
<body class="d-flex justify-content-center" style="background-color:rgb(10, 161, 221);">
    <div class="d-flex flex-column align-items-center mt-5 border w-50 pb-4 pt-4" style="background-color:white;">
        <form method="POST" action="" class="form w-75" enctype="multipart/form-data" >
            <legend>						
                <h4>Ajouté un Docteur</h4>
            </legend>
            <div>
            <div class="form-group mb-2">
                    <label for="image">Votre image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image" >
                </div>					
                <div class="form-group mb-2">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
                    <div class="errorNom text-danger"></div>
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email" >
                    <div class="errorEmail text-danger"></div>
                </div>
                <div class="form-group mb-2">
                    <label for="date">Password</label>
                    <input class="form-control" type="password" id="password" name="password" placeholder="mot de passe" >
                    <!-- <div class="errorerrorDate text-danger"></div> -->
                </div>
                <div class="form-group mb-2">
                    <label for="seance">Séance</label>
                    <input class="form-control" type="number" id="seance" name="seance" placeholder="séance">
                    <div class="errorSeance text-danger"></div>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputSpecialite" class="form-label">Spécialité</label>
                    <select class="form-select form-select-lg shadow-none border-dark " id="specialite" name="specialite" style=" height:37px;">
                        <option></option>
                        <option value="allergologie">L’allergologie ou l’immunologie</option>
                        <option value="anesthésiologie">L'anesthésiologie</option>
                        <option value="andrologie">L'andrologie</option>
                        <option value="cardiologie">La cardiologie</option>
                        <option value="chirurgie">La chirurgie</option>
                        <option value="dermatologie">La dermatologie</option>
                        <option value="endocrinologie">L’endocrinologie</option>
                        <option value="gastro">La gastro-entérologie</option>
                        <option value="gynecologie">La gynécologie</option>
                        <option value="geriatrie">La gériatrie</option>
                        <option value="hematologie">L’hématologie</option>
                        <option value="hepatologie">L’hépatologie</option>
                        <option value="infectiologie">L’infectiologie</option>
                        <option value="generalist">généralist</option>
                        <option value="Interne">Interne</option>
                        <option value="neonatologie">La néonatologie</option>
                        <option value="neurologie">La neurologie</option>
                        <option value="odontologie">L’odontologie</option>
                        <option value="oncologie">L’oncologie</option>
                        <option value="obstetrique">L’obstétrique</option>
                        <option value="ophtalmologie">L’ophtalmologie</option>
                        <option value="orthopedie">L’orthopédie</option>
                        <option value="Oto">L’Oto-rhino-laryngologie</option>
                        <option value="pediatrie">La pédiatrie</option>
                        <option value="pneumologie">La pneumologie</option>
                        <option value="psychiatrie">La psychiatrie</option>
                        <option value="radiologie">La radiologie</option>
                        <option value="radiotherapie">La radiothérapie</option>
                        <option value="rhumatologie">La rhumatologie</option>
                        <option value="urologie">L’urologie</option>
                    </select>
                    <div class="errorSpecialite text-danger"></div>
                </div>					
            </div>
            <div>
                <a class="btn btn-default" href="adminDoc" style="background-color: rgb(121, 218, 232); padding-left: 10%; padding-right: 10%; color:#2155CD;">Cancel</a>
                <input type="submit" class="btn text-white" value="Add" name="submit" style="background-color: #2155CD; padding-left: 12%; padding-right: 12%;">
            </div>
        </form>
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

</body>