<?php
	//database calls to generate the server list go here
	
	//make sure credentials file is hidden in .gitignore .htaccess
	include '../config/db_credentials.php';
	$conn = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$query = "SELECT name, ip, port, lastSeen, description FROM IPAddresses2 ORDER BY lastSeen DESC";
		$result = $conn->query($query);
		$rows = array();
		while($row = $result->fetch_assoc()){
			array_push($rows, $row);
		}
		$conn->close();
		echo json_encode($rows); //note: JS will have to be updated to match new format
	}
?>