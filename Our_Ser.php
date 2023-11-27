<?php
    session_start();
?>
<html>
<head>
    
    <title>Our Service</title>

    <!-- css file -->
    <link rel="stylesheet" href="styles/Our_style.css">

    <!-- Google font link for poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- fontawesome link for socail media icons -->
    <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>
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
                    <?php

                        if(isset($_SESSION['User_ID'])){
                            echo "Hello ";
                            echo $_SESSION['User_ID'];//display user's user id
                            echo "<li><a href='log_out.php'>Log Out</a></li>";
                        }
                        else{
                            echo "<li><a href='login.php'>Log in / Register</a></li>";
                        }
                        
                    ?>

                </ul>
            </div>
            
        </nav>
        <?php
            if(isset($_SESSION['User_ID']))
            {
                echo '<section id="service">
                <div class="service-heading">
                    <h3>OUR SERVICE</h3>
                </div>
        
                <div class="service-container">
        
                    <div class="service-box">
        
                        <div class="service-img">
                            <img src="./images/service/Learn.jpg" alt="Solving Legal Issues">
                        </div>
        
                        <div class="service-text">
                            <span>Solving Legal Issues</span>
                            <a href="#" class="service-title">How to Solve Legal Issues in your business?</a>
                            <p>Solving legal issues for businesses involves a comprehensive approach to address and resolve various legal challenges that arise in the course of their operations. This process entails identifying the legal issues at hand, conducting in-depth research and analysis, consulting with legal experts, developing strategic plans, implementing necessary actions, ensuring compliance, monitoring ongoing risks, and conducting regular legal reviews. By following this structured approach and seeking professional legal guidance when needed, businesses can effectively navigate legal complexities, mitigate risks, and safeguard their interests in a constantly evolving legal landscape.</p>
                            <a href="blogC/blog1.php">See More</a>
                        </div>
        
        
                    </div>
                    <div class="service-box">
        
                        <div class="service-img">
                            <img src="./images/service/Marketing.jpg" alt="Solving Legal Issues">
                        </div>
        
                        <div class="service-text">
                            <span>Marketing & Development</span>
                            <a href="#" class="service-title">How to Marketing & Development your business?</a>
                            <p>To effectively market and develop your business, it is crucial to understand your target audience and create a strong brand identity. Building a professional website and optimizing it for search engines will enhance your online presence. Engaging with your audience through social media platforms and implementing content marketing strategies will help you establish yourself as a trusted authority in your industry. By consistently delivering valuable content and promoting your brand, you can attract and retain customers, ultimately driving growth for your business.</p>
                            <a href="blogC/blog2.php">See More</a>
                        </div>
        
                    </div>
                    <div class="service-box">
        
                        <div class="service-img">
                            <img src="./images/service/Manage.jpg" alt="Solving Legal Issues">
                        </div>
        
                        <div class="service-text">
                            <span>Managing a business</span>
                            <a href="#" class="service-title">How to manage your business properly?</a>
                            <p>Proper business management is essential for success. It involves setting clear goals, developing a strategic plan, and building a competent team. Efficient processes, careful financial monitoring, and effective communication are key aspects of effective management. Staying updated on industry trends, embracing innovation, and prioritizing customer satisfaction are crucial. Regular evaluation, adaptation, and learning from mistakes are essential for maintaining agility and driving growth. With effective management practices in place, businesses can navigate challenges, seize opportunities, and achieve sustainable success.</p>
                            <a href="blogC/blog3.php">See More</a>
                        </div>
        
                    </div>
                    <div class="service-box">
        
                        <div class="service-img">
                            <img src="./images/service/Planing.jpg" alt="Solving Legal Issues">
                        </div>
        
                        <div class="service-text">
                            <span>Starting a business</span>
                            <a href="#" class="service-title">How to start a successful new business?</a>
                            <p>Starting a successful new business involves thorough planning, securing financing, and building a strong brand. Conduct market research to identify a viable business idea, develop a comprehensive business plan, and register your business appropriately. Establish a professional network and set up the necessary infrastructure to support your operations. Create a compelling brand identity and implement a targeted marketing strategy to attract customers. Focus on providing exceptional customer service and continuously monitor your businesss performance, adapting as needed to stay competitive. With determination and adaptability, you can increase your chances of starting a successful new business.</p>
                            <a href="blogC/blog4.php">See More</a>
                        </div>
        
                    </div>
        
                </div>
            </section>';
            }
            else{
                header("Location: login.php");
            }
        ?>
    
    </div>
    </body>
    <footer>
            <div class="rowfooter">
                <div class="col">
                    <h2 id="logo2"class="logo">BizzSup</h2>
                    <p>Best supporter for any businesses</p>
                    <div class="social-icon">
                    <!-- socail media icons -->
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

</html>