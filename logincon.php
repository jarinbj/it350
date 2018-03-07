<?php
session_start();
$n = $_POST["user"];
$n = filter_var($n,FILTER_SANITIZE_STRING);
//echo $n;
$r =  $_POST["password"];
$r = filter_var($r,FILTER_SANITIZE_STRING);
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
//$sql = "SELECT * FROM account WHERE username = '" . $n . "'";
$sql = "SELECT * FROM account WHERE username = ?";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
echo $user = $n;
$stmt->execute();
$results = $stmt->get_result();
if (mysqli_num_rows($results) == 1) 
{
echo $row = mysqli_fetch_assoc($results);
if (password_verify($r,$row['password']))
{
echo "yes";
$_SESSION['user_id'] = $n;
}
}
header( 'Location: index.php' ) ;
}
?>
