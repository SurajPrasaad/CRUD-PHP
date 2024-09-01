<?php
$serverName = "localhost";
$userName = "root";
$password = "YOUR_DATABASE_PASSWORD";
$dbName = "crud2";


//Create a connection
$conn = mysqli_connect($serverName,$userName,$password,$dbName);
if(!$conn){
    die("Could Not Connect".mysqli_error());
}else{
    echo "Connection Successfully.";
    //* $sql = "create database crud2";
    //* $result = mysqli_query($conn,$sql);
    //* if($result){
    //*      echo "Database Created Success!";
    //* }else{
    //*     echo "Database Not Created!";
    //* }
}
?>
