<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$birthday = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require("config.php");
			$id = $db->escape_string($_GET["id"]);
			
			$query = "SELECT * FROM birthday WHERE id=$id";
			$result = $db->query($query);
		
			$birthday = $result->fetch_assoc();		
		endif;
		if ($birthday == NULL): 
			// No birthday found
			http_response_code(404);
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['save'])):
			require("config.php");
		
			// Prepare data for delete
			$person = $db->escape_string($_POST["person"]);
			$day = $db->escape_string($_POST["birthdate"]);
			$month = $db->escape_string($_POST["birthmonth"]);
			$year = $db->escape_string($_POST["birthyear"]);
			$id = $db->escape_string($_POST["id"]);
	
			$query = "UPDATE birthday SET person = '$person', day = '$day', month = '$month', year = '$year' WHERE id = '$id'";
			$result = $db->query($query);
		endif;
		
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
	<h1><?php echo $birthday['person']; ?></h1>
	<form class="item-add" method="post">
		<input type="hidden" name="id" value="<?=$birthday['id']?>">
		<label for="name">Name</label>
	
		<input name="person" minlength="1" value="<?php echo $birthday['person']; ?>">
				<br>	
		<label for="date">Date</label>
		<?php require 'select/date.php';?>
		<?php require 'select/month.php';?>
		<?php require 'select/year.php';?>
				<br>
		<input type="submit" value="save" class="submit" name="save">

							
						
						
	</form>
	</body>
</html>