<?php
    ob_start();
    session_start();
    // $db = mysqli_connect('localhost', 'root', '', 'climat');
        $db = mysqli_connect('localhost', 'id15118846_climatiseur', 'oYM5!C{p$^Vp7FY<', 'id15118846_climatt');

    if(!$db) {
        die('Connection failed: ' . mysqli_connect_error());
        echo "Die";
    }

    $errors = array();

    if(isset($_POST['login-submit'])) {
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = md5($password);

        // $query = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";
        $query = "SELECT * FROM user WHERE username='$username' AND password='$hashed_password'";

                $result = mysqli_query($db, $query);
        if  (!$result || mysqli_num_rows($result) === 1) {
            $_SESSION['username'] = $username;
            header('location: admin.php');
        } else {
            echo "Non";
            $_SESSION['wrong'] = " Oups !! <strong>Email</strong> ou <strong> Mot de passe </strong> Invalide !!";

            header('location: login.php');
        }
    }
?>

