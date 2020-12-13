
<?php
	echo "<table>";

session_start();

$user = $_GET['name'];
$pass = $_GET['usn'];

	$conn = mysqli_connect("localhost","root","","projectdata");
	$sql = "SELECT `Name`, `USN`, `branch`, `div`, `title`, `guide`, `start`, `end`, `exp`, `link` FROM `projects` WHERE (Name='{$user}'and USN='{$pass}')";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		echo "<table>";
		while ($row = $result-> fetch_assoc()) {
			echo "<tr><td>". $row["Name"] . "</td><td>". $row["USN"] . "</td><td>" . $row["title"] . "</td><td>" . $row["guide"] . "<br></td><td>";
		}

		echo "</table>";
		echo "<br><a href='process.php?name=$user&usn=$pass'><input type=button value=Home name=Home></a>";
	}
	else{
		echo "0 result";

	}

	$conn-> close();

?>