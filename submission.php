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
	<h3><a href="submit.php" data-role="button" data-mini="true">Back</a></h3>
</div>

/*
<style type="text/css">
.blue {
	color:blue;
	font-weight:bold;
}
body {
	font-family:Helvetica;
}
</style>
*/

<body>
<?php
$message = $_POST["projectname"];
$product = $_POST["songname"];

echo "<p>Project name: ".$message."</p>";
echo "<p>Song file name: ".$product."</p>";

include("config.php");
$query2 = "insert into projects values ('$message', '$product')";
$result2 = mysql_query($query2);

?>
</body>

data-direction="reverse"