<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "information";
    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn){
    // echo "connection successfully";
    }else{
    die("connection failed".$conn->connect_error);
}

?>