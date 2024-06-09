<?php

$database = "localhost";
$username = "root";
$password = "";
$databaseName = "jelentkezes";

$con = new mysqli($database,$username,$password,$databaseName);

if($con->connect_error)
{
    die("Nem sikerült a csatlakozás : ". $con->connect_error);
}