<?php session_start();
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
	
	<div data-role="header">
		<h1>Home</h1>
				<!-- COMMENTED OUT HOME BUTTON
		<a data-role="button" href="home.php" data-icon="home" data-iconpos="left" class="ui-btn-left" data-ajax="false">Home
        </a>
        -->
		<a href="#popupMenu" data-rel="popup" data-role="button" data-icon="arrow-d" data-iconpos="right" data-inline="true" data-transition="fade" class="ui-btn-right">Options</a>
		

	
	<div data-role="popup" id="popupMenu" data-overlay-theme="c">
    <ul data-role="listview" data-inset="true" style="width:180px;" data-theme="c">
    	<li>Logged in as <?php 
    		echo($_SESSION['username']);?></li> 
       <!-- <li><a data-rel="popup" href="myProfile.php" data-ajax="false">Profile</a></li>-->
        
<li><a data-rel="popup" href="logout.php" data-ajax="false">Logout</a></li>
    </ul>
	</div>
	</div><!-- /header -->



<div id="content" class="clearfix" style="padding:20px">
<!--help popup code below-->
<!--help button-->
<a class="ui-btn-right" style="float:right" href="#help" data-rel="popup" data-role="button" data-mini="true" data-icon="info" data-iconpos="notext" data-inline="true" data-position-to="window"> </a>

<!--help div-->
<div data-role="popup" id="help">
<a href="#" data-role="button" class="ui-btn-left" data-iconpos="notext" data-icon="delete" data-rel="back"> </a>
		<p>This is your home page. From here, you can create a new project or manage the projects you have already created. 		
		<p>You can always return to this page by clicking HOME on the top left of any other page.
		</div></div>

<section id="center">

<h1><?php 
		echo($_SESSION['username']);
		?></h1>

        <section id="left">


                <div class="pic">
                    <a href="#"><img src="images/PartyCat.jpg" width="150" height="150" /></a>


                </div>
                <p> User info </p>

                 

                <div class="data">

                    

                    <h3>San Francisco, CA</h3>

                 <h4><a href="http://google.com/">http://YOUR-WEBSITE-NAME-HERE.com/</a></h4>


<!--Right now the new project button is just linking to project.php. This might need to change later -->

<a href="createnew.php" data-role="button" data-theme="c" data-icon="arrow-r"data-iconpos="right" data-ajax="false">
            Create a new project
        </a>
<h2>My Projects</h2>
<a href="project.php">Example Project</a>
<br>More example projects go here.
<br>And here.
<br>And here.


                    </ul>

                </div>

            </div>

	
	
	
</head> 
</html>