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
		<h1>User Profile</h1>
	</div><!-- /header -->





<script type="text/javascript" charset="utf-8">

// <![CDATA[
$(document).ready(function() {
  $(".charcounter").editable("myProfile.php", { 
      indicator : "<img src='img/indicator.gif'>",
      type      : "charcounter",
      submit    : 'OK',
      tooltip   : "Click to edit...",
      onblur    : "ignore",
      charcounter : {
         characters : 60
      }
  });
    $(".autogrow").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : "autogrow",
        submit    : 'OK',
        cancel    : 'cancel',
        tooltip   : "Click to edit...",
        onblur    : "ignore",
        autogrow : {
           lineHeight : 16,
           minHeight  : 32
        }
    });
    $(".masked").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : "masked",
        mask      : "99/99/9999",
        submit    : 'OK',
        tooltip   : "Click to edit..."
    });
    $(".datepicker").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : 'datepicker',
        tooltip   : "Click to edit..."
    });
    $(".timepicker").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : 'timepicker',
        submit    : 'OK',
        tooltip   : "Click to edit..."
    });
    $(".time").editable("http://www.appelsiini.net/projects/jeditable/php/save.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : 'time',
        submit    : 'OK',
        tooltip   : "Click to edit..."
    });
    $(".ajaxupload").editable("http://www.appelsiini.net/projects/jeditable/php/upload.php", { 
        indicator : "<img src='img/indicator.gif'>",
        type      : 'ajaxupload',
        submit    : 'Upload',
        cancel    : 'Cancel',
        tooltip   : "Click to upload..."
    });
});
// ]]>
</script>  





<div id="content" class="clearfix">

<section id="center">

<h1>Johnny Appleseed</h1>

        <section id="left">


                <div class="pic">
                    <a href="#"><img src="images/PartyCat.jpg" width="150" height="150" /></a>


                </div>
                <p> User info </p>

                 

                <div class="data">

                    

                    <h3>San Francisco, CA</h3>

                 <h4><a href="http://spyrestudios.com/">http://spyrestudios.com/</a></h4>

                    <div class="socialMediaLinks">

                        <a href="http://twitter.com/jakerocheleau" rel="me" target="_blank"><img src="img/twitter.png" alt="@jakerocheleau" /></a>

                        <a href="http://gowalla.com/users/JakeRocheleau" rel="me" target="_blank"><img src="img/gowalla.png" /></a>

                    </div>

                    <div class="sep"></div>

                    <ul class="numbers clearfix">

                        <li>Music Library<strong>185</strong></li>

                       

                    </ul>

                </div>

            </div>

	
	
	
</head> 
</html>