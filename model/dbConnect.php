<?php

function connect()
{
	$conn = new mysqli("localhost","anannya","78654","projectt&t");
	if($conn->connect_errno){
		die("Connection failed due to " .$conn->connect_error);
	}
	return $conn;
}


?>