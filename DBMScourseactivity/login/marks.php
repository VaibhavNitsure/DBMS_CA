<!DOCTYPE html>
<html>
<body>
	<form action ="marks.php" method="GET"></form>
		<input type="text" name="marks" placeholder="Enter marks" required>
</body>
</html>
<?php
	$name = $_GET['name'];
	$email = $_GET['email'];
	$marks = $_GET['marks'];
	echo "<a href='send.php?name=$name&email=$email&marks=$marks'></a>";
?>