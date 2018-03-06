<?php
$n = $_POST["user"];
$r =  $_POST["password"];
$hashed_password = password_hash($r,PASSWORD_DEFAULT);
$d =  $_POST["email"];
$d = filter_var($d,FILTER_SANITIZE_EMAIL);
$servername = "localhost";
$username = "root";
$password = "itsatrap";
$dbname = "coolroms";
$sql = "SELECT * FROM account WHERE username = '" . $n . "'";
$results = mysqli_query($conn,$sql);
if (mysqli_num_rows($results) == 1) 
{
  
}
else
{
if (!filter_var($d,FILTER_VALIDATE_EMAIL) === false)
{
echo "yes";
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
}
}
}
header( 'Location: index.php' ) ;
?>
