<<<<<<< HEAD
<?php session_start();
?>

=======
	<?php session_start();
	?>
>>>>>>> ee06cdb772bfb0b5529b6dc2c64f3ad23a1bba0d
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
		$stdlyrics = "Add lyrics here.";
		$addProject = "INSERT INTO projectinfo (`projectname`, `info`, `lyrics`) VALUES('$project','$stdinfo', '$stdlyrics')";
		mysql_query($addProject);
		$result = mysql_query($sql);
	}
	
		$row = mysql_fetch_assoc($result);
		echo "".$row["info"]."";

	
		?>
			

		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>

				<li><a href="project.php?projectname=<?php echo "".$project."" ?>" id="info" data-icon="custom" class="ui-btn-active">Info</a></li>
				<li><a href="music.php?projectname=<?php echo "".$project."" ?>" id="music" data-icon="custom">Music</a></li>
				<li><a href="lyrics.php?projectname=<?php echo "".$project."" ?>" id="lyrics" data-icon="custom">Lyrics</a></li>
				<!--<li><a href="submit.php" id="submit" data-icon="custom">Submit</a></li>-->
			</ul>
		</div>
	</div>
</div>
	
</div><!-- /page one -->

<div data-role="page" id="editform" class="ui-dialog ui-page ui-body-c" data-url="signup" role="dialog">
<div data-role="header">
<h1>Edit Project Notes</h1>
</div>
<div data-role="content">
<?php
$oldInfo =$row['info'];
$_SESSION['activeProj'] = "$project";
?>
<form action="editinfo.php" id="editinfo" data-ajax="false">
<div data-role="fieldcontain">
	<textarea cols="40" rows="8" name="textarea" id="textarea"><?php echo $oldInfo;?></textarea>
</div>

<input type="submit" name="submit" value="Submit"/>
</form>

</div><!-- /content -->
</div><!-- /page two -->
=======

<!-- Start of second page: #two -->


/*
<div data-role="page" id="two" data-add-back-btn="true">

	<div data-role="header">
		<h1>Two</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Two</h2>
		<p>I have an id of "two" on my page container. I'm the second page container in this multi-page template.</p>	
		<p>Notice that the theme is different for this page because we've added a few <code>data-theme</code> swatch assigments here to show off how flexible it is. You can add any content or widget to these pages, but we're keeping these simple.</p>	
		<p><a href="#one" data-direction="reverse" data-role="button" data-theme="b">Back to page "one"</a></p>	
		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		
		<ul>
			<li><a href="project1.php" id="infoInfo" data-icon="custom">Info</a></li>
			<li><a href="login.php" id="music" data-icon="custom" class="ui-btn-active">Music</a></li>
			<li><a href="filter.php" id="lyrics" data-icon="custom">Lyrics</a></li>
			<li><a href="#" id="submit" data-icon="custom">Submit</a></li>
		</ul>
		</div>
	</div>
</div>
</div><!-- /page two -->

>>>>>>> ee06cdb772bfb0b5529b6dc2c64f3ad23a1bba0d

<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="e">
		<h1>Dialog</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>Popup</h2>
		<p>I have an id of "popup" on my page container and only look like a dialog because the link to me had a <code>data-rel="dialog"</code> attribute which gives me this inset look and a <code>data-transition="pop"</code> attribute to change the transition to pop. Without this, I'd be styled as a normal page.</p>		
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back to page "one"</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
		<ul>
			<li><a href="project1.php" id="info" data-icon="custom">Info</a></li>
			<li><a href="login.php" id="music" data-icon="custom">Music</a></li>
			<li><a href="filter.php" id="lyrics" data-icon="custom" class="ui-btn-active">Lyrics</a></li>
			<li><a href="#" id="skull" data-icon="custom">Submit</a></li>
		</ul>
		</div>lyrics
	</div>music
</div>
</div><!-- /page popup -->*/

<script type="text/javascript">
// This handles all the swiping between each page. You really
// needn't understand it all.
$(document).on('pageshow', 'div:jqmData(role="page")', function(){

     var page = $(this), nextpage, prevpage;
     // check if the page being shown already has a binding
      if ( page.jqmData('bound') != true ){
            // if not, set blocker
            page.jqmData('bound', true)
            // bind
                .on('swipeleft.paginate', function() {
                    console.log("binding to swipe-left on "+page.attr('id'));
                    nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                       $.mobile.changePage(nextpage,{transition: "slide"}, false, true);
                        }
                    })
                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
	reverse: true}, true, true);
                        };
                     });
            }
        });

</script>

</body>	
	
	
	

</head> 
</html>