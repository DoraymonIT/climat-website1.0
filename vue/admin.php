<?php
    ob_start();
    session_start();
    if(empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="../vondor/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/hoverr.css">
    <link
      rel="shortcut icon"
      href="../images/air-conditioner 1.png"
      type="image/x-icon"
    />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet"> 

    <title>FROID INTER | Dashboard Page</title>
  </head>

  <body>
    <div
      class="container-fluid"
      style="padding-top: 10px; height: 100%; background-color: whitesmoke"
    >
      <div class="row">
        <div class="col-md-3">
        
          <img src="../images/voila-logo.png" class="img" alt="logo" height="85px" />

        </div>
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <div style="padding: 10px 0px 0px 0px">
           
             <?php if (isset($_SESSION['username'])): ?>
                  <h6> <i class="fa fa-user-circle" aria-hidden="true"></i>  Vous êtes Connecte : <?php echo $_SESSION['username'] ?> !</h6>
                  <p><a href="logout.php" class="btn btn-primary" href="#" role="button"> <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></p>
              <?php endif ?>
          </div>
        </div>
      </div>
<hr>
      <div
        class="row"
        style="padding-top: 140px; padding-bottom: 100px; text-align: center;font-weight: bold;"
      >
        <div class="col-md-4">
        <a href="equipe-admin.php">  <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          > 
            <i class="fa fa-users" aria-hidden="true"></i> Gestion de l équipe
          </div> </a> <br />
        </div>

        <div class="col-md-4 ">
          <a href="admin-produits.php">  <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          > 
            <i class="fa fa-product-hunt" aria-hidden="true"></i> Gestion des
            produits
          </div> </a> <br />
        </div>
        <div class="col-md-4">
          <a href="gallery-admin.php">   <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          > 
            <i class="fa fa-picture-o" aria-hidden="true"></i> Gestion de
            Galerie des projets
          </div> </a> <br />
        </div>
        <br />
        <div class="col-md-4">
          <a href="client-fournisseur-admin.php">  <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          > 
            <i class="fa fa-user-o" aria-hidden="true"></i> Gestion de Clients /
            Fournisseurs
          </div></a>  <br />
        </div>

        <div class="col-md-4">
          <a href="evolution-admin.php">  <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          >
            <i class="fa fa-pie-chart" aria-hidden="true"></i> Gestion des
            Chiffres
          </div> </a> <br />
        </div>
        <div class="col-md-4">
          <a href="contact-admin.php">   <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          >
           <i class="fa fa-envelope-open" aria-hidden="true"></i> Gestion de
            Messages et FeedBacks
          </div></a>
        </div>
        <!-- <div class="col-md-4">
          <a href="sup-admin.php">   <div class="sha"
            style="box-shadow: 0 0.1rem 1rem rgba(0, 0, 0, 0.15); padding: 40px"
          >
           <i class="fa fa-exclamation-triangle " aria-hidden="true"></i> Super Admin
          </div></a>
        </div> -->
      </div>

      <hr />
      <p style="float: left; padding: 5px">
        Tous les droits sont réservés au FROID INTER
        <i
          class="fa fa-copyright"
          style="font-size: 15px"
          aria-hidden="true"
        ></i>
        2020
      </p>
    </div>
  </body>

  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.2.1.min.js"
  ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
