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
    $Record=mysqli_query($conn,"SELECT * FROM `consultant` WHERE Id=$ID");
    $data = mysqli_fetch_array($Record);

    ?>
    <div class="admin-container">

    <div class="update-staff">
    <form action="update1.php" method="POST" enctype="multipart/form-data">
        <h2>Update Details</h2>
        
        <label for="consultantName">Name:</label>
        <input type="text" value="<?php echo $data['Name']?>" name="name"><br>
        <label for="expertise" name="expertise">Expertise</label>
        <input type="text" name="expertise" value="<?php echo $data['Expertise']?>"><br>
        <label for="">Image:</label>
        <td></td><input type="file" name="image" value="<?php echo $data['Image']?>"><img src="<?php echo $data['Image']?>"width='110px'height='110px'></td><br><br>
        <input type="hidden" name="Id" value="<?php echo $data['Id']?>">
        <button name='update'>Update</button>
    </form>
    </div>
    </div>
    
</body>

</html>