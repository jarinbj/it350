<?php
$n =  $_POST["name"];
$n = filter_var($n,FILTER_SANITIZE_STRING);
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
echo "connected";
$sql = "DELETE FROM rom WHERE name = '$n'";
echo mysqli_query($conn,$sql);
echo "connected";
header( 'Location: index.php' ) ;
}
?>
