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
	<title>Songbird - Home</title>
</head>

<body>



<form id="search" action="search.php" method="post">
	<label for="searchQuery">Search:</label></br>
	<input type="text" name="searchQuery">
	<input type="submit" name="submitsearch" value="Go!">
</form>
<a href="" style="font-size:8pt;">Advanced Search</a> (not yet implemented)
<p>
<a href="browse.php"> Browse </a><p>
<a href="myProfile.php"> My Profile </a><p>
My Projects<br>
Load project list here.
<br><a href="project.php">Example Project</a>

</body>
</html>