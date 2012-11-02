<!DOCTYPE html>
<html>
<head>
	
	
	
	
	
	
	
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
	
	
	
	
	<title>Songbird - Welcome!</title>
</head>


<?php
$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147lilithwu', 'ahpobeiw');
mysql_select_db('c_cs147_lilithwu');
?>
<script src="resources/jquery-1.8.2.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#retrievePass").hide();
	$("#signup").hide();
	$(".togglelogin").click(function(){
		$("#retrievePass").toggle("slow");
		$("#login-form").toggle("slow");
	});

	$("#newAccount").click(function(){
		$("#signup").toggle("medium");
	});
});
</script>
<script type="text">
</script>

</head>
<body>


App image here<p>
Log In
<div id = "login-form">
<form id ="login" action="checklogin.php" method="post" accept-charset="UTF-8">
	<fieldset>
	<label for="username">Username:</label><br>
	<input type="text" name="username" id="username" maxlength="16"/><br>
	<label for="password">Password:</label><br>
	<input type="password" name="password" id="password" maxlength="20"/><p>
	<input type="submit" name = "submitlogin" value="Login"/>
	
	</fieldset>
</form>
</div>
<p>
<a href="javascript:void(0)" class="togglelogin">Forgot Password?</a>
<div id="retrievePass">
	<fieldset>
	Enter the email you used to sign up 
	<br>and we'll email you a link to reset your password!
	<form id="emailpass" action="reset.php" method="post">
		<input type="email" name="email"><br>
		<input type="submit" name ="reset" value ="Submit"><p>
		<a href="javascript:void(0)" class="togglelogin">Wait, I remember! Let me log in.</a>
	</form>
	</fieldset>
</div>
<p>

<a href="javascript:void(0);" id="newAccount">Create Account</a>
<div id="signup">
	<fieldset>
	<form id="sign-up" action="createAccount.php" method="post">
		<label for="username">Choose a username:</label><br>
		<input type="text" name="username" id="username" maxlength="16"/><br>
		<label for="email">Email address:</label><br>
		<input type="email" name="email"><br>
		<label for="password">Choose a Password:</label><br>
		<input type="password" name="password" id="password" maxlength="20"/><br>
		<label for="password2">Confirm Password:</label><br>
		<input type="password" name="password2" id="password2" maxlength="20"/><p>
		<input type="submit" name = "submitNewUser" value="Submit"/>
	</fieldset>
	</form>
</div>
</body>

</html>