<<<<<<< HEAD
<?php session_start();
?>

=======
	<?php session_start();
	?>
>>>>>>> 6e319abc3e58f85b330f8de3b73a1b0229528d92
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

	
<body>
<?php

?>
<div data-role="page" id="one">

	<div data-role="header">
		<h1>Project Page</h1>
		<a data-role="button" href="myProfile.php" data-icon="home" data-iconpos="left" class="ui-btn-left" data-ajax="false">Home
        </a>
		
		<a href="#popupMenu" data-rel="popup" data-role="button" data-icon="arrow-d" data-iconpos="right" data-inline="true" data-transition="fade" class="ui-btn-right">Options</a>

	<div data-role="popup" id="popupMenu" data-overlay-theme="c">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="c">
    	<li>Logged in as <?php 
    		echo($_SESSION['username']);?></li> 
       <!-- <li><a data-rel="popup" href="myProfile.php" data-ajax="false">Profile</a></li>-->
       <li><a data-rel="popup" href="project.php" data-ajax="false">Edit Project Info</a></li>
        <li><a data-rel="popup" href="#help" data-ajax="false">Help</a></li>
        <li><a data-rel="popup" href="logout.php" data-ajax="false">Logout</a></li>
         
    </ul>
	</div>
		
		
		
		
	</div><!-- /header -->
	<?php
	include("config.php");
	$project = $_GET['projectname'];
	?>

	
	

	<div data-role="content">	
		<h2><?php echo "$project" ?> <span id="username"></span></h2>
		
		<p>Project Notes:</p>
		
		
		
			<?php 
	
	
	$sql="SELECT * FROM projectinfo WHERE projectname = '$project'";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	if($count < 1) {
		$stdinfo = "This is my project.";
		$addProject = "INSERT INTO projectinfo (`projectname`, `info`) VALUES('$project','$stdinfo')";
		mysql_query($addProject);
		$result = mysql_query($sql);
	}
	
		$row = mysql_fetch_assoc($result);
		echo "".$row["info"]."";
	
	
		?>
		<a href="#editform" data-rel="dialog" data-role="button" id="editinfo" data-transition="pop">Edit Project Notes</a>
			

		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="project.php" id="info" data-icon="custom" class="ui-btn-active">Info</a></li>
				<li><a href="music.php?projectname=<?php echo "".$project."" ?>" id="music" data-icon="custom">Music</a></li>
				<li><a href="lyrics.php?projectname=<?php echo "".$project."" ?>" id="lyrics" data-icon="custom">Lyrics</a></li>
				<!--<li><a href="submit.php" id="submit" data-icon="custom">Submit</a></li>-->
			</ul>
		</div>
	</div>
</div>
	
</div><!-- /page one -->

<div data-role="page" id="editform">
<div data-role="header">
<h1>Edit Project Notes</h1>
</div>
<div data-role="content">

<form action="editinfo.php" id="editinfo" data-ajax="false">
<input type="text" name="" id="edited" value="<?php echo $row['info'];?>"/>
<input type="submit" name="submit" value="Submit"/>
</form>

</div>
</div>



</body>	
	
	
	

</head> 
</html>