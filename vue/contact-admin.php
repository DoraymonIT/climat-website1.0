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
  <title>FROID INTER Admin| Gestions des Messages de Contact Page</title>
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

      <div class="col-md-12">
        <h4 style="    text-align: center;
            background-color: cadetblue;
            padding: 20px;
            color: white;"> <i class="fas fa-envelope-open-text    "></i> Gestion des messages des clients du site web</h4>
        <table id="myTable" class="table table-hover table-striped table-bordered table-info table-responsive-lg">
          <thead class="thead-inverse">
            <tr>
              <th> <i class="fa fa-pencil" aria-hidden="true"></i> Sujet</th>
              <th> <i class="fa fa-user" aria-hidden="true"></i> Nom Complet</th>
              <th> <i class="fas fa-envelope-open    "></i> Email</th>
              <th> <i class="fas fa-phone    "></i> Telephone</th>
              <th> <i class="fa fa-map-marker" aria-hidden="true"></i> Adresse</th>
              <th> <i class="fas fa-mail-bulk    "></i> Etat</th>
              <th> <i class="fa fa-adjust" aria-hidden="true"></i> Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $contact = $base->query('SELECT * FROM contact ');
            foreach ($contact as $data) :
            ?>
              <tr>
                <td><?php echo $data['sujet'] ?></td>
                <td><?php echo $data['nom'] ?></td>
                <td> <?php if (empty($data['email'])) {
                        echo "-----------------";
                      }
                      echo $data['email'] ?></td>
                <td><?php echo $data['phone'] ?></td>
                <td><?php echo $data['adress'] ?></td>
                <td>
                  <span class="badge badge-success"> Vu</span>
                </td>
                <td>
                <a href="delete-contact.php?id=<?php echo $data['id'];
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
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>