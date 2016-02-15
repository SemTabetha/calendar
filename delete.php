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
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			require("config.php");
		
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "DELETE FROM birthday WHERE id=$id";
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

	<form class="item-add" method="post">
		<input type="hidden" name="id" value="<?=$birthday['id']?>">

		<h1>Delete Birthday</h1>
		<p>Are you sure you want to delete the birthday of <?=$birthday['person'],"?", " ","(",$birthday['day'], "-",$birthday['month'], "-",$birthday['year'], ")"?></p>
		<input type="submit" value="Yes" class="submit" name="confirmed">
		<input type="submit" value="No" class="submit" name="canceled">
	</form>
	</body>
</html>