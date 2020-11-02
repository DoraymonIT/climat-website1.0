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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css



"
    />
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

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>FROID INTER Admin| Gestions des produits</title>
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
        <div class="col-md-5">
          <h5  style="    text-align: center;
          background-color: cadetblue;
          padding: 10px;
          color: white;">Ajouter Un nouveau produit</h5>
          <br />
          <form method="post" action="ajout-member.php" enctype="multipart/form-data">
            <input class="voila" type="file" name="image" required />
            <br />
            <label for="">Libelle du produit</label>
            <input
              type="text"
              class="form-control" name="nom"
              placeholder="Libelle du produit"
              required
            />
            <br />
            <label for="">Description du produit</label>
            <textarea
              class="form-control"
              rows="4" name="description"
              placeholder="Description du produit"
            ></textarea>
            <br />
            <button type="submit" class="btn btn-success" name="submit-produit">Ajouter</button>
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
$products = $base->query('SELECT * FROM produits ');
foreach ($products as $data) :
?>
  <tr>
    <!-- <td></td> -->
    <td style="width: 200px;"><img class="img-fluid" src='<?php echo $data['image']; ?>'></td>
    <td><?php echo $data['nom'] ?></td>
    <td><?php echo $data['description'] ?></td>
    <td>  <a href="delete-produit.php?id=<?php echo $data['id'];
                                              ?>">
        <button type="submit" class="btn btn-sm btn-danger" >
          <i class="fa fa-trash" aria-hidden="true"></i>
        </button></a>
    </td>

  </tr>

<?php endforeach; ?>
</tbody>
          </table>
        </div>

        <!-- Modal -->
        <div
          class="modal fade"
          id="exampleModalCenter"
          tabindex="-1"
          role="dialog"
          aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-dialog-centered" role="document" style="height: auto ;">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Dialogue de Confirmation
                </h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" style="overflow-y: hidden;">
                Voulez-Vous Vraiment supprimer ce produit?
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-dismiss="modal"
                >
                  Annuler
                </button>
                <button type="button" class="btn btn-primary">
                  Oui, je veux
                </button>
              </div>
            </div>
          </div>
        </div>
        <div
          class="modal fade bd-example-modal-lg"
          tabindex="-1"
          role="dialog"
          aria-labelledby="myLargeModalLabel"
          aria-hidden="true"
        >
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nom produit</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-5">
                    <img src="../images/service1.png" width="100%" />
                  </div>
                  <div class="col-md-7">
                    <h4>Titre de Libelle : Libelle 1</h4>
                    <br />
                    <h4>Description :</h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Modi in aliquid fugiat sed rem deserunt culpa harum
                      quisquam quidem porro hic accusantium numquam, doloremque
                      quaerat natus laborum fugit. Non, ex.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"
  ></script>
  <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</html>
