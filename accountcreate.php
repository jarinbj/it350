<?php
$n = $_POST["user"];
$name = filter_var($n,FILTER_SANITIZE_STRING);
$r =  $_POST["password"];
$r = filter_var($r,FILTER_SANITIZE_STRING);
$hashed_password = password_hash($r,PASSWORD_DEFAULT);
$d =  $_POST["email"];
$d = filter_var($d,FILTER_SANITIZE_STRING);
$email = filter_var($d,FILTER_SANITIZE_EMAIL);
if ($n == "" || $r == "" || $d == "")
{

}
else
{ 
$servername = "localhost";
$username = "root";
$password = "itsatrap";
$dbname = "coolroms";
$conn = mysqli_connect($servername,$username,$password,$dbname);
$sql = "SELECT * FROM account WHERE username = ?";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $n);
$stmt->execute();
$results = $stmt->get_result();
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
$sql = "INSERT INTO account VALUES(?,?,?,0)";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $n,$hashed_password,$d);
$stmt->execute();
$results = $stmt->get_result();
echo "connected";
}
}
}
}
header( 'Location: index.php' ) ;
?>
