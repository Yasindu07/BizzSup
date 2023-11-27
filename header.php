<!-- storing data in web server -->
<?php
    session_start();
?>
<html>
    <head>
    <title>BizzSup</title>
    
        <!-- google font links for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        
        <!-- fontawesome link for social media icons -->
        <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>

        <!-- css files -->
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/contactUS.css">

    </head>
    <body>
        <div class="navi">
        <nav> 
            <h2 class="logo">BizzSup</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Our_Ser.php">Our Service</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
                
            </ul>
            <div class="main">
            <ul>
                <!-- After login, display the log out button -->
                <div class="hello">
                    <?php

                        if(isset($_SESSION['User_ID'])){
                            echo "Hello ";
                            echo $_SESSION['User_ID'];// display user's user id
                            echo "<li><a href='log_out.php'>Log Out</a></li>";
                        }
                        else{
                            echo "<li><a href='login.php'>Log in / Register</a></li>";
                        }
                        
                    ?>
                </div>

                </ul>
            </div>
                   
            </nav>