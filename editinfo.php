<?php session_start();
$info=$_POST['textarea']; 
include("config.php");
$project=$_SESSION['activeProj'];
$update = "UPDATE projectinfo SET info='$newinfo' WHERE projectname='$project'";
mysql_query($update);

//echo('<meta http-equiv="REFRESH" content="0; URL=project.php">');

?>
