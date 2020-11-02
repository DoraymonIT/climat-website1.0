<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM gallery WHERE id = '.$x.''); 
 
header('location:gallery-admin.php');
?>