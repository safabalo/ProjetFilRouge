<?php

 $data = new DoctorsController();
 $doctors = $data->getAllDoctors();
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
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <ul class="nav d-flex flex-column mb-3" id="list">
                        <li class="nav-items d-flex">
                            <span class="iconify pt-2" data-icon="bi:columns-gap" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="adminDash.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-items d-flex mb-3 mt-3">
                            <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Docteurs</a>
                        </li>
                        <li class="nav-items d-flex mb-3">
                            <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="30" data-height="30"></span>
                            <a href="#" class="nav-link">Patients</a>
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
                <div class="container-xl" >
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Gestion des <b>Patients</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="addDoc" class="btn" style="background-color:#2155cd;"><span class="iconify ms-2" data-icon="carbon:alarm-add" style="color: #0aa1dd;" data-width="20" data-height="20"></span> <span>Ajouté un docteur</span></a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label>
                                            </span>
                                        </th>
                                        <th>Docteur</th>
                                        <th>Nom</th>
                                        <th>Email</th>
                                        <th>Date disponible</th>
                                        <th>Séance</th>
                                        <th>Spécialité</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($doctors as $doctor):?>
                                    <tr>
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td>
                                        <td><img src="Public/Assets/upload/<?php echo $doctor["image"] ?>" width="50px" height="50px"></td>
                                        <td><?php echo $doctor["nom"]?></td>
                                        <td><?php echo $doctor["email"]?></td>
                                        <td><?php echo $doctor["date_dispo"]?></td>
                                        <td><?php echo $doctor["seance"]?></td>
                                        <td><?php echo $doctor["specialite"]?></td>
                                        <td class="d-flex flex-row p-3 m-0">
                                            <form method="POST" action="editDoc" class="d-flex flex-row">
                                                <input type="hidden" name="id_doctor" value="<?php echo $doctor["id_doctor"]?>">
                                                <button class="edit btn" ><span class="iconify" data-icon="eva:edit-outline" style="color: #0aa1dd;" data-width="24" data-height="24"></span></button>
                                            </form>
                                            <form method="POST" action="deleteDoc" class="d-flex flex-row">
                                                <input type="hidden" name="id_doctor" value="<?php echo $doctor["id_doctor"]?>">
                                                <button class="delete btn"><span class="iconify" data-icon="ant-design:delete-outlined" style="color: #2155cd;" data-width="24" data-height="24"></span></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                    <tr>
                                </tbody>
                            </table>
                            <div class="clearfix">
                                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>        
                </div>

        </section>
    </main>
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