<?php 
  if(isset($_POST['id'])) { 
      $existDoc = new DoctorsController;
      $doctor = $existDoc->getOneDoctor();
  }
  if(isset($_POST['submit'])){
      $existDoc = new DoctorsController;
      $existDoc->UpdateDoctor();
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
<body class="d-flex justify-content-center" style="background-color:rgb(10, 161, 221);">
    <div class="d-flex flex-column align-items-center mt-5 border w-50 pb-4 pt-4" style="background-color:white;"> 
        <form method="POST">
            <legend>
                    <h4>Edite</h4>
            </legend>

            <div>
            <div class="form-group mb-2">
                    <label for="image">Votre image</label>
                    <input type="file" class="form-control" id="image" name="image" placeholder="image" >
                </div>		
                <div class="form-group mb-2">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" required value="<?php echo $doctor->nom?>">
                    <div class="errorNom text-danger"></div>
                </div>
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="email" required value="<?php echo $doctor->email?>">
                    <div class="errorEmail text-danger"></div>
                </div>
                <div class="form-group mb-2">
                    <label for="date">Date disponible</label>
                    <input class="form-control" type="date" id="date_dispo" name="date_dispo" placeholder="date_dispo" required value="<?php echo $doctor->date_dispo?>">
                    <div class="errorerrorDate text-danger"></div>
                </div>
                <div class="form-group mb-2">
                    <label for="seance">Séance</label>
                    <input class="form-control" type="number" id="seance" name="seance" placeholder="séance" required value="<?php echo $doctor->seance?>">
                    <div class="errorSeance text-danger"></div>
                </div>
                <div class="form-group mb-4">
                <label for="exampleInputSpecialite" class="form-label">Spécialité</label>
                    <select class="form-select form-select-lg shadow-none border-dark " id="specialite" name="specialite" style=" height:37px;">
                        <option></option>
                        <option value="allergologie" <?php echo ($doctor->specialite === 'allergologie') ? 'selected': '';?>>L’allergologie ou l’immunologie</option>
                        <option value="anesthésiologie" <?php echo ($doctor->specialite === 'anesthésiologie') ? 'selected': '';?>>L'anesthésiologie</option>
                        <option value="andrologie" <?php echo ($doctor->specialite === 'andrologie') ? 'selected': '';?>>L'andrologie</option>
                        <option value="cardiologie" <?php echo ($doctor->specialite === 'cardiologie') ? 'selected': '';?>>La cardiologie</option>
                        <option value="chirurgie" <?php echo ($doctor->specialite === 'chirurgie') ? 'selected': '';?>>La chirurgie</option>
                        <option value="dermatologie" <?php echo ($doctor->specialite === 'dermatologie') ? 'selected': '';?>>La dermatologie</option>
                        <option value="endocrinologie" <?php echo ($doctor->specialite === 'endocrinologie') ? 'selected': '';?>>L’endocrinologie</option>
                        <option value="gastro" <?php echo ($doctor->specialite === 'gastro') ? 'selected': '';?>>La gastro-entérologie</option>
                        <option value="gynecologie" <?php echo ($doctor->specialite === 'gynecologie') ? 'selected': '';?>>La gynécologie</option>
                        <option value="geriatrie" <?php echo ($doctor->specialite === 'geriatrie') ? 'selected': '';?>>La gériatrie</option>
                        <option value="hematologie" <?php echo ($doctor->specialite === 'hematologie') ? 'selected': '';?>>L’hématologie</option>
                        <option value="hepatologie" <?php echo ($doctor->specialite === 'hepatologie') ? 'selected': '';?>>L’hépatologie</option>
                        <option value="infectiologie" <?php echo ($doctor->specialite === 'infectiologie') ? 'selected': '';?>>L’infectiologie</option>
                        <option value="generalist" <?php echo ($doctor->specialite === 'generalist') ? 'selected': '';?>>généralist</option>
                        <option value="Interne" <?php echo ($doctor->specialite === 'Interne') ? 'selected': '';?>>Interne</option>
                        <option value="neonatologie" <?php echo ($doctor->specialite === 'neonatologie') ? 'selected': '';?>>La néonatologie</option>
                        <option value="neurologie" <?php echo ($doctor->specialite === 'neurologie') ? 'selected': '';?>>La neurologie</option>
                        <option value="odontologie" <?php echo ($doctor->specialite === 'odontologie') ? 'selected': '';?>>L’odontologie</option>
                        <option value="oncologie" <?php echo ($doctor->specialite === 'oncologie') ? 'selected': '';?>>L’oncologie</option>
                        <option value="obstetrique" <?php echo ($doctor->specialite === 'obstetrique') ? 'selected': '';?>>L’obstétrique</option>
                        <option value="ophtalmologie" <?php echo ($doctor->specialite === 'ophtalmologie') ? 'selected': '';?>>L’ophtalmologie</option>
                        <option value="orthopedie" <?php echo ($doctor->specialite === 'orthopedie') ? 'selected': '';?>>L’orthopédie</option>
                        <option value="Oto" <?php echo ($doctor->specialite === 'Oto') ? 'selected': '';?>>L’Oto-rhino-laryngologie</option>
                        <option value="pediatrie" <?php echo ($doctor->specialite === 'pediatrie') ? 'selected': '';?>>La pédiatrie</option>
                        <option value="pneumologie" <?php echo ($doctor->specialite === 'pneumologie') ? 'selected': '';?>>La pneumologie</option>
                        <option value="psychiatrie" <?php echo ($doctor->specialite === 'psychiatrie') ? 'selected': '';?>>La psychiatrie</option>
                        <option value="radiologie" <?php echo ($doctor->specialite === 'radiologie') ? 'selected': '';?>>La radiologie</option>
                        <option value="radiotherapie" <?php echo ($doctor->specialite === 'radiotherapie') ? 'selected': '';?>>La radiothérapie</option>
                        <option value="rhumatologie" <?php echo ($doctor->specialite === 'rhumatologie') ? 'selected': '';?>>La rhumatologie</option>
                        <option value="urologie" <?php echo ($doctor->specialite === 'urologie') ? 'selected': '';?>>L’urologie</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $doctor->id?>">
                    <div class="errorSpecialite text-danger"></div>
                </div>
                <div>
                    <a class="btn btn-default" href="adminDoc" style="background-color: rgb(121, 218, 232); padding-left: 10%; padding-right: 10%; color:#2155CD;">Cancel</a>
                    <input type="submit" class="btn" value="Save" name="submit" style="background-color: #2155CD; padding-left: 12%; padding-right: 12%;">
                </div>
                
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
    <script src="./Public/Js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./Public/Js/table.js"></script>
    <script src="./Public/Js/script.js"></script>
</body>