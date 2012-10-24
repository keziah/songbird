<?php
$user = isset($_SESSION['user'])? $_SESSION['user'] : "Songbird";
echo ("<title>".$user."'s Profile"."</title>");
echo ('<a href="">Edit Account Details</a><p>Personal blurb here. Edit blurb should be implemented in-page with Ajax if possible.');

?>