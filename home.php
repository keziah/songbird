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
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
	<title>Songbird - Home</title>
</head>

<body class="ui-mobile-viewport">
<div data-role="page">
<div data-role="header">
	<!--THIS LOGOUT MUST BE EDITED IN ALL PAGES-->
	<a href="index.php" data-icon="check" id="logout" class="ui-btn-right" data-ajax="false">Logout</a>
	<h1>Home</h1>
</div>
<div data-role="content">
	<div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
            <form id="search" action="search.php" method="post">
                <input name="query" id="query" placeholder="Search query" value="" type="search">
                <input type="submit" name="submitsearch" value="Search" data-mini="true">
            </form>
            </fieldset>
    </div>

<a href="" style="font-size:8pt;">Advanced Search</a> (not yet implemented)
<p>
<a href="browse.php"> Browse </a><p>
<h2><a href="myProfile.php"> My Profile </a></h2><p>
<h2>My Projects</h2><br>
Load project list here.
<br><a href="project.php">Example Project</a>
</div>
</div>
</body>
</html>