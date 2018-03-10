<!doctype html>
<?php 
session_start();
if (isset($_SESSION['user_id']))
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
$sql = "SELECT * FROM account WHERE username = ?";
$stmt = $conn->stmt_init();
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_SESSION['user_id']);
echo $user = $n;
$stmt->execute();
$results = $stmt->get_result();

if (mysqli_num_rows($results) > 0)
{
 while ($row = mysqli_fetch_assoc($results))
{
if ($row["admin"] == 1)
{
 
}
else
{
header( 'Location: login.php' ) ;
}
}
}
}
else
{
header( 'Location: login.php' ) ;
}
?>
<html lang="en">
<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
table, th, td {
    border: 2px solid black;
    margin: auto;
}
</style>
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="./vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body class="sidebar-fixed header-fixed">
<?php 

?>
<div class="page-wrapper">
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="#">
            <img src="./imgs/logo.png" alt="logo">
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item d-md-down-none">
                <a href="#">
                    <i class="fa fa-envelope-open"></i>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./imgs/avatar-1.png" class="avatar avatar-sm" alt="logo">
                    <span class="small ml-1 d-md-down-none"><?php echo $_SESSION['user_id'] ?></span>
                </a>
				<?php
				if (1) { ?>
					<div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope"></i> Messages
                    </a>

                    <div class="dropdown-header">Settings</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-bell"></i> Notifications
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-wrench"></i> Settings
                    </a>
					
                    <a href="logout.php" class="dropdown-item">
                        <i class="fa fa-lock"></i> Logout
						<?php } ?>
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Navigation</li>

                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Roms
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="customer.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Customers
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="developers.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Developers
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="systems.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Game Systems
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="sales.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Sales
                        </a>
                    </li>


                  
                </ul>
            </nav>
        </div>

        <div class="content">
<h1>Add a system</h1>
<form action="addsystem.php" method="post">
  Name:
  <input type="text" name="name">
  Release date:
  <input type="text" name="release"><br>
Developer:
  <input type="text" name="dev">
<input type ="submit" text = "Submit">
<H1>Remove a system by ID</H1>
</form>
<form action="removesystem.php" method="post">
  ID:
  <input type="text" name="id">
<input type ="submit" text = "Submit">
</form>
            <div class="container-fluid">
                <div class="row">
		<table>
                  <?php 
			$sql = "SELECT * FROM gamesystem ORDER BY systemID ASC";
			$results = mysqli_query($conn,$sql);
			?>
				<tr>
			<?php
						echo "<th>" . "ID" .  "</th>" . "<th>" . "name" . "<th>" . "Release date" .  "</th>" . "<th>" . "Developer" .  "</th>" .  "</th>" . "<br>";
			?>
			</tr>
			</div>
			<?php
			if (mysqli_num_rows($results) > 0)
			{
				while ($row = mysqli_fetch_assoc($results))
					{
						?>
						<tr>
						<div class="row">
					<?php

			echo "<TD>" . $row["systemID"] . "</TD><TD>" . $row["name"] . "</TD> <TD>" . $row["releasedate"] . "<TD>" . $row["developer"] . "</TD><br>";
					?>

					</tr>
					</div>
					<?php
					}
			}
		?>
                   </table>
                 

                   
                </div>
		</div>
                <div class="row ">
                    <div class="col-md-12">
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>
