<?php 
    require 'dbconnect.php';
?>

<html>
    <head>
        <title>CMS::LOG IN</title>
        <link rel="stylesheet" href="css/styles_login.css">
        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bowlby+One+SC|Coda" rel="stylesheet">
    </head>
    <body style="background-color:#2980b9">
        <div id="login-page-header">
            <b><h1 class="header-main-text"> CUET Medi-Tracker </h1></b>
        </div>

        <div id="main-wrapper"> 
            <h3 class="main-wrapper-top-text">Sign up for a new account</h3>
            <hr/>
            
            <div class="main-view-2"> 
                <center>
                    <form action="register.php" method="post">
                        <label>Username</label> 
                        <input type="text" class= "inputvalues-med" name="username" placeholder="Enter your username..." required> <br>
                        <label>ID</label> 
                        <input type="text" class= "inputvalues-med" name="std_id" placeholder="Enter your ID..." required> <br>
                        <label>Password</label> 
                        <input type="password" class="inputvalues-med" name="password" placeholder="Enter your password..." required> <br>

                        <label style="font-size:20px">Confirm password</label> 
                        <input type="password" class="inputvalues-med" name="confirm_password" placeholder="Type your password again..." required>

                        <input name="signup_btn" type="submit" id="register_btn" value="Sign up"> <br> 

                        <input type="button" onClick="location.href='/medical-tracker/index.php';"  id="back_btn" value="Back">
                    </form>
                </center>

                <?php 
                    if(isset($_POST['signup_btn'])){
                        $uname = $_POST['username'];
                        $id = $_POST['std_id'];
                        $pass = $_POST['password'];
                        $cpass = $_POST['confirm_password'];
                        if($pass == $cpass){
                            $query = "SELECT * FROM students WHERE username='$uname'";
                            $query_returned = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_returned) > 0){
                                echo '<script type="text/javascript"> alert("Username is already taken. Please choose another one.") </script>';
                            } else {
                                $ins_query = "INSERT INTO students(id, username, password) VALUES('$id','$uname', '$pass')";
                                $ins_query_run = mysqli_query($conn, $ins_query);

                                if($ins_query_run){
                                    echo '<script type="text/javascript"> alert("Registered successfully! You can login with your credentials now.") </script>';
                                }
                                else{
                                    echo '<script type="text/javascript"> alert("Something went wrong. Please refresh and try again.") </script>';
                                }
                            }
                        }
                    }
                ?>
            </div>
            
            <div class="side-view">
                <img alt="hospital-buildings.png" src="images/hospital-buildings.png" class="rounded-img-med" width=150px>
                <br>
                <img alt="doctor.png" src="images/doctor.png" width=150px>
            </div>
                
                
        </div>
    </body>
</html>