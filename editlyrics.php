<?php session_start();
include("config.php");
$new=$_POST['newLyrics'];
$project=$_POST['projectname'];
$update = "UPDATE projectinfo SET lyrics='$new' WHERE projectname='$project'";
mysql_query($update);

?>
<meta http-equiv="REFRESH" content="0; URL=project.php?projectname=<?php echo "".$project."" ?>">

