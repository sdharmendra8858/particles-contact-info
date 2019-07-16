<?php

$servername="localhost";
$username="root";
$password="";

//create connection
$conn = mysqli_connect($servername, $username, $password);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$dbname = mysqli_select_db($conn,"login");
if(empty($dbname)){

    $dbcreate = "CREATE DATABASE login";
    $check=mysqli_query($conn, $dbcreate);
    if(!$check){
    echo '<script language="javascript">';
        echo 'alert("Database not Created")';
        echo '</script>';
    }
}

?>