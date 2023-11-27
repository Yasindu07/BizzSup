<!-- storing data in web server -->
<?php
    session_start();
?>
<html>
    <head>
        <title>BizzSup</title>

        <!-- Google font link for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        
        <!-- fontawesome link for social media icons in footer -->
        <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>

        <!-- css file -->
        <link rel="stylesheet" href="styles/aboutUS.css">
        

    </head>
    <body>
        <div class="us">
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
                    <div class="hello">
                        <!-- After login, display the log out button -->
                    <?php

                        if(isset($_SESSION['User_ID'])){
                            echo "Hello ";
                            echo $_SESSION['User_ID']; // display user's user id
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
            
        

        <section class="about">
            <div class="main2">
               <img src="images/about.jpg" alt="about">
               <div class="about-text">
                 <h1>WHO WE ARE</h1>
                 <P>“BizzSup” is designed for your business needs, offering range of services and solutions to help you overcome challengers and seize opportunities. This provides resources, blogs and expertise you need to grow and sustain your business.</P>
               </div>
            </div>
            

        </section>
        </div>
        <section class="team">
            <!-- slider -->
            <h2 class="team-memebers">Our Team</h2>
            <button class="pre-btn"><img src="images/arrow.png" alt="pre"></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt="next"></button>
            <div class="team-container">
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/inupa.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Inupa Udara</h2>
                        <p class="team-description">FOUNDER</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/team 2.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Chamindu WN</h2>
                        <p class="team-description">CO-FOUNDER</p>


                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/team3.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Chathumina Ruwindushan</h2>
                        <p class="team-description">BUSINESS ANALYIST</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/balaya.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Yasindu Kalhara</h2>
                        <p class="team-description">DIRECTOR</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/team5.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Kavinda Perera</h2>
                        <p class="team-description">HR MANAGER</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-image">
                        <img src="images/team 4.jpg" 
                        class="team-tumb" alt="t1">
                    </div>
                    <div class="team-info">
                        <h2 class="team-about">Emma Olivia</h2>
                        <p class="team-description">IT SPECIALIST</p>
                    </div>
                </div>
            </div>

        </section>

        <!-- js file -->
        <script src="javascript/script.js"></script>


      <!-- connecting footer.php file -->
<?php
include"footer.php";
?>