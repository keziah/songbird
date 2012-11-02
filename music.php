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
	<h1>Music</h1>
	<a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">
	

	//insert music files here??
		<audio controls="controls" height="50px" width="100px">
  				<source src="resources/jeTaimePlus.mp3" type="audio/mpeg" />
  				<!--<source src="song.ogg" type="audio/ogg" />-->
				<embed height="50px" width="100px" src="jeTaimePlus.mp3" />
	</audio>

		<div data-role="fieldcontain">
			
		</div>	
	
		
	<div id="info">

		<embed src="uploads/Starlight.mp3" autostart="true" loop="false">

	</div>	
	</div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
				<li><a href="project.php" id="info" data-icon="custom">Info</a></li>
				<li><a href="music.php" id="music" data-icon="custom" class="ui-btn-active">Music</a></li>
				<li><a href="lyrics.php" id="lyrics" data-icon="custom">Lyrics</a></li>
				<li><a href="submit.php" id="submit" data-icon="custom">Submit</a></li>
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