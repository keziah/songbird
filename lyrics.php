<?php session_start();
include("config.php");

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
       <li><a data-rel="popup" href="createnew.php" data-ajax="false">New Project</a></li>
       <li><a data-rel="popup" href="logout.php" data-ajax="false">Logout</a></li>
    </ul>
	</div>

	</div><!-- /header -->

	<div data-role="content">
	
	
	<?php
	$project = $_GET['projectname'];
	
	
	$sql="SELECT * FROM projectinfo WHERE projectname = '$project'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	
		$row = mysql_fetch_assoc($result);
		echo "".$row["lyrics"]."";
	?>	
		
	<a href="#editlyrics" data-role="button" data-rel="dialog" data-transition="pop">Edit Lyrics</a>
		
	
	</div><!-- /content -->

    <div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
		<ul>
				
				<li><a href="project.php?projectname=<?php echo "".$project."" ?>" id="info" data-icon="custom" >Info</a></li>
				<li><a href="music.php?projectname=<?php echo "".$project."" ?>" id="music" data-icon="custom">Music</a></li>
				<li><a href="lyrics.php?projectname=<?php echo "".$project."" ?>" id="lyrics" data-icon="custom" class="ui-btn-active">Lyrics</a></li>
		</ul>
		</div>
	</div>
</div><!-- /page -->


<div data-role="page" id="editlyrics" class="ui-dialog ui-page ui-body-c" data-url="editlyrics" role="dialog">
<div data-role="header">
	<h1>Edit Lyrics</h1>
</div>
<div data-role="content">
	<form action="editlyrics.php" id="editinfo" method="POST" data-ajax="false">
	<div data-role="fieldcontain">
		<textarea cols="40" rows="8" name="newLyrics"><?php echo "".$row["lyrics"]."" ?> </textarea>
		<input type="hidden" name="projectname" value="<?php echo "$project" ?>"/>
		<input type="submit" value="Submit"/>
	</div>


<input type="submit" name="submit" value="Submit"/>
</form>

</div><!-- /content -->
</div><!-- /page two -->


</body>
</html>