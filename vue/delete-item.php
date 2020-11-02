<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM peoples WHERE id = '.$x.''); 
 
header('location:equipe-admin.php');
?>