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
		echo `<table style="width:100%">`;
			echo `<tr>`;
				echo `<th>"ID"</th>`;
				echo `<th>"Name"</th>`;
				echo `<th>"Date"</th>`;
			echo `</tr>`;
			echo `<tr>`;
				echo`<td>`;
				echo `<th>"Name"</th>`;
				echo`</td>`;
			echo `</tr>`;
		echo `</table>`;
		while($row=$result->fetch_assoc()) {
			echo `<tr>`;
				echo`<td>`;
				echo $row["id"];
				echo`</td>`;

				echo`<td>`;
				echo $row["name"];
				echo`</td>`;

				echo`<td>`;
				echo $row["date_created"];
				echo`</td>`;
			echo `</tr>`;
		}
		//echo `</table>`;
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
	Here is a list of all your users
<?php list_all() ?>
Add name of new user
<?php add_user() ?>	
</body></html>
