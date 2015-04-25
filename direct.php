<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/main.css">
		<script src="js/direct.js"></script>
	</head>
	<body>
		Register or update a game here:
		<form method="GET" action="registerip_2.php">
			<span>name:</span><input type="text" name="name" required><br>
			<span>Port:</span><input type="text" name="port" value="11770"><br>
			<span>Description:</span><textarea name="description"></textarea>
			<input type="submit" id="button" value="Submit">
		</form>
		<br>
		<table id="directTable">
		</table>
	</body>
</html>