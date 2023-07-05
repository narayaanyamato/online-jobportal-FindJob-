<?php

//Your Mysql Config
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

//Create New Database Connection
$con= new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($con->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}