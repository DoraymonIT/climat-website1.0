<?php require_once'database_connect.php';
 $x = $_GET['id'];

 $ssss = $base->query('DELETE FROM contact WHERE id = '.$x.''); 
 
header('location:contact-admin.php');
?>