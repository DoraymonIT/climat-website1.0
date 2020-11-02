<?php
require_once('database_connect.php');
$x = $_GET['id'];
//  echo "x egal a :";
// echo $x ;
$details = $base->query('SELECT * FROM gallery WHERE id = ' . $x . '');

foreach ($details as $detail) :
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


        <title>
            FROID INTER | Gallerie de nos projets avec des photos exclusives
        </title>
    </head>

    <body>
        <div class="container-fluid" style="background-color: whitesmoke;">
            <?php include_once('header.php'); ?>
            <div class="row">
                <div class="col-md-4">
                    <h3   style="
              text-align: center;
              color: #1b96db;
              padding: 20px;
            
            ">Informations</h3>
                    <!--<br>-->
                    <h5> <i class="fa fa-user" aria-hidden="true"></i> Client : <b> <?php echo $detail['client'] ?> </b></h5> <br>

                    <h5> <i class="fa fa-flag-checkered" aria-hidden="true"></i> Pays ou Ville de projet :

                        <b><?php echo $detail['pays'] ?></b> </h5><br>
                    <h5 style="line-height: 40px;"> <i class="fa fa-paragraph" aria-hidden="true"></i> Description : <b> <?php echo $detail['description'] ?></b></h5>
                </div>
                <div class="col-md-8">
                    <h3  style="
              text-align: center;
              color: #1b96db;
              padding: 20px;
            
            ">Gallerie des PHOTOS</h3>
                    <!--<br>-->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src='<?php echo $detail['image1']; ?>' alt="First slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="titreee">Titre : <?php echo $detail['description'] ?></h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src='<?php echo $detail['image2']; ?>' alt="Second slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="titreee">Titre : <?php echo $detail['description'] ?></h5>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src='<?php echo $detail['image3']; ?>' alt="Third slide" />
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="titreee">Titre : <?php echo $detail['description'] ?></h5>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" style="background-color: black;
    padding: 20px;
    border: 5px solid cadetblue;" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" style="background-color: black;
    padding: 20px;
    border: 5px solid cadetblue;" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-md-2"></div> -->
            </div>
            <br />
        <?php endforeach; ?>
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

    <script src="../js/scroll.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </html>