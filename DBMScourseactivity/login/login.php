<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="frm">
		<form action="welcome.php" method="POST">
			<p>
				<label>Username</label>
				<input type="text" id="user" name="user" />
			</p>
			<p>
				<label>USN</label>
				<input type="text" id="usn" name="usn" />
			</p>
			<p>
				<label>Password</label>
				<input type="password" id="pass" name="pass" />
			</p>
			<p>
				<input type="submit" id="btn" value="login" />
			</p>
			<p>
				<a href = 'register.html'>Register</a>
			</p>
		</form>
		
	</div>

</body>
</html>