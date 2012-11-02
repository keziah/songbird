<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="resources/jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="resources/style.css" />
	<link rel="apple-touch-icon" href="images/appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="resources/jquery-1.8.2.min.js"></script>
	<script src="resources/jquery.mobile-1.2.0.js"></script>
</head>
<body>
<div data-role="page">
<div data-role="content">
<?php

$tbl_name='users'; // Table name 
$newUser=$_POST['username'];
$newEmail=$_POST['email'];
$newPass=$_POST['password']; 
$confirmPass=$_POST['password2']; 

$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147lilithwu', 'ahpobeiw');
mysql_select_db('c_cs147_lilithwu');

if($newPass != $confirmPass){
	echo("The passwords you entered do not match. Please enter a new password.<p>");
	//want to make it pause somehow before redirect
	//echo "<meta http-equiv='Refresh' content='0; URL=index.php'>";
	echo ('<p><a href="index.php">Back</a>');
}
else {
	
	$addUser = "INSERT INTO $tbl_name (`username`, `email`, `password`) VALUES('$newUser', 	'$newEmail', '$newPass')";
	mysql_query($addUser);
	
	//want to now autologin new user
	echo("Welcome to the Songbird family tree!");
	//want to make it pause somehow before redirect
	//echo "<meta http-equiv='Refresh' content='0; URL=home.php'>";
	echo ('<p><a href="home.php">Continue</a>');
}


?>
</div><!--/content--> 
</div><!--/page--> 
</body>
</html>