<?php
require_once('database_connect.php');
ob_start();
session_start();
if (empty($_SESSION['username'])) {
  header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css



" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="shortcut icon" href="../images/air-conditioner 1.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <title>FROID INTER Admin| Ajouter un projet au Galerie</title>
  <style>
    .voila {
      background-color: cadetblue;
      padding: 5px;
      border-radius: 6px;
      margin-bottom: 7px;
    }

    @media (min-width: 576px) {
      .modal-dialog {
        max-width: 1000px;
        /* /* margin: 1.75rem auto; */
      }
    }
  </style>
</head>

<body>

  <div class="container-fluid" style="padding: 20px">
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
    <?php include_once('header-admin.php') ?>
    <div class="row">
      <div class="col-md-6">
        <h5  style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Ajouter Un nouveau projet au Galerie</h5>
        <br />
        <form method="post" action="ajout-member.php" enctype="multipart/form-data">
          <h6>Images de Gallerie</h6>
          <input class="voila" type="file" accept="image/*" name="image1" />
          <br />
          <input class="voila" type="file" accept="image/*" name="image2" />
          <br />
          <input class="voila" type="file" accept="image/*" name="image3" />
          <br />
          <label for="">Pays du projet</label>
          <input type="text" class="form-control" name="pays" placeholder="Pays du produit" required />
          <br />
          <label for="">Nom du client</label>
          <input type="text" class="form-control" name="client" placeholder="Nom du client" required />
          <br />
          <label for="">Description du projet</label>
          <textarea class="form-control" rows="4" name="description" placeholder="Description du produit"></textarea>
          <br />
          <button type="submit" name="submit-gallery" class="btn btn-success">Ajouter</button><br>
        </form><br>

      </div> <br>
      <div class="col-md-6"></div>
      <div class="col-md-12">
        <h6 style="color: red;" class="form-data"></h6>
        <table id="myTable" class="table table-hover table-striped" style="text-align: center;">
          <thead class="thead-inverse">
            <tr>
              <th>Image1</th>
              <th>Image2</th>
              <th>Image3</th>
              <th>Pays</th>
              <th>Client</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $select1 = $base->query('SELECT * FROM gallery ');
            foreach ($select1 as $data) :
            ?>
              <tr>
                <!-- <td></td> -->
                <td style="width: 200px;"><img class="img-fluid" src='<?php echo $data['image1']; ?>'></td>
                <td style="width: 200px;"><img class="img-fluid" src='<?php echo $data['image2']; ?>'></td>
                <td style="width: 200px;"><img class="img-fluid" src='<?php echo $data['image3']; ?>'></td>
                <td><?php echo $data['pays'] ?></td>
                <td><?php echo $data['client'] ?></td>
                <td> <a href="delete-gallery.php?id=<?php echo $data['id'];
                                              ?>">
                    <button type="submit" class="btn btn-sm btn-danger">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button></a>
                </td>

              </tr>

            <?php endforeach; ?>
          </tbody>

        </table>
      </div>
      <!-- <div class="modal fade bd-example-modal-lg" id="editBox" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="height: 100%;">

          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nom du projet : </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div id=" carouselExampleIndicators" class="form-data carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <img class="d-block w-100 img-fluid" alt="First slide" src='<?php echo $data['image1']; ?>'>
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="titreee">Titre : <?php echo $data['description']; ?></h5>
                    </div>
                  </div>
                  <div class="carousel-item">

                    <img class="d-block w-100 img-fluid" alt="First slide" src='<?php echo $data['image2']; ?>'>
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="titreee">Titre : <?php echo $data['description']; ?></h5>
                    </div>
                  </div>
                  <div class="carousel-item">

                    <img class="d-block w-100 img-fluid" alt="First slide" src='<?php echo $data['image3']; ?>'>
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="titreee">Titre : <?php echo $data['description']; ?></h5>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
  //jQuery Library Comes First
  //Bootstrap Library
  $(document).ready(function() {
    $('.open-modal').click(function() {
      var id = $(this).attr('id');
      $.ajax({
        type: 'post',
        url: 'file.php', //Here you should run query to fetch records
        data: 'id=' + id, //Here pass id via 
        success: function(data) {
          $('.form-data').html(data);
          setTimeout(function() { // wait for 5 secs(2)
            location.reload(); // then reload the page.(3)
          }, 800);

        }
      });
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
  
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>