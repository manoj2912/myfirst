<?php

$conn = new mysqli("localhost","root","1133");

if($conn->connect_error)	{
die("connection failed : " . $conn->connect_error);
}
echo "connection succesfully";
?>
