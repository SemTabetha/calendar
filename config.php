<?php

	$db = new mysqli('localhost','root','','calendar');
	//$db = new mysqli('localhost', 'szee_zee', 'IA1eWf8nSB', 'szee_tolist');
	if (!$db) {
    	die("Connection failed: " . mysqli_connect_error());
	}