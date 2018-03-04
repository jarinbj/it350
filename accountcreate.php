<?php
$n = $_POST["user"];
echo $n;
$r =  $_POST["password"];
$hashed_password = sha1($r);
echo $hashed_password;
$d =  $_POST["email"];
echo $d;
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
$sql = "INSERT INTO account VALUES('$n','$hashed_password','$d',0)";
echo mysqli_query($conn,$sql);
echo "connected";
header( 'Location: index.php' ) ;
}
?>
