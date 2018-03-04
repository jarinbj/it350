<?php
$n =  $_POST["name"];
echo $n;
$r =  $_POST["release"];
echo $r;
$d =  $_POST["description"];
echo $d;
$p =  $_POST["price"];
echo $p;
$t =  $_POST["timessold"];
echo $t;
$s =  $_POST["systemID"];
echo $s;
$dev = $_POST["developer"];
echo $dev;
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
