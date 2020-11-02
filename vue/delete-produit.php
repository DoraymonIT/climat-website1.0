<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM produits WHERE id = '.$x.''); 
 
header('location:admin-produits.php');
?>