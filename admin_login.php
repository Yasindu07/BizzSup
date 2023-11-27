<!-- database connection -->
<?php
    include_once('inc/conn.php');
?>
<html>
    <head>
        <title>Admin Login</title>

        <!-- google font links for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        
        <!-- css file -->
        <link rel="stylesheet" href="styles/adminLogin.css">

    </head>
    <body>
        <div class="admin-container">
            
            <div class="admin-form">
                <form method="POST">
                    <h2>Admin Login</h2>
                    <input type="text" placeholder="Admin Name" name="adminName">
                    <input type="password" placeholder="Password" name="adminPassword">
                    <button type="submit" name="signin">LOGIN</button>

                    
                </form>
            </div>
            <div class="admin-image">
                <img src="images/desk-office.jpg" width="300px">
            </div>
        </div>
        <!-- Before login to admin_panel, insert values into Admin_name and Admin_password in admin_login table by phpmyadmin -->
        <?php
        if(isset($_POST['signin']))
        {
            // Admin_name and Admin_password select form admin_login table
            $query="SELECT * FROM `admin_login` WHERE `Admin_name`='$_POST[adminName]' AND `Admin_Password`='$_POST[adminPassword]'";
            $result= mysqli_query($conn,$query);
            if(mysqli_num_rows($result)==1){
                session_start();
                $_SESSION['AdminLoginId']=$_POST['adminName'];
                header("location:admin_panel.php");
            }
            else{
                echo "<script>alert('Incorrect Password')</script>";
            }


        }
        ?>
    </body>
</html>