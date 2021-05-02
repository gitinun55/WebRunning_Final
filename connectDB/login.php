<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","data_running");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>