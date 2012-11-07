<?php
session_start();
?>
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
	
<<<<<<< HEAD
	<script src="resources/jquery-1.8.2.min.js"></script>
	<script src="resources/jquery.mobile-1.2.0.js"></script>
	<title>Songbird - Contribute</title>
	
	
	<form class="fileupload" action="server/php/" method="POST" enctype="multipart/form-data"
    data-upload-template-id="template-upload-1"
    data-download-template-id="template-download-1">
    <!-- ... -->
</form>
<form class="fileupload" action="server/php/" method="POST" enctype="multipart/form-data"
    data-upload-template-id="template-upload-2"
    data-download-template-id="template-download-2">
    <!-- ... -->
</form>
	
</head>
=======
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>
	<script src="js/script.js"></script>

</head>  
<body> 

<div data-role="page">

	<div data-role="header">
	<h1>Create New Project</h1>
	<a data-role="button" href="myProfile.php" data-icon="home" data-iconpos="left" class="ui-btn-left" data-ajax="false">Home</a>
	<a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">
	

		<div data-role="fieldcontain">
			
		</div>	
	
		
	<div id="info">
		
	</div>	
	</div><!-- /content -->
	
<div id="form">
	<form action="submission.php" method="post">
	<p><label for="message">Project Name</label>
		<input type="text" name="projectname" maxlength="140"></p>
	<input class="submit" type="submit" value="Create">
</form></div>	
	
	


        









	
<!--/end content -->
   
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
>>>>>>> a247e6024bd7acf40080fa887294c7dd388692d6

</body>
</html>