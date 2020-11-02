<?php
ob_start();
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="shortcut icon" href="../images/air-conditioner 1.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet">


  <title>FROID INTER | Contactez Nous .</title>
  <style>
    .navbar-toggler:focus,
    .navbar-toggler:hover {
      text-decoration: none;
      outline: 0px none;
    }
  </style>
</head>

<body>
  <div class="container-fluid" style="background-color: white;">
    <div class="row tof" style=" text-align: center">
      <div class="col-md-3" style="
    padding: 15px;
">
        <i class="fa fa-envelope"></i>
        <a href="mailto:froid.inter@gmail.com">froid.inter@gmail.com</a>
      </div>
      <div class="col-md-3 bordering" style="
    padding: 15px;
">
        <i class="fa fa-phone"></i> +212600626950 & +212672309296
      </div>
      <div class="col-md-3 bordering1" style="
    padding: 15px;
">
        <i class="fa fa-location-arrow"></i> Quartier Beausejour 5 N 5,
        Tanger
      </div>
      <div class="col-md-3" style="
    padding: 15px;
">
        <a class="s-m" href="https://web.facebook.com/FROID-INTER-118342640026522/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a class="s-m" href="https://www.instagram.com/froidinter/" target="_blank">
          <i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a class="s-m" href="https://www.google.com" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a class="s-m" href="https://youtube.com/channel/UCwnahbZRmqjjWsCGfvYbH_A" target="_blank">
          <i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
    <!-- <div style="border-bottom: 2px solid #1b96db;opacity: 0.9;"></div> -->
    <nav class="navbar navbar-expand-lg nav-nav" style="
  padding-top: 2px;
  background: rgb(8,139,213);
background: linear-gradient(90deg, rgb(25 52 68) 0%, rgb(30 126 181) 35%, rgb(233 244 249) 100%);background-color: #8abed9;
    /* border-bottom-left-radius: 40%; */
    /* border-top-right-radius: 1%; */
    /* border-top-left-radius: 10%; */
    /* border-bottom-right-radius: 40%; */
">
      <a href="index.php">
        <img src="../images/voila-logo.png" class="img" alt="logo" height="85px" />
      </a>
      <button style="float: right;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <i style="     font-size: 30px;
    color: #1b96db;
    padding: 3px 10px 3px 10px;
    border: 2px solid #1b96db;
    " class="fa menu-item" aria-hidden="true"></i>
      </button>

      <div class="collapse navbar-collapse row" id="navbarTogglerDemo01" style="
    text-align: center;
">

        <div class="col-md-2" style="
    text-align: left;
">
          <!-- <a class="navbar-brand" href="index.php" style="    padding-top: 20px;"> <span id="titlee">FROID INTER</span></a> -->
        </div>
        <div class="col-md-1 cool-link menu">
          <a href="index.php"> Accueil</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="index.php#services"> Services</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="contact.php"> Contact</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="NosProduits.php"> Produits</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="gallery.php"> Galerie</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="evolution-charts.php"> Chiffres</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="AboutUs.php"> Équipe</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="clients.php"> Clients</a>
        </div>
        <div class="col-md-1 cool-link menu">
          <a class="blane" href="fournisseurs.php"> Fournisseurs</a>
        </div>
        <div class="col-md-1">
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-md-6">
        <form action="ajout-member.php" method="post">
          <h1 style="    text-align: center;
          color: #1b96db;
          padding: 20px;
          font-weight: 800;">Contactez-Nous</h1>
          <br />
          <div class="row" style=" 
          font-weight: 800;">

            <div class="col-md-6">
              <label>Nom Complet</label>
              <input class="form-control form-control-lg" type="text" placeholder="Nom Complet*" name="nom" required />
            </div>
            <div class="col-md-6">
              <label>é-mail</label>
              <input class="form-control form-control-lg" type="email" name="email" placeholder="Email" />
            </div>
          </div>
          <br />
          <div class="row" style=" 
          font-weight: 800;">
            <div class="col-md-6">
              <label> Téléphone </label>
              <input class="form-control form-control-lg" type="text" name="phone" placeholder="Telephone*" required />
            </div>
            <div class="col-md-6">
              <label> Sujet </label>
              <input class="form-control form-control-lg" type="text" name="sujet" placeholder="Sujet*" required />
            </div>
          </div>
          <br />
          <div class="row" style=" 
          font-weight: 800;">
            <div class="col-md-12">
              <label>Adresse</label>
              <textarea class="form-control form-control-lg" type="text" name="adress" placeholder="Adresse*"></textarea>
            </div>
          </div>
          <br />
          <div class="row" style=" 
          font-weight: 800;">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <button style="padding: 15px;border-radius: 50px;font-weight: 900;background-color: #1b96db;" class="btn btn-info btn-block" type="submit" name="submit-contact">Envoyer</button>
            </div>
            <div class="col-md-4"></div>
          </div>
        </form>
        <!-- <div class="row">
            <div class="col-md-12">
           
            </div>
          </div> -->
      </div>
      <div class="col-md-6" style="
    padding-top: 20px;
">
        <?php if (isset($_SESSION['x'])) : ?>
          <div class="alert alert-success" role="alert" style="text-align: center;">
            <?php echo $_SESSION['x'] ?> </div>
        <?php endif ?>
        <img src="../images/contactez-nous.jpeg" id="gone" width="100%" style="
    border: 5px solid #1b96db;
    border-bottom-left-radius: 70%;
    border-top-right-radius: 25%;" alt="contact Page Image" />
      </div>
    </div>
    <br />
    <?php include_once('footer.php') ?>
  </div>
</body>
<a title="Vers le Haut" id="back-to-top" href="#" class=" back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  var m = $(".menu-item");

  m.addClass('fa-bars');

  m.on('click', function() {
    if (m.hasClass('fa-bars')) {
      m
        .removeClass('fa-bars')
        .addClass('fa-times');
    } else {
      m
        .removeClass('fa-times')
        .addClass('fa-bars');
    }
  });
</script>
<script src="../js/scroll.js"></script>

</html>