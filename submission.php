<?php
session_start();
?>
<html>

<head>
<title>Adding songs</title> 
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
	<script src="js/script.js"></script>
	
</head>
</html>

<div class="ui-bar ui-bar-b">
	<a data-role="button" href="myProfile.php" data-icon="home" data-iconpos="left" class="ui-btn-left" data-ajax="false">Home
        </a>
</div>

<body>
<?php
$message = $_POST["projectname"];
$user = $_SESSION['username'];

echo "<p>New project name: ".$message."</p>";

include("config.php");
$query2 = "insert into projects values ('$message', '$user')";
$result2 = mysql_query($query2);

?>
</body>