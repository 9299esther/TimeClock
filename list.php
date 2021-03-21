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
	echo output data of each row
		echo "<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Date</th>
		</tr>";
		while($row=$result->fetch_assoc()) {
			echo "<tr>";
				echo "<td>". $row["id"]."</td>";
				echo "<td>". $row["name"]."</td>";
				echo "<td>". $row["date_created"]."</td>";

			echo "</tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head><title>Time Clock Add User</title>
</head><body>
	<h1>Here is a list of all your users:<br></h1>
<?php list_all() ?>
	<br><button>Add name of new user</button><br>
<?php add_user() ?>	
</body></html>
