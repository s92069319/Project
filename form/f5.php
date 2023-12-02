<?php

$servername="localhost";
$username="root";
$password="";
$dbname="register";
$new=$_POST['new'];
session_start();
session_regenerate_id();

$con = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

$sql = "UPDATE form SET password='$new' WHERE emailadd= '$_SESSION[e]'";

if($con->query($sql) === TRUE){
    header("Location:success.php");
}
else{
    echo "Error updating the record".$con->error;
}
$con->close();
?>