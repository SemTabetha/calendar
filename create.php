<!DOCTYPE html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require("config.php");
		
		// Prepare data for insertion
		$person = $db->escape_string($_POST["person"]);
		$day = $db->escape_string($_POST["birthdate"]);
		$month = $db->escape_string($_POST["birthmonth"]);
		$year = $db->escape_string($_POST["birthyear"]);
		
		// Prepare query and execute
		$query = "INSERT INTO birthday (person, day, month, year) VALUES ('$person','$day','$month','$year')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./index.php");
    exit();
	endif;

?>
<html>
	<head>
		<title>Birthdaycalendar</title>
	    <link href="CSS/main.css" rel="stylesheet" type="text/css">
	    <link rel="icon" href="images/s.png">
	</head>
	<body>
	<h1>New Birthday</h1>
	
	<form class="item-add" method="post">
		<label for="name">Name</label>
		<input type="text" name="person" placeholder="- Name -" class="input" autocomplete="off" required>
					<br>
		<label for="date">Date</label>
		<?php require 'select/date.php';?>
		<?php require 'select/month.php';?>
		<?php require 'select/year.php';?>
					<br>
		<input type='submit' value="Save" class="submit">
	</form>
	</body>
</html>