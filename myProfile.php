<?php
$user = isset($_SESSION['user'])? $_SESSION['user'] : "Songbird";
echo ("<title>".$user."'s Profile"."</title>");
echo ('<a href="">Edit Account Details</a><p>Personal blurb here. Edit blurb should be implemented in-page with Ajax if possible.');
echo('<p>Projects:');
echo('<br>Public projects would show here. Private projects would also show if the user has permission');
echo('<br><a href="project.php">Example Project</a>');

?>