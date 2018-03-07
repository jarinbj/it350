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
$sql = "DELETE FROM developer WHERE name = ?";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $n);
$stmt->execute();
$results = $stmt->get_result();
echo "connected";
header( 'Location: developers.php' ) ;
}
?>
