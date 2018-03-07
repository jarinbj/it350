<?php
echo isset($_POST["name"]);
$n =  $_POST["name"];
$n = filter_var($n,FILTER_SANITIZE_STRING);
$r =  $_POST["release"];
$r = filter_var($r,FILTER_SANITIZE_STRING);
$d =  $_POST["dev"];
$d = filter_var($d,FILTER_SANITIZE_STRING);
if ($n == "" || $r == "" || $d == "")
{
echo "nope";
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
$sql = "INSERT INTO gamesystem (name,releasedate,developer) VALUES(?,?,?)";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$n,$r,$d);
$stmt->execute();
$results = $stmt->get_result();
}
}
header( 'Location: systems.php' ) ;
?>
