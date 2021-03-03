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

function add_user(){
	global $conn;
	// Do whatever
	echo "NOT ";
	echo "Done<br>";
	list_all();
	
}

function list_all(){
	global $conn;
	$result = $conn->query("select * from user");

	if ($result->num_rows > 0) {
	// output data of each row
		while($row=$result->fetch_assoc()) {
			echo "id: <b>".$row["id"]."</b> - Name:<b> " . $row["name"]. "</b> - Date Created: " . $row["date_created"]. "<br>";
		}
	} else {
		echo "0 results";
	}
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head><title>Time Clock Add User</title>
</head><body>
	Here is a list of all your users
<?php list_all() ?>
Add name of new user
<?php add_user() ?>	
</body></html>
