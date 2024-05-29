<?php
	$Title = $_POST['Title'];
	// $lastName = $_POST['lastName'];
	$Author = $_POST['Author'];
	$Genre = $_POST['Genre'];
	$publication_Date = $_POST['publication_Date'];


	// Database connection
	$conn = new mysqli('localhost','root','root','Heena');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Title, Author, Genre, publication_Date) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Title, $Author, $Genre, $publication_Date);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>