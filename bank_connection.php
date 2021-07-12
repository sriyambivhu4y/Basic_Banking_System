<?php

	$server = "localhost";
	$username = 'root';
	$password = '';
	$db = 'bank';

	$conn = mysqli_connect($server, $username, $password, $db);

    
    if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>



