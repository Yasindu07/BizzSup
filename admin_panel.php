<?php
    //give access to admin_panel by only login with admin_login
    session_start();
    if(!isset($_SESSION['AdminLoginId']))
    {
        header("location:admin_login.php");
    }
?>
<html>
    <head>
        <title>Admin panel</title>
        
        <!-- google font links for poppins font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Poppins:wght@500&display=swap" rel="stylesheet">
        
        <!-- css file -->
        <link rel="stylesheet" href="styles/adminPanel.css">
        

    </head>

    <body>
        <div class="admin-header">
            <h2 class="logo">BizzSup</h2>
            <!-- display admin name -->
            <h1>ADMIN PANEL - <?php echo $_SESSION['AdminLoginId']?></h1>
            <li>
                <a href="#">Manage Blogs</a>
                <ul class="dropdown">
                    <li><a href="blogC/index.php">Blog Panel 1</a></li>
                    <li><a href="blogC/blog2_panel.php">Blog Panel 2</a></li>
                    <li><a href="blogC/blog3_panel.php">Blog Panel 3</a></li>
                    <li><a href="blogC/blog4_panel.php">Blog Panel 4</a></li>
                </ul>
            </li>
            
            <form method="post">
            
                <button name="logout">LOG OUT</button>
            </form>
            
        </div>
        
        <div class="admin-container">
            <div class="add-staff">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <h2>Add Agents</h2>
                    <label for="consultantName">Name:   </label>
                    <input type="text" name="name"><br>
                    <label for="expertise" name="expertise">Expertise:</label>
                    <input type="text" name="expertise" id=""><br>
                    <label for="">Profile Picture:</label>
                    <input type="file" name="image" id=""><br>
                    <button name='upload' class="up">Upload</button>
                    
                </form>
            </div>
        </div>
        <div class="table-section">
        <table>
            <thead>
            
                <tr class="row1">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Expertise</th>
                    <th scope="col">Profile Picture</th>
                    <th scope="col">Action</th>
                    
                </tr>
            </thead>
            

                <?php
                //database connection
                include_once('inc/conn.php');
                $pic=mysqli_query($conn,"SELECT * FROM `consultant`");//select data from consultant table
                while ($row=mysqli_fetch_array($pic)) {
                    //display data in consultant table
                    echo"
                    <tbody>
                    <tr>
                        <td>$row[Id]</td>
                        <td>$row[Name]</td>
                        <td>$row[Expertise]</td>
                        <td><img src='$row[Image]'></td>
                        <td>
                            <button><a href='delete.php? Id=$row[Id]'>Delete</a></button>
                            <button><a href='update.php? Id=$row[Id]'>Update</a></button>
                        </td>
                    </tr>
                    </tbody>
                    ";
                }
                ?>
            
        </table>
        </div>

        <h2 class="headings">User Accounts</h2>
        <div class="table-section">
            <table>
                <thead>
                <tr class="row1">
                    <th scope="col">UserId</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Registered Data</th>
                    <th scope="col">Action</th>
                    
                </tr>
                </thead>

                <?php
                //database connection
                include_once('inc/conn.php');
                $profile=mysqli_query($conn,"SELECT * FROM `rej_user`");//select data from rej_user table
                while ($user=mysqli_fetch_array($profile)) {
                    //display data in rej_user table
                    echo"
                    <tbody>
                    <tr>
                        <td>$user[userID]</td>
                        <td>$user[email]</td>
                        <td>$user[pwd]</td>
                        <td>$user[Reg_DT]</td>
                        <td>
                            <button><a href='delete_user.php? Id=$user[B_ID]'>Delete</a></button>
                            <button><a href='update_user.php? Id=$user[B_ID]'>Update</a></button>
                        </td>
                    </tr>
                    </tbody>
                    ";
                }
                ?>
            </table>
        </div>


        <h2 class="headings">Feedbacks</h2>
        <div class="table-section">
            <table>
                <thead>
                <tr class="row1">
                    <th scope="col">Name</th>
                    <th scope="col">UserID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Action</th>
                    
                </tr>
                </thead>

                <?php
                //database connection
                include_once('inc/conn.php');
                $feedback=mysqli_query($conn,"SELECT * FROM `feedback`");//select data from feedback table
                while ($user_f=mysqli_fetch_array($feedback)) {
                    //display data in feedback table
                    echo"
                    <tbody>
                    <tr>
                        <td>$user_f[U_name]</td>
                        <td>$user_f[U_ID]</td>
                        <td>$user_f[U_email]</td>
                        <td>$user_f[U_Cmnt]</td>
                        <td>
                            <button><a href='delete_feed.php? Id=$user_f[F_ID]'>Delete</a></button>
                            <button><a href='update_feed.php? Id=$user_f[F_ID]'>Update</a></button>
                        </td>
                    </tr>
                    </tbody>
                    ";
                }
                ?>
            </table>
        </div>

        <h2 class="headings">Contact Details</h2>
        <div class="table-section">
            <table>
                <thead>
                <tr class="row1">
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    
                </tr>
                </thead>

                <?php
                //database connection
                include_once('inc/conn.php');
                $contact=mysqli_query($conn,"SELECT * FROM `usercontact`");//select data from usercontact table
                while ($user_con=mysqli_fetch_array($contact)) {
                    //display data in usercontact table
                    echo"
                    <tbody>
                    <tr>
                        <td>$user_con[full_name]</td>
                        <td>$user_con[email]</td>
                        <td>$user_con[text]</td>
                        <td>
                            <button><a href='delete_contact.php? Id=$user_con[ID]'>Delete</a></button>
                            <button><a href='update_contact.php? Id=$user_con[ID]'>Update</a></button>
                        </td>
                    </tr>
                    </tbody>
                    ";
                }
                ?>
            </table>
        </div>

<!-- logout and link to admin login -->
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header("location:admin_login.php");
}
?>
    </body>

</html>