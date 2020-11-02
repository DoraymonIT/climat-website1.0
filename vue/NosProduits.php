<?php
require_once('database_connect.php');


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
    <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style/style.css" />
    <link
      rel="shortcut icon"
      href="../images/air-conditioner 1.png"
      type="image/x-icon"
    />
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet"> 


    <title>FROID INTER | Magazine de nos produits .</title>
  </head>

  <body>
    <div class="container-fluid">
    <?php include_once('header.php'); ?>
      <div class="row" >
        <div class="col-md-12">
          <h3
            style="
              text-align: center;
              color: #1b96db;
              padding: 20px;
            
            "
          >
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>

            Magasin des produits
          </h3>
          <!--<br />-->
          <div class="row">
          <?php
$products = $base->query('SELECT * FROM produits ');
foreach ($products as $data) :
?>
            <div class="col-md-4">
              <img src='<?php echo $data['image']; ?>' style="border-radius: 10px;" width="100%" alt="Produit <?php echo $data['id']; ?>">
              <!-- <br> -->
              <h4 style="text-align: center;padding-top: 20px;"> <b><?php echo $data['nom']; ?></b></h4>
              <br>
              <h6>
                <b>  Description</b> : <p><?php echo $data['description']; ?> </p>  
              </h6><br>
            </div>
            <?php endforeach; ?>
       
          </div>
          <br>
         
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
    class="back-to-top"
    role="button"
    ><i class="fa fa-chevron-up"></i
  ></a>
  <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-3.2.1.min.js"
  ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="../js/scroll.js"></script>
</html>
