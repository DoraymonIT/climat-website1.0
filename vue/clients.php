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


  <title>FROID INTER | Liste de notre chers fidèles clients .</title>
</head>

<body>
  <div class="container-fluid">
    <?php include_once('header.php'); ?>
    <div class="row">
      <div class="col-md-12">
        <h3 style="    text-align: center;
          color: #1b96db;
          padding: 20px;
          ">
          <i class="fa fa-users" aria-hidden="true"></i> Nos Clients
        </h3>
      </div>
    </div>

    <div class="row" style="padding-left: 5px;padding-right: 5px;">
      <?php
      $clients = $base->query('SELECT * FROM client_fournisseur WHERE categorie="Client"');
      foreach ($clients as $data) :
      ?>
        <div class="col-md-4">
        <div class="client" style="text-align: center;">
          <h2><?php echo $data['nom'] ?></h2>
<div style="border-bottom: 2px solid #1b96db;"></div>
     
          <img width="150px" src='<?php echo $data['image']; ?>'>
          <p>
            <?php echo $data['description'] ?>
          </p>
          </div> <br>
        </div>
        <hr />
      <?php endforeach; ?>

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
<!-- <script src="../js/chart.js"></script> -->
<script src="../js/scroll.js"></script>

</html>