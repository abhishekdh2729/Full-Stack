<?php

$hostName="localhost";
$dbUser="root";
$dbPassword= "";
$dbHost= "employee";

$conn=mysqli_connect("$hostName","$dbUser","$dbPassword","$dbHost");
if(!$conn){
    die("something went wrong!");
}
?>