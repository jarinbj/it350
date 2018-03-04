<?php
session_start();
$n = $_POST["user"];
//echo $n;
$r =  $_POST["password"];
$hashed_password = sha1($r);
//echo $hashed_password;
$servername = "localhost";
$username = "root";
$password = "itsatrap";
$dbname = "coolroms";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) 
{
	echo "failed";
	die("Connection Failed: " . mysqli_connect_error());
}
else
{
//echo "connected";
$sql = "SELECT * FROM account WHERE username = '" . $n . "' AND password = '" . $hashed_password . "'";
$results = mysqli_query($conn,$sql);
if (mysqli_num_rows($results) == 1) 
{
echo "yes";
$_SESSION['user_id'] = $n;
}
echo $_SESSION['user_id'];
header( 'Location: index.php' ) ;
}
?>
