<?php
//header('Location:home.php');

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name=""; // Database name 
$tbl_name="users"; // Table name 

$link = mysql_connect('mysql-user-master.stanford.edu', 'ccs147lilithwu', 'ahpobeiw');
mysql_select_db('c_cs147_lilithwu');

//get username and password sent from form
$username=$_POST['username']; 
$password=$_POST['password']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched, table row must be 1 row
if($count==1){

// Register and redirect to file "loggedin.php"
$_SESSION['username'] = "$username";
$_SESSION['password'] = "$password";
header("location:loggedin.php");
}
else {
echo ("Wrong Username or Password");
echo ('<p><a href="index.html">Back</a>');

}
?>