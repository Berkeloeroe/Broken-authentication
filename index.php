<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Inloggen</title>
	</head>
	<body>
		<h2>Log In</h2>
		<div class="InputFields">
			<form method="POST" action="login.php">
				<input type="email" name="username" placeholder="Email" required>
				<br>
				<input type="password" name="password" placeholder="Password" required>
				<br>
				<button type="submit" class="button">Log in</button>
			</form>
		</div>
	</body>
</html>
