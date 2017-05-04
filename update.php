<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
	include_once 'database.php';
	

	//Let's make sure the correct data is received. 
	if (!isset($_POST['email']) || !isset($_POST['fname']) || !isset($_POST['lname'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was missing.");
	}
	else if ($_POST['email'] == null || $_POST['fname'] == null || $_POST['lname'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='index.php'>Go back to main page.</a>");
	}

	$useremail = $_POST['email'];
	$userfname = $_POST['fname'];
	$userlname = $_POST['lname'];

	//Let's make sure the e-mail exists (so we can modify it).
	$sql = 'SELECT * FROM accounts WHERE email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail exists.
	if (count($results) == 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address doesn't exist.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's update the entry
	$sql = 'UPDATE accounts SET fname="'.$userfname.'", lname="'.$userlname.'" WHERE email ="'.$useremail.'"';
	$results = runQuery($sql);

	
	echo "User Updated.";

?>

	<div>
		<a href="settings.php">Go back to settings page.</a>
	</div>

</body>
</html>