<?php
include_once('inc/conn.php');

if(isset($_POST['update']))
{
    //collect new data 
    $ID=$_POST['Id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['password'];
  

    //update data
    mysqli_query($conn,"UPDATE `rej_user` SET `userID`='$name',`email`='$email',`pwd`='$pw' WHERE B_ID='$ID'");
    header("location:admin_panel.php");
    
}


?>

<html>
    <head>
        <title>Update</title>

        <!-- google font links for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        
        <!-- css file -->
        <link rel="stylesheet" href="styles/update.css">
    </head>
<body>
    <?php
    //database connection
    include_once('inc/conn.php');
    $ID=$_GET['Id'];

    //select data from consultant table
    $Record=mysqli_query($conn,"SELECT * FROM `rej_user` WHERE B_ID=$ID");
    $data = mysqli_fetch_array($Record);

    ?>
    <div class="admin-container">

    <div class="update-staff">
    <form action="update_user.php" method="POST">
        <h2>Update User Details</h2>
        
        <label>UserID:</label>
        <input type="text" value="<?php echo $data['userID']?>" name="name"><br>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $data['email']?>"><br>
        <label>Password:</label>
        <input type="text" name="password" value="<?php echo $data['pwd']?>"><br><br>
        <input type="hidden" name="Id" value="<?php echo $data['B_ID']?>">
        <button name='update'>Update</button>
    </form>
    </div>
    </div>
    
</body>

</html>