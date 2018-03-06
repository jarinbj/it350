<?php
$n =  $_POST["name"];
$n = filter_var($n,FILTER_SANITIZE_STRING);
$r =  $_POST["release"];
$r = filter_var($r,FILTER_SANITIZE_STRING);
$d =  $_POST["description"];
$d = filter_var($d,FILTER_SANITIZE_STRING);
$p =  $_POST["price"];

$t =  $_POST["timessold"];

$s =  $_POST["systemID"];

$dev = $_POST["developer"];
$dev = filter_var($dev,FILTER_SANITIZE_STRING);
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
$sql = "INSERT INTO rom VALUES('$n','$r','$d','$p','$t','$s','$dev')";
echo mysqli_query($conn,$sql);
echo "connected";
header( 'Location: index.php' ) ;
}
?>
