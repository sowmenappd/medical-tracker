<?php 
    $conn = mysqli_connect("localhost", "root", "", "cuet_online_medical");

    if(!$conn){
        die('Connection couldn\'t be established. Error: ' . mysqli_connect_errno());
    }
?>