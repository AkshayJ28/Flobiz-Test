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

$sql = "CREATE TABLE Users (
email VARCHAR(50),
password VARCHAR(50),
bio VARCHAR(500),
gender BOOLEAN ('m', 'f'),
age INT(2),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
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
