<?php
//include db connection
include_once('inc/conn.php');

    if(isset($_POST['upload']))
    {   
        //collect data 
        $name=$_POST['name'];
        $expert=$_POST['expertise'];
        $image=$_FILES['image'];
        $img_loc=$_FILES['image']['tmp_name'];
        $img_name=$_FILES['image']['name'];
        $img_des="uploadImage/".$img_name;
        move_uploaded_file($img_loc,'uploadImage/'.$img_name);


        //insert data into consultant table
        mysqli_query($conn,"INSERT INTO `consultant`(`Name`, `Expertise`, `Image`) VALUES ('$name','$expert','$img_des')");
        header('location:admin_panel.php');


    }
?>
