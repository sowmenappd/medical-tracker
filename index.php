<?php
    session_start();
    require 'dbconnect.php';
?>
<html>
    <head>
        <title>CMS::LOG IN</title>
        <link rel="stylesheet" href="css/styles_login.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Bowlby+One+SC|Coda">
    </head>
    <body style="background-color:#2980b9">
        <div id="login-page-header">
            <b><h1 class="header-main-text"> CUET Medi-Tracker </h1></b>
        </div>

        <div id="main-wrapper"> 
            <h3 class="main-wrapper-top-text">Log in to your account</h3>
            <hr/>
            <div class="main-view"> 
                <center>
                    <form action="index.php" method="post">
                        <label>Username</label> 
                        <br>
                        <input type="text" class= "inputvalues-large" name="username" placeholder="Enter your username..." required> <br>
                        <label>Password</label> 
                        <br>
                        <input type="password" class="inputvalues-large" name="password" placeholder="Enter your password..." required>
                        <input name="login_btn" type="submit" id="login_btn" value="Log In"> <br> <br>
                        <a style="font-size:12px" href="#">Don't have an account? Sign up now</a><br>
                        <input type="button" onClick="location.href='/medical-tracker/register.php';"  id="register_btn" value="Sign up">

                        <?php
                            if(isset($_POST['login_btn'])){
                                $username = $_POST['username'];
                                $pass = $_POST['password'];

                                $query1 = "select * from students where username='$username' AND password='$pass'";
                                $query_run = mysqli_query($conn, $query1);

                                if(mysqli_num_rows($query_run) > 0){
                                    $_SESSION['username'] = $username;
                                    $_SESSION['password'] = $pass;
                                    echo '<script type="text/javascript"> alert("Logged in.") </script>';
                                    header("location:homepage.php");
                                }
                                else{
                                    echo '<script type="text/javascript"> alert("Invalid username and/or password. Try again.") </script>';
                                }
                            }
                        ?>
                    </form>
                </center>

                
            </div>
            
            <div class="side-view">
                <img alt="hospital-buildings.png" src="images/hospital-buildings.png" class="rounded-img-med" width=150px>
                <br>
                <img alt="doctor.png" src="images/doctor.png" width=150px>
            </div>
                
                
        </div>
    </body>
</html>