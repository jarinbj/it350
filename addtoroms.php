<?php
if (isset($_POST["name"]) && isset($_POST["release"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["timessold"]) &&
isset($_POST["systemID"]) && isset($_POST["developer"]))
{
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
if ($n == "" || $r == "" || $d == "" || $dev == "")
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
$sql = "INSERT INTO rom VALUES(?,?,?,?,?,?,?)";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $n,$r,$d,$p,$t,$s,$dev);
$stmt->execute();
$results = $stmt->get_result();
}
}
header( 'Location: index.php' ) ;
}
?>
