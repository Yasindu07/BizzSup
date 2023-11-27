<?php
//database connection
include_once('inc/conn.php');
$ID=$_GET['Id'];
mysqli_query($conn,"DELETE FROM `rej_user` WHERE B_ID=$ID ");//delete data in rej_user table
header('location:admin_panel.php');

?>