<?php
include_once('inc/conn.php');

if(isset($_POST['update']))
{
    //collect new data 
    $ID=$_POST['Id'];
    $comment=$_POST['cmnt'];
  

    //update data
    mysqli_query($conn,"UPDATE `feedback` SET `U_Cmnt`='$comment' WHERE F_ID='$ID'");
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
    $Record=mysqli_query($conn,"SELECT * FROM `feedback` WHERE F_ID=$ID");
    $data = mysqli_fetch_array($Record);

    ?>
    <div class="admin-container">

    <div class="update-staff">
    <form action="update_feed.php" method="POST">
        <h2>Feedback Details</h2>
        
        <label>Comment:</label>
        <input type="text" value="<?php echo $data['U_Cmnt']?>" name="cmnt"><br>
        <input type="hidden" name="Id" value="<?php echo $data['F_ID']?>">
        <button name='update'>Update</button>
    </form>
    </div>
    </div>
    
</body>

</html>