<?php
try {
  // $base = new PDO('mysql:host=localhost; dbname=climat;port=3306', 'root', '');
  $base = new PDO('mysql:host=localhost; dbname=id15118846_climatt;port=3306', 'id15118846_climatiseur', 'oYM5!C{p$^Vp7FY<');
  //  echo ("Bien Connecte");

} catch (exception $e) {
  die('Erreur ' . $e->getMessage());
}
return $base;

?>
<!-- Q$B8ZbGs_mPRe.8

climat

est db4free.net et le port est 3306. -->