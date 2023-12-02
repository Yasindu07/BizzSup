<?php
//database connection
include_once('inc/conn.php');
$ID=$_GET['Id'];
mysqli_query($conn,"DELETE FROM `feedback` WHERE F_ID=$ID ");//delete data in feedback table
header('location:admin_panel.php');

?>