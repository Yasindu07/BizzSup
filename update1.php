<?php
//database connection
include_once('inc/conn.php');

    if(isset($_POST['update']))
    {
        //collect new data 
        $ID=$_POST['Id'];
        $name=$_POST['name'];
        $expert=$_POST['expertise'];
        $image=$_FILES['image'];
        $img_loc=$_FILES['image']['tmp_name'];
        $img_name=$_FILES['image']['name'];
        $img_des="uploadImage/".$img_name;
        move_uploaded_file($img_loc,'uploadImage/'.$img_name);

        //update data
        mysqli_query($conn,"UPDATE `consultant` SET `Name`='$name',`Expertise`='$expert',`Image`='$img_des' WHERE Id='$ID'");
        header("location:admin_panel.php");
        
    }

?>