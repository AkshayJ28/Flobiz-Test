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

$sql = "CREATE TABLE comments (
commented_by VARCHAR(30),
post_id VARCHAR(10),
comment VARCHAR(100),
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
