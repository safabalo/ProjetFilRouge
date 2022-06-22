<?php
require_once('statistique.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous | admin dashboard</title>
    <link rel="stylesheet" href="./Public/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Styles/style.css">
    <link rel="stylesheet" href="./Public/Styles/calendar.css">
    <link rel="shortcut icon" href="./Public/SVG&PNG/favicon.png" type="image/x-icon">
</head>
<body class="light" style="overflow-x: hidden;">
    <main class="" >
        <section class="d-flex">
   <?php require('./Views/sidebaradmin.php'); ?>
            <div class="main vh-100" style="background-color: white; width:84%; overflow: hidden;">
                <div class="d-flex justify-content-between">
                    <span class="iconify" data-icon="material-symbols:arrow-circle-left-outline" style="color: #2155cd;" data-width="30" data-height="30" onclick=""></span>
                    <h1 class="text-center">Hopitale X</h1>
                    <span class="iconify" data-icon="clarity:notification-outline-badged" style="color: #2155cd;" data-width="30" data-height="30"></span>
                </div>
                <div class="cards">
                    <div class="row d-flex">
                        <div class="col-sm-11 mb-sm-5 mb-md-0 col-md-5" style="margin-left:10% !important;">
                            <div class="card" id="card1" style="width:400px;">
                                <div class="card-body d-flex">
                                    <span class="iconify" data-icon="healthicons:doctor-male-outline" style="color: white;" data-width="70" data-height="70"></span>
                                    <div>
                                        <h5 class="card-title">Doctors</h5>
                                        <p class="card-text fw-bolder fs-3"><?php echo $nbrDocs[0]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-5" style="width:400px; margin-bottom:7%;">
                            <div class="card" id="card2">
                                <div class="card-body d-flex">
                                    <span class="iconify" data-icon="healthicons:inpatient-outline" style="color: #2155cd;" data-width="70" data-height="70"></span>
                                    <div>
                                    <h5 class="card-title ms-2">Patients</h5>
                                    <p class="card-text fw-bolder"><?php echo $nbrPats[0]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25" style="margin-left:10% !important;">
                    <canvas id="myChart" ></canvas>
                </div>
            <div>
      
        </section>
    </main>
    <script src="./Public/Js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const data = {
      labels: [
      'Femme',
      'Homme'

      ],
      datasets: [{
      label: 'Gender',
      data: [<?php echo $femmePat[0]?>,<?php echo $hommePat[0]?>],
      backgroundColor: [
      '#42C2FF',
      '#85F4FF'  
      ],
      width:5,
      hoverOffset: 4
      }]
      };

      const config = {
     type: 'doughnut',
     data: data,
    };
      const myChart = new Chart(
      document.getElementById('myChart'),
      config
      );
    </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="./Public/Js/calendar.js"></script>
    <script src="./Public/Js/script.js"></script>
    
</body>
</html>