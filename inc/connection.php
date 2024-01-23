<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'hansa_db'; 

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
	// else {
	// 	echo "success";
	// }

?>