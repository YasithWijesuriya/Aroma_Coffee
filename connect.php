<?php

$host="localhost:3308";
$user="root";
$pass="";
$db="aroma";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}

?>