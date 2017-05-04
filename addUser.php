<!DOCTYPE html>

<html>
<head>
<?php include ('view/header.php'); ?> 
</head>
<body>

<?php
	include_once 'model/database.php';
	
	//Let's make sure the correct data is received. 
	if (!isset($_REQUEST['email']) || !isset($_REQUEST['password'])){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was left blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	else if ($_REQUEST['email'] == null || $_REQUEST['password'] == null){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: There was an error writing to the database. Some required data was left blank.<br><a href='index.php'>Go back to main page.</a>");
	}
	
	$useremail = $_REQUEST['email'];
	$userfname  = $_REQUEST['fname'];
	$userlname  = $_REQUEST['lname'];
	$usernum  = $_REQUEST['num'];
	$userbirthday  = $_REQUEST['birthday'];
	$usergender  = $_REQUEST['gender'];
	$userpass  = $_REQUEST['password'];
	
	//Let's make sure the e-mail doesn't already exist.
	$sql = 'SELECT * FROM accounts where email="'.$useremail.'"';
	$results = runQuery($sql);
	
	//If the following line has results (the array length is more than 0), that means data/e-mail already exists.
	if (count($results) > 0){
		header('HTTP/1.1 500 Internal Server Error');
		exit("ERROR: The e-mail address already exists. Please choose a different one.<br><a href='index.php'>Go back to main page.</a>");
	}

	//Let's add the data.
	$sql = 'INSERT INTO accounts (`email`, `password`, `fname`, `lname`, `birthday`, `gender`, `num`) VALUES ("'.$useremail.'", "'.$userpass.'", "'.$userfname.'", "'.$userlname.'", "'.$userbirthday.'", "'.$usergender.'", "'.$usernum.'")';
	$results = runQuery($sql);
	
	echo "Registration Successful! Please log in to access your to do lists!";

?>

	<div>
		<a href="index.php">Go back to login page.</a>
	</div>

</body>
</html>