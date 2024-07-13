<?php
	$firstName = $_POST['Name'];
	$email = $_POST['Email'];
	$number = $_POST['Phone_Number'];

	// Database connection
	$conn = new mysqli('localhost','root','8328271978@Gana','login_db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, Email, Phone_Number) values(?, ?, ?)");
		$stmt->bind_param("ssi", $Name, $Email, $Phone_Number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
