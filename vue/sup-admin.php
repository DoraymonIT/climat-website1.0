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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css



" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- <link rel="stylesheet" href="../vondor/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../style/style.css" />
  <link rel="stylesheet" href="../style/sup.css" />
  <link rel="shortcut icon" href="../images/air-conditioner 1.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <title>FROID INTER Admin| Super Admin</title>
  <style>
    .voila {
      background-color: cadetblue;
      padding: 5px;
      border-radius: 6px;
      margin-bottom: 7px;
    }
  </style>
</head>

<body>
  <div class="container-fluid" style="padding: 20px;font-weight: 800;">
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
    <!-- Changer Nom de Site :
    Ajouter Les services de societe
    Modifier Numero Telephone , adresse , email ,s-m
    Changer photo de acceuil

    <br> -->

    <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist" style="padding-bottom: 50px;">
      <li class="nav-item">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
         aria-controls="pills-home" aria-selected="true"> <i class="fa fa-tags" aria-hidden="true"></i> Gestion des SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" 
        aria-controls="pills-profile" aria-selected="false"> <i class="fa fa-info-circle" aria-hidden="true"></i> Changer les infos de base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" 
        aria-controls="pills-contact" aria-selected="false"> <i class="fas fa-images    "></i> Changer Les Images</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5">
              <h5 style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Ajouter Un nouveau Service</h5>
              <br />
              <form method="post" action="ajout-member.php" enctype="multipart/form-data">
                Image : <input class="voila" type="file" name="image" required />
                <br />
                <label for="">Nom du service</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom du service" required />
                <br />
                <label for="">Description du service</label>
                <textarea class="form-control" rows="4" name="description" placeholder="Description du service" required></textarea>
                <br />
                <button type="submit" class="btn btn-success" name="submit-service">Ajouter</button>
              </form> <br>
            </div>
            <div class="col-md-7">
              <table id="myTable" class="table table-hover table-striped table-bordered">
                <thead class="thead-inverse">
                  <tr>
                    <th>Image</th>
                    <th>Libelle</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $services = $base->query('SELECT * FROM services ');
                  foreach ($services as $data) :
                  ?>
                    <tr>
                      <!-- <td></td> -->
                      <td style="width: 200px;"><img class="img-fluid" src='<?php echo $data['image']; ?>'></td>
                      <td><?php echo $data['nom'] ?></td>
                      <td><?php echo $data['description'] ?></td>
                      <td> <a href="delete-service.php?id=<?php echo $data['id'];
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
          </div>
        </div>

      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-6">
              <h5 style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Modifier les infos de base</h5>
              <br />
              <form method="post" action="ajout-member.php">

                <label for="">Nouveau Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="Nouveau Adresse" required />
                <br />
                <label for="">Nouveau Numero de Telephone 1</label>
                <input type="tel" class="form-control" name="tel1" placeholder="Nouveau Numero de Telephone" required />
                <br />
                <label for="">Nouveau Numero de Telephone 2</label>
                <input type="tel" class="form-control" name="tel2" placeholder="Nouveau Numero de Telephone"  />
                <br />
                <label for="">Nouveau Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nouveau Email" required />
                <br />
                <button type="submit" class="btn btn-success" name="submit-info">Modifier</button>
              </form> <br>

            </div>
            <div class="col-md-6" style="text-align: center;">
            <h5 style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Les Infos Actuel</h5>
              <br />
                <?php
            $info = $base->query('SELECT * FROM info ');
            foreach ($info as $data) :
            ?>
                <i class="fa fa-map-marker" aria-hidden="true"></i>   Adresse Actuel :  <?php echo $data['adresse'] ?> <hr>
                <i class="fas fa-phone    "></i> Numero de Telephone 1 :   <?php echo $data['phone1'] ?>  <hr>
                <i class="fas fa-phone    "></i> Numero de Telephone 2 :   <?php echo $data['phone2'] ?>  <hr>
                <i class="fas fa-mail-bulk    "></i> Email Actuel :   <?php echo $data['email'] ?>  <hr>
                <?php endforeach; ?>
              
            </div>
          </div>
        </div>



      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              Image Actuel : 
              <?php   $acc = $base->query('SELECT * FROM img_acc ');
            foreach ($acc as $data) : ?>
              <img class="img-fluid" src='<?php echo $data['image_accueil']; ?>'>
                <?php endforeach; ?>
            </div>
            <div class="col-md-6">
            <h5 style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Changer des Images </h5>
              <br />
              <form method="post" action="ajout-member.php" enctype="multipart/form-data">
                Image d acceuil : <input class="voila" type="file" name="image" required />
                <br />
                <button type="submit" class="btn btn-success" name="submit-acceuil">Changer</button>
              </form> <br>
               <hr>
               <form method="post" action="ajout-member.php" enctype="multipart/form-data">
                Image de Logo : <input class="voila" type="file" name="image" required />
                <br />
                <button type="submit" class="btn btn-success" name="submit-logo">Changer</button>
              </form> <br>
              <hr>
              <i class="fas fa-image    "></i> Logo Actuel : 
              <?php   $logo = $base->query('SELECT * FROM img_logo');
            foreach ($logo as $data) : ?>
              <img class="img-fluid" style="height: 110px;" src='<?php echo $data['image_logo']; ?>'>
                <?php endforeach; ?>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>

</html>