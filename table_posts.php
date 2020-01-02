<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";


$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) 
	{
	    die("Connection failed: " . $conn->connect_error);
	}

$sql = "CREATE TABLE posts (
title VARCHAR(30),
decription VARCHAR(500),
likes INT(11),
image_url CHAR(),
author CHAR(30),
)";

if ($conn->query($sql) === TRUE) 
{
    echo "Table Users created successfully";
} else 
{
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
