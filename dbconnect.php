<?php
    $servername="localhost";
    $username="jocod";
    $password="";
    $dbname="c9";
    //this creats connection to the database
    $conn=new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error){
            die("connection Failed".$conn->connect_error);
    }
?>