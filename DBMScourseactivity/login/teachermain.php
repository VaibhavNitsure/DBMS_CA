<?php
	echo "<table>";

session_start();

$user = $_GET['name'];
$pass = $_GET['usn'];

	$conn = mysqli_connect("localhost","root","","projectdata");
	$sql = "SELECT `Name`, `USN`, `branch`, `div`, `title`, `guide`, `start`, `end`, `exp`, `link`,`email`,`marks` FROM `projects` WHERE guide='{$user}'";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) {
		echo "<table>";
		while ($row = $result-> fetch_assoc()) {
			//echo "<tr><td>". $row["Name"] . "</td><td>". $row["USN"] . "</td><td>" . $row["title"] . "</td><td>" . $row["guide"] . "<br></td><td>";
			//echo "<button onclick = <?php if(mail(".$row['email'].",'Marks',10,'From: sihfarmer@gmail.com')){echo 'Email sent'
			?>
				<form action="teachermain.php" method="POST"></form>
					<tr>
						<td><?php echo $row["Name"]; ?> </td>
						<td><?php echo $row["USN"]; ?> </td>
						<td><?php echo $row["guide"]; ?> </td>
						<td><?php echo $row["title"]; ?> </td>
						<td><?php echo $row['link']; ?> </td>
						<td><?php echo $row['email']; ?> </td>
						<td>
							<button onclick = <?php mail($row['email'],'Marks','Hello'.$row['Name'].'. Your project '.$row['title'].' is evaluated.','From: sihfarmer@gmail.com');mail('sihfarmer@gmail.com','Marks','Hello'.$user.'. You evaluated project '.$row['title'],'From: sihfarmer@gmail.com');?>>Send confirmation mail</button>
					</td>
					</tr>
					

					<?php

		}
		

		echo "</table>";
		echo "<br><a href='loginteacher.php'><input type=button value=login name=login></a>";
	}
	else{
		echo "0 result";

	}

	$conn-> close();

?>
