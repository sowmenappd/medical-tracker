<?php
    session_start();
    require 'dbconnect.php';

    if(!isset($_SESSION['username'])){
        session_destroy();
        header("Location:/medical-tracker/index.php");
    }
?>

<html>
    <head> 
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/styles_homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
    </head>

    <script type="text/javascript"> 
            function alertFun(){
                document.getElementById('alert').play();
            }
        
    </script>


    <!-- the nav bar -->
    <body style="background-color:#34495e;font-family:Catamaran;font-size:24px">

        <audio id="alert" src="sounds/alert1.mp3" preload="auto"></audio>

        <div class="w3-container w3-center w3-bar w3-grey">
            <button id="home" onClick="alertFun()" class="w3-bar-item w3-button w3-padding-16">Home</button>
            <button id="home2" onClick="alertFun()" class="w3-bar-item w3-button w3-padding-16">Home2</button>
            <button id="home3" onClick="alertFun()" class="w3-bar-item w3-button w3-padding-16">Home3</button>
            <button id="home4" onClick="alertFun()" class="w3-bar-item w3-button w3-padding-16">Home4</button>
        </div>
        

        <div class="w3-container" >

            <!-- The main panel -->
            <div class="w3-container w3-row w3-padding-16" style="position:relative; left:20px">

                <div class="w3-container w3-col w3-green w3-round w3-padding" style="margin-right:15px;width:22%"> 
                    <h2 class="w3-panel w3-center">Recent Activity</h2>
                    <hr/>
                    <ul class="w3-panel w3-ul" style="font-size:18px;margin-top:-15px">
                    <?php
                        for($i=0; $i<3; $i++){
                            echo '<li class="w3-padding-16"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In mollis nunc sed id semper. Id neque aliquam vestibulum morbi blandit cursus risus. Feugiat in fermentum posuere urna nec tincidunt praesent. </li>';
                        }
                    ?>
                    </ul>

                </div>
                <div>
                
                <div class="w3-container w3-col w3-round" style="width:52%;background-color:#95a5a6"> 
                    <h2 class="w3-center"><b>TASKS</b></h2> 
                </div>
                <div class="w3-container w3-col w3-round w3-padding-32" style="margin-top:10px;width:52%;background-color:#bdc3c7"> 
                    
                    <button class="w3-panel w3-button w3-round-xlarge w3-cell w3-center w3-hover-red w3-pink" onClick="alertFun()" style="margin-left:5px">
                        <h2>
                            Make a Post
                        </h2>
                        <hr>
                        <img class="w3-hover-sepia"src="images/band-aid.png" alt="band-aid" style="width:50%;padding-bottom:15px">
                    </button>


                    <button class="w3-panel w3-button w3-round-xlarge w3-cell w3-center w3-hover-blue w3-deep-orange" onClick="alertFun()" style="margin-left:5px">
                        <h2>
                            Check prescriptions
                        </h2>
                        <hr>
                        <img class="w3-hover-sepia"src="images/medical-history.png" alt="band-aid" style="width:50%;padding-bottom:15px">
                    </button>


                    <button class="w3-panel w3-button w3-round-xlarge w3-cell w3-center w3-hover-blue w3-teal" onClick="alertFun()" style="margin-left:5px">
                        <h2>
                            -
                        </h2>
                        <hr>
                        <img class="w3-hover-sepia"src="images/band-aid.png" alt="band-aid" style="width:50%;padding-bottom:15px">
                    </button>

                    <button class="w3-panel w3-button w3-round-xlarge w3-cell w3-center w3-hover-blue w3-teal" onClick="alertFun()" style="margin-left:5px">
                        <h2>
                            -
                        </h2>
                        <hr>
                        <img class="w3-hover-sepia"src="images/band-aid.png" alt="band-aid" style="width:50%;padding-bottom:15px">
                    </button>
                    

                </div>
                
                </div>

                <div>
                    <!-- The log out button -->
                    <div class="w3-card w3-round-xxlarge w3-hover-red" style="width:10%;position:fixed;top:88%;left:88%;background-color:#eb2f06;">
                        <div class="w3-container">
                            <img class="w3-left w3-padding-16" src="images/doctor.png" alt="doctor" style="width:50px">
                            <h2 class="w3-center w3-hover-text-white" style="margin-top:5px;font-size:24px">
                                <?php
                                    if(isset($_SESSION['username']))
                                    echo $_SESSION['username'];
                                ?>
                            </h2>
                            <a href="index.php" onClick="header('location:index.php')">
                                <p class="w3-center w3-text-white w3-hover-text-black" style="margin-top:-5px;font-size:15px">Log out
                                </p>
                            </a>
                        </div>
                    </div>
                
                    <div class="w3-container w3-col w3-green w3-round" style="margin-left:15px;margin-top:-65px;width:22%"> 
                        <h2 class="w3-panel w3-center" style="font-size:16px">Additional information
                        </h2> 
                        <hr/>
                        <h2 class="w3-panel w3-center" style="font-size:14px">Hello 
                        </h2> 
                    </div>
                </div>

                
            </div>


            
            

        </div>
        
    </body>


</html>