<?php
    session_start();
?>
<html>
    <head>
    <title>Home</title>
    
    <!-- google font links for poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    
    <!-- fontawesome link for social media icon in footer -->
    <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>

    <!-- css file -->
    <link rel="stylesheet" href="styles/index.css">
    

    </head>
<body class="bg">
       
    <div class="navi">
        <nav> 
            <h2 class="logo">BizzSup</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Our_ser.php">Our Service</a></li>
                <li><a href="aboutUs.php">About Us</a></li>
                <li><a href="contactUs.php">Contact Us</a></li>
                
            </ul>
            <div class="main">
                <ul>
                <div class="hello">
                     <!-- After login, display the log out button -->
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


        <div class="content">
            <div class="info">
                <h2>We're here to support</h2>
                <p>Best supporter for any businesses</p>
                <a href="Our_Ser.php"class="btn">Support For Your Business</a>
            </div>
        </div>
    </div>
        
        <div class="content2">
            <h2 class="do">What We Do</h2>
                <div class="row">
                    <div class="box">
                        <img src="images/planning.jpg" alt="plan">
                        <h3>Starting a business</h3>

                    </div>
                    <div class="box">
                        <img src="images/managing.jpg" alt="plan">
                        <h3>Managing a business</h3>

                    </div>
                    <div class="box">
                        <img src="images/marketing.jpg" alt="plan">
                        <h3>Maketing & Development</h3>

                    </div>
                    <div class="box">
                        <img src="images/legal.jpg" alt="plan">
                        <h3>Solving Legal Issues</h3>
                    </div>
                </div>
        </div>

        <footer>
            <div class="rowfooter">
                <div class="col">
                    <h2 id="logo2"class="logo">BizzSup</h2>
                    <p>Best supporter for any businesses</p>

                    <!-- social media icons from fontawesome -->
                    <div class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>

                </div>
                <div class="col">
                    <h3>Contact Us</h3>
                    <p>425/A Bizzup,<br>
                        Highlevel road,Middeniya, Horopathana <br><br><br>
                        011 2 652 678 <br>
                        <a href="#">bizzaup23@gmail.com</a> 
                    </p>
                </div>
                <div class="col">
                    <h3>About Us</h3>
                    <p style="margin-bottom: 30px;"><a href="privacyPolicy.php">Privacy Policy</a><br><a href="termsAndCondition.php">Terms and Condition</a></p>
                    <h3>Thoughts  or Suggections?</h3>
                    <a href="feedback.php">Provide feedback</a>
                </div>
            </div>
        </footer>        
</body>
</html>