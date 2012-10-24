<?php
//header('Location:home.php');

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
	//echo "<meta http-equiv='Refresh' content='0; URL=index.html'>";
	echo ('<p><a href="index.html">Back</a>');
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