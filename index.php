<!DOCTYPE html>
<html>
<head>
	
	
	
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />

	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="images/appicon.png" />
	<link rel="apple-touch-startup-image" href="images/startup.png">
	
	<script src="resources/jquery-1.8.2.min.js"></script>
	<script src="resources/jquery.mobile-1.2.0.js"></script>

	<title>Songbird - Welcome!</title>

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
</head>

<body>
<?php
$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147lilithwu', 'ahpobeiw');
mysql_select_db('c_cs147_lilithwu');
?>

<div data-role="page"> 
<div data-role="header">
<h1>Songbird</h1>
</div><!-- /header-->

<div data-role="content">

<h2>Log In</h2>
<div id = "login-form">
<form id ="login" action="checklogin.php" method="post" accept-charset="UTF-8">
	<fieldset>
	<input type="text" name="username" id="username" maxlength="16" placeholder="Username"/>
	<p>
	<input type="password" name="password" id="password" maxlength="20" placeholder="Password" /><p>
	<input type="submit" name = "submitlogin" value="Login"/>
	
	</fieldset>
</form>
<p>
<a href="#resetPass" class="ui-link" data-rel="dialog" data-transition="pop">Forgot Password?</a>
<p>
<a href="#signup" class="ui-link" data-rel="dialog" data-transition="pop">Create Account</a>
</div> <!--/content-->
</div> <!--/first page-->


<!--Begin second page-->
<div id="resetPass" data-role="page" class="ui-dialog ui-page ui-body-a" data-url="resetPass" role="dialog">
<div data-role="header">
<h1>Reset Password</h1>
</div><!-- /header-->
<div id="retrievePass" data-role="content">
	<div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
				Enter the email you used to sign up 
				<br>and we'll email you a link to reset your password!
				<form id="emailpass" action="reset.php" method="post">
					<input type="email" name="email" placeholder="you@host.com"><br>
						<input type="submit" name ="reset" value ="Submit"><p>
				</form>
			</fieldset>
	</div>
</div> <!--/content-->
</div> <!--/second page-->

<!--Begin third page-->
<div id="signup" data-role="page" class="ui-dialog ui-page ui-body-a" data-url="signup" role="dialog">
<div data-role="header">
<h1>Create Account</h1>
</div><!-- /header-->
<div data-role="content">
	<div data-role="fieldcontain">
	<fieldset data-rolg = "controlgroup">
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
	</form>
	</fieldset>
	</div>
</div><!--/content-->
</div> <!--/page-->

</body>
</html>