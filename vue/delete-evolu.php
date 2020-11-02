<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM ca WHERE id = '.$x.''); 
 
header('location:evolution-admin.php');
?>