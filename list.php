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
		echo `<table>`;
		echo `<tr>`;
			echo `<th>`"ID"`</th>`;
			echo `<th>"Name"</th>`;
			echo `<th>"Date"</th>`;
		echo `</tr>`;
		while($row=$result->fetch_assoc()) {
			echo `<tr>`;
				echo`<td>`;
				echo `<b>` $row["id"]`</b>`;
				echo`</td>`;

				echo`<td>`;
				echo $row["name"];
				echo`</td>`;

				echo`<td>`;
				echo $row["date_created"];
				echo`</td>`;
			echo `</tr>`;
		}
		echo `</table>`;
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
	<button>Add name of new user</button>
<?php add_user() ?>	
</body></html>
