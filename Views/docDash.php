<?php
  if(isset($_SESSION['id_doctor'])) { 
    $existRendez = new RendezVousController();
    $rendez = $existRendez->getRendezVousDoc();
   
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
    <title>Rendez-vous || Espace Doctor</title>
</head>
<body>
    <main class="">
        <section class="d-flex ">
        <?php require('./Views/sidebarDoc.php')?>
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
                                        <form class="d-flex" method="POST">
                                            <div class="d-flex w-100">
                                                <input class="shadow-none border-light rounded" id="search" name="search" type="search" onkeyup="search()" placeholder="Search" aria-label="Search">
                                                <input type="submit" name="find" class="btn btn-primary pe-1" value="Recherche">
                                            </div>
                                        </form>
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
                                        <!-- <th>Image</th> -->
                                        <th>Nom</th>
                                        <th>phone</th>
                                        <th>Rendez-vous</th>
                                        <th>Date de naissance</th>
                                        <th>Genre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($rendez as $rendezvous):?>
                                    <tr>
                                    <td>
                                         <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                        </td>
                                    <!-- <td><img src="Public/Assets/upload/<?//php echo $doctor["image"] ?>" width="50px" height="50px"></td> -->
                                    <td><?php echo $rendezvous->nomcomplet?></td>
                                    <td><?php echo $rendezvous->phone?></td>
                                    <td><?php echo $rendezvous->rendezvous?></td>
                                    <td><?php echo $rendezvous->date_naissance?></td>
                                    <td><?php echo $rendezvous->genre?></td>
                                    
                                    <!-- <td class="d-flex flex-row">
                                        </td> -->
                                    </tr>
                                    <?php endforeach;?>
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