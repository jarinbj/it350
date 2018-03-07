<?php
if (isset($_POST["name"]) && isset($_POST["royalty"]))
{
$n =  $_POST["name"];
$n = filter_var($n,FILTER_SANITIZE_STRING);
$r =  $_POST["royalty"];
$r = filter_var($r,FILTER_SANITIZE_STRING);
if ($n == "")
{

}
else
{
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
$sql = "INSERT INTO developer VALUES(?,?)";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $n,$r);
$stmt->execute();
$results = $stmt->get_result();
}
}
header( 'Location: developers.php' ) ;
}
?>
