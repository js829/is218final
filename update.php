<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php include ('view/header.php'); ?> 

<?php
	include_once 'database.php';
	

	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['email']) || !isset($_REQUEST['fname']) || !isset($_REQUEST['lname'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.");
	}
	else if ($_REQUEST['email'] == null || $_REQUEST['fname'] == null || $_REQUEST['lname'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was blank.<br><a href='settings.php'>Go back to user settings page.</a>");
	}

	$useremail = $_REQUEST['email'];
	$userfname = $_REQUEST['fname'];
	$userlname = $_REQUEST['lname'];

	//Let's make sure the e-mail exists (so we can modify it).
	$sql = 'SELECT * FROM accounts WHERE email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail exists.
	if (count($results) == 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address does not exist.<br><a href='settings.php'>Go back to user settings page.</a>");
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