<?php
require_once 'database_connect.php';
//Include database connection here
if($_POST['id']) {
    $id = $_POST['id'];
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
    $delete = $base->query('DELETE FROM gallery WHERE id='.$id.'');
    
    if($delete){
        echo "Succefuly Deleted";
        // header('location:gallery-admin.php');
    }
    else {
        echo "Try Again";
    }
}

    ?>
    

