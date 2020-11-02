<?php
require_once('database_connect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="shortcut icon" href="../images/air-conditioner 1.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet"> 


  <title>FROID INTER | Évolution de CA et autres chiffres de notre entreprise</title>
</head>

<body>
  <div class="container-fluid">
    <?php include_once('header.php'); ?>
    <div class="row" style="padding: 10px">
      <div class="col-md-12">
            <br />

        <h3 style="text-align: center; color: #1b96db;">
          <i class="fa fa-area-chart" aria-hidden="true"></i> FROID INTER en
          Chiffres
        </h3>
      <br />

        <div class="row" style="text-align: center;
        background: linear-gradient(90deg, rgb(0 123 191) 0%, rgb(30 126 181) 35%, rgb(233 244 249) 100%);
        
    padding: 10px;">
          <div class="col-md-4">
            <img src="../images/employee.svg" width="20%" alt="employes number" />
            <br />
            <br />

            <h5 style="font-weight: 900;"> <?php
                  $how = $base->query('SELECT count(*) FROM peoples');
                  foreach ($how as $ff) :
                    echo $ff['count(*)'];
                  endforeach; ?> Employés</h5>
          </div>
          <div class="col-md-4">
              <img src="../images/exchange.svg" width="20%" alt="exchange number" />
              <br />
              <br />

              <h5 style="font-weight: 900;"> <?php $total = $base->query('SELECT sum(combien) FROM ca ');
                    $s = 0;
                    foreach ($total as $c) :  ?>
                  <th><?php echo number_format(($c['sum(combien)']), 2, '.', ',');; ?></th> <?php endforeach; ?> Dirham Marocain (MAD)</h5>
          
          </div>
          <div class="col-md-4">
            <img src="../images/project-management.svg" width="20%" alt="project number" />
            <br />
            <br />

            <h5  style="font-weight: 900;"> <?php
                  $how = $base->query('SELECT count(*) FROM gallery');
                  foreach ($how as $ff) :
                    echo $ff['count(*)'];
                  endforeach; ?> Projets</h5>
          </div>
        </div>

      </div>
    </div>
    
    <div class="row" style="padding: 50px">
      <div class="col-md-12">
        <h3 style="text-align: center;color: #1b96db;">
          <i class="fa fa-bar-chart" aria-hidden="true"></i> Notre évolution
          par Année
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <br />
    <?php include_once('footer.php') ?>
  </div>
</body>
<a
    title="Vers le Haut"
    id="back-to-top"
    href="#"
    class=" back-to-top"
    role="button"
    ><i class="fa fa-chevron-up"></i
  ></a>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- <script type="module" src="/js/main.js"></script> -->
<script>
  var ctx = document.getElementById('myChart').getContext('2d');

  <?php $years = array();
  $numbers = array();
  $chiffres = $base->query('SELECT * FROM ca ORDER BY annee ASC');
  foreach ($chiffres as $data) {
    $years[] = $data['annee'];
    $numbers[] = $data['combien'];
  }
  ?>

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {


      labels: ["<?php echo implode('","', $years); ?>"],
      datasets: [{

        label: ' Notre Chiffre d affaires dans les derniers années en DIRHAMS MAROCAIN (MAD)',
        data: ["<?php echo implode('","', $numbers); ?>"],
        backgroundColor: [
          '#1b96db',
          '#1b96db',
          '#1b96db',
          '#1b96db',
          '#1b96db',
          '#1b96db'
        ],
        borderColor: [
          '#243738',
          '#243738',
          '#243738',
          '#243738',
          '#243738',
          '#243738'
        ],
        borderWidth: 2
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>
<script src="../js/scroll.js"></script>

</html>