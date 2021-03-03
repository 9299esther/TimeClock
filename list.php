<?php
echo "Hello world!";

// Connect to datase
//
$conn=new mysqli("localhost", "Esther", "Esther","timeclock");

// Check connection
if($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}
echo "<br>Connected successfully<br>";

$result = $conn->query("select * from user");

if ($result->num_rows > 0) {
	// output data of each row
	while($row=$result->fetch_assoc()) {
		echo "id: <b>".$row["id"]."</b> - Name:<b> " . $row["name"]. "</b> - Date Created: " . $row["date_created"]. "<br>";
	}
} else {
	echo "0 results";
}
?>
