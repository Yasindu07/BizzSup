<?php 
    //database connection
    include_once('inc/conn.php');
?>
<?php
    
    if(isset($_POST['submit'])){

        $userid = "";
        $email = "";
        $password = "";
 

        $userid = input_varify($_POST['userid']);
        $email = input_varify($_POST['email']);
        $password = input_varify($_POST['password']);

        $query1 = "SELECT * FROM rej_user WHERE userID = '{$userid}' AND email = '{$email}'";

        $ShowResult = mysqli_query($conn, $query1);

        if($ShowResult){

            if(mysqli_num_rows($ShowResult) == 1){

                echo '<script type="text/javascript">
                       window.onload = function () {alert("Sorry! This user already have in this system"); }
                </script>';
            }
            else{
                $query = "INSERT INTO rej_user(userID,email,pwd,Reg_DT) VALUES(
                    '{$userid}','{$email}','{$password}',NOW()
                )";
        
                $result = mysqli_query($conn, $query);
        
                if($result){
                    echo '<script type="text/javascript">
                          window.onload = function () {alert("Registration Successfully"); }
                    </script>';
                }
                else{
                    echo mysqli_error($conn);
                }
            }
        }

    }

    function input_varify($data){
        //Remove empty space from user input
        $data = trim($data);
        //Remove back slash from user input
        $data = stripslashes($data);
        //conver special chars to html entities
        $data = htmlspecialchars($data);

        return $data;
    }

?>
<?php 
    include('log.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login and sign up</title>

         <!-- google font links for poppins font -->
        <link rel="stylesheet" href="styles/login.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8a45cec2d1.js"></script>
        
    </head>
<body>

    <div class="navig">
        
        <h2 class="logo">BizzSup</h2>
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="images/1.png">
                    <img src="images/2.png">
                    <img src="images/3.png">
                </div>
                <form id="login" class="input-group" action= "login.php" method= "POST" autocomplete= "off">
                    <input type="text" name="userid" id="userid" class="input-field" placeholder="User Id" required>
                    <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box"><span>Remember Pasword</span>
                    <button type="login" name="login" class="submit-btn">Log in</button>
                </form>
                <form id="register" class="input-group" action= "login.php" method= "POST" autocomplete= "off">
                    <input type="text" name="userid" id="userid" class="input-field" placeholder="User Id" required>
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email" required>
                    <input type="password" name="password" id="password" class="input-field" placeholder="Enter Password" required>
                    <input type="checkbox" class="check-box" required><span><a href="termsAndCondition.php"> I agree to the terms & conditions </a></span>
                    <button type="submit" name="submit" class="submit-btn">Register</button> 
                </form>
            </div>
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
                
    </div>
    
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
    <script>
        var modal = document.getElementById(login-form);
        window.onclick = function(event)
        {
            if(event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
    
</body>
</html>