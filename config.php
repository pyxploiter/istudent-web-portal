<?php
   	define('DB_SERVER', 'localhost');
   	define('DB_USERNAME', 'root');
   	define('DB_PASSWORD', 'incorrect');
   	define('DB_DATABASE', 'istudent_db');
   	$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   	if(!$connection){
		die("Connection failed: " . mysqli_connect_error());
   	}
?>