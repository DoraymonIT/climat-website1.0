<?php
ob_start();
session_start();
if (!empty($_SESSION['username'])) {
  header('location: admin.php');
}
?>
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


  <title>FROID INTER | Login Page</title>
</head>

<body>
  <div class="container-fluid" style=" height: 100%;background-color: whitesmoke;">
    <div class="row" style="padding-top: 20px;">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="alert alert-info" role="alert" style="text-align: center;">
          <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention,</strong> Veuillez saisir <strong>email</strong> et <strong> mot de passe</strong> pour s authentifier , sinon cliquez ici :
          <strong><i class="fa fa-home    "></i>
            <a href="index.php"> Acceuil .</a></strong>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <div class="row" style="padding-top: 110px;">
      <div class="col-md-4"></div>
      <div class="col-md-4">
    
        <?php if (isset($_SESSION['wrong'])): ?>
          <div class="alert alert-danger" role="alert" style="text-align: center;">
               <?php echo $_SESSION['wrong'] ?>    </div>
              <?php endif ?>
           


     
      </div>
      <div class="col-md-4"></div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 shadow">

        <div class="row">
          <div class="col-md-12" style="text-align: center;">
          <img src="../images/voila-logo.png" class="img" alt="logo" height="85px" />
            <br>
          </div>
        </div>

        <form action="login-process.php" method="post">
          <label for="">
            <i class="fa fa-envelope-o" aria-hidden="true"></i> Email</label>
          <input type="email" name="username" class="form-control btn-block" placeholder="Email@gmail.com" required />
          <br />
          <label for="">
            <i class="fa fa-lock" aria-hidden="true"></i> Password</label>
          <input type="password" name="password" class="form-control" placeholder="*********" required />
          <hr>
          <button id="button1" class="btn btn-block btn-success" type="submit" name="login-submit" onclick="loadingEvent()">
            Se connecter
          </button>
          <button id="button2" class="btn btn-block btn-success" disabled style="display: none;cursor: not-allowed;">
            <i class="fa fa-spinner fa-spin"></i>
          </button>

        </form>
      </div>
      <div class="col-md-4"></div>
    </div>

    <hr />
    <p style="float: left; padding: 5px">
      Tous les droits sont réservés au FROID INTER
      <i class="fa fa-copyright" style="font-size: 15px" aria-hidden="true"></i>
      2020
    </p>
  </div>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  var b1 = document.getElementById('button1');
  var b2 = document.getElementById('button2');

  function loadingEvent() {
    b1.style.display = 'none';
    b2.style.display = 'block';
  }
</script>

</html>