<!-- storing data in web server -->
<?php
    session_start();
?>
<?php
    //database connection
    include_once('inc/conn.php');
?>
<?php

    if(isset($_POST['submit'])){

        $Uname = "";
        $Uid = "";
        $Uemail = "";
        $Ucmnt = "";
        //collect data
        $Uname = input_varify($_POST['customername']);
        $Uid = input_varify($_POST['customerID']);
        $Uemail = input_varify($_POST['customeremail']);
        $Ucmnt = input_varify($_POST['review']);

        //insert data into feedback table
        $query = "INSERT INTO feedback(U_Name,U_ID,U_email,U_Cmnt,F_DT) VALUES(
            '{$Uname}','{$Uid}','{$Uemail}','{$Ucmnt}',NOW()
        )";

        $fresult = mysqli_query($conn, $query);

        if($fresult){
            echo '<script type="text/javascript">
                window.onload = function () {alert("Your Feedback is Submited Thank You!"); }
            </script>';
        }
        else{
            echo mysqli_errno($conn);
        }

    }
    //verify
    function input_varify($Udata){

        $Udata = trim($Udata);
        $Udata = stripslashes($Udata);
        $Udata = htmlspecialchars($Udata);

        return $Udata;
    }
?>
<html>
    <head>
    <title>Feedback</title>

        <!-- google font for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">

        <!-- css files -->
        <link rel="stylesheet" href="./styles/rate.css">
        <link rel="stylesheet" href="./styles/form.css">
        <link rel="stylesheet" href="styles/header.css">
        <link rel="stylesheet" href="styles/footer.css">

        <!-- fontawesome link for social media icons -->
        <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>

        
    

    </head>
<body>
<div class="con">
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
        </div>
    
    <?php
        if(isset($_SESSION['User_ID']))
        {
            echo '<div class="Feedback-form">
            <h1>Your Feedback</h1>
            <form action="feedback.php" method="POST" autocomplete="off">
                <p>Your Name : </p>
                <input type="text" name="customername" id = "customername" placeholder="Enter name">
                <p>Your ID : </p>
                <input type="text" name="customerID"  id = "customerID" placeholder="ID***">
                <p>Your email : </p>
                <input type="text" name="customeremail" id = "customeremail" placeholder="@gmail.com">
                <div class="box">
                    <p>How satisfied are you with our site?</p>
                    <div class="Rating">
                        <input type="radio" name="rating" id="rate10">
                        <label for="rate10">10</label>
                        <input type="radio" name="rating" id="rate9">
                        <label for="rate9">9</label>
                        <input type="radio" name="rating" id="rate8">
                        <label for="rate8">8</label>
                        <input type="radio" name="rating" id="rate7">
                        <label for="rate7">7</label>
                        <input type="radio" name="rating" id="rate6">
                        <label for="rate6">6</label>
                        <input type="radio" name="rating" id="rate5">
                        <label for="rate5">5</label>
                        <input type="radio" name="rating" id="rate4">
                        <label for="rate4">4</label>
                        <input type="radio" name="rating" id="rate3">
                        <label for="rate3">3</label>
                        <input type="radio" name="rating" id="rate2">
                        <label for="rate2">2</label>
                        <input type="radio" name="rating" id="rate1">
                        <label for="rate1">1</label>
                    
                    </div>
                </div>
                <p>What do you think about our Service?</p>
                <textarea name="review" id = "review" style="width:300px;height: 100px;"></textarea><br>
                <button type="submit" name= "submit">Submit Feedback</button>
            </form>
        </div>';
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