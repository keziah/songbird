<html>

<head>
	<title>Songbird</title> 
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
<body> 
<div data-role="page">

	<div data-role="header">
	<h1>Lyrics</h1>
<a data-role="button" href="myProfile.php" data-icon="home" data-iconpos="left" class="ui-btn-left" data-ajax="false">Home
        </a>
		
		<a href="#popupMenu" data-rel="popup" data-role="button" data-icon="arrow-d" data-iconpos="right" data-inline="true" data-transition="fade" class="ui-btn-right">Options</a>
	<div data-role="popup" id="popupMenu" data-overlay-theme="c">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="c">
    	<li>Logged in as <?php 
    		echo($_SESSION['username']);?></li> 
       <!-- <li><a data-rel="popup" href="myProfile.php" data-ajax="false">Profile</a></li>-->
        <li><a data-rel="popup" href="#help" data-ajax="false">Help</a></li>
        <li><a data-rel="popup" href="logout.php" data-ajax="false">Logout</a></li>
        <li><a data-rel="popup" href="lyrics.php" data-ajax="false">Edit Lyrics</a></li>
    </ul>
	</div>

	</div><!-- /header -->

	<div data-role="content">
	

	<p>upload lyrics and sheet music here </p>

		<div data-role="fieldcontain">
			
		</div>	
	
		
	<div id="info">
		<p>Thank you for logging. You should be able to see all sorts of user information here.</p>
	</div>	
	</div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
		<ul>
				<li><a href="lyrics.php" id="lyrics" data-icon="custom" class="ui-btn-active">Lyrics</a></li>
				<li><a href="project.php" id="info" data-icon="custom">Info</a></li>
				<li><a href="music.php" id="music" data-icon="custom">Music</a></li>
								<!--<li><a href="submit.php" id="submit" data-icon="custom">Submit</a></li>-->
		</ul>
		</div>
	</div>
	<script type="text/javascript">
	$("#logout").hide();
	$("#info").hide();
	var retrievedObject = localStorage.getItem('username');
	if (retrievedObject == "test") {
		$("#form").hide();	
		$("#logout").show();
		$("#info").show();
	}
	$("#logout").click(function() {
		localStorage.removeItem('username');
		$("#form").show();
		$("#logout").hide();
		$("#info").hide();
	});
	</script>
</div><!-- /page -->

</body>
</html>