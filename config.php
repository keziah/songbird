
<?php
$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147lilithwu', 'ahpobeiw');
mysql_select_db('c_cs147_lilithwu');


if(!isset($_SESSION['username'])){
	session_destroy();
	?>
	<meta http-equiv="REFRESH" content="0; URL=index.php">
	<?php
}

?>