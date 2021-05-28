<?php
$conn = mysqli_connect("localhost","root","best1234","shielaeats");
if(!$conn){
	echo mysqli_connect_error();
	die();
}

echo "Database Successfully";