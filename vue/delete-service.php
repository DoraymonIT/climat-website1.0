<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM services WHERE id = '.$x.''); 
 
header('location:sup-admin.php');
?>