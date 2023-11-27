<?php
    session_start();
?>
<?php
    
    if(isset($_POST['login'])){

        $userid = "";
        $password = "";
 
        //collect data
        $userid = input_varify($_POST['userid']);
        $password = input_varify($_POST['password']);

      
        $query1 = "SELECT * FROM rej_user WHERE userID = '{$userid}' AND pwd = '{$password}' LIMIT 1";

        $ShowResult = mysqli_query($conn, $query1);

        if($ShowResult){

            if(mysqli_num_rows($ShowResult) == 1){

                $user = mysqli_fetch_assoc($ShowResult);
                $_SESSION['User_ID'] = $user['userID'];
                header("Location: index.php");
               
            }
            else{
                
                echo '<script type="text/javascript">
                      window.onload = function () {alert("Please Check your email or password"); }
                </script>';
            }
        }

    }


?>