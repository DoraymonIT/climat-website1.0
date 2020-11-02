<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM client_fournisseur WHERE id = '.$x.''); 
 
header('location:client-fournisseur-admin.php');
?>