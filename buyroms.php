<!doctype html>
<?php 
session_start();
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

?>
<html lang="en">
<style>
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 100%;
    padding: 50px;
 
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
                    <span class="small ml-1 d-md-down-none"><?php echo $_SESSION['user_id'] ?> </span>
                </a>
				<?php
				if (isset($_SESSION['user_id'])) { ?>
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
			<?php
			if (!isset($_SESSION['user_id'])) { ?>
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
                        <i class="fa fa-lock"></i> Login
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
                        <a href="buyroms.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> Buy Roms
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="viewroms.php" class="nav-link active">
                            <i class="icon icon-speedometer"></i> View Owned Roms
                        </a>
                    </li>
			<li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="icon icon-speedometer"></i> update personal info
                        </a>

    
              </ul>
            </nav>
        </div>

        <div class="content">
<form>
<h1>Buy a rom</h1>
  Name:
<input type="text" name="name" id = "buy">
<input type ="submit" text = "Submit" onclick = "buyit();">
</form>
<H1>search roms</H1>
<form>
  Name:
  <input type="text" name="name" id = "search">
<input type ="submit" text = "Submit" onclick = "searchroms();">
</form>
            <div class="container-fluid">
                <div class="row">
	
		<table>
                  <?php 
			$sql = "SELECT * FROM rom ORDER BY name ASC";
			$results = mysqli_query($conn,$sql);
			?>
				<tr>
			<?php 
						echo "<div><th>" . "name" .  "</th>" . "<th> " . "releasedate</th>" . "<th> " . "description</th>" . "<th> " . 
						"price</th>" . "<th> " . "timessold</th>" . "<th> " . "systemID</th>" . "<th>" . "developer</th></div>"   							;
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

			echo "<TD>" . $row["name"] . "</TD> <TD>" . $row["releasedate"] . "</TD> <TD>" . $row["description"] . "</TD> <TD>$" . 
	$row["price"] . "</TD> <TD>" . $row["timessold"] . "</TD> <TD>" . $row["systemID"] . "</TD><TD>" . $row["developer"] .  "</TD>";
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
<script type="text/javascript">
   function buyit(){
       var lol = document.getElementById('buy').value;
	document.cookie = "bought=" + lol;
<?php $buy = $_COOKIE['bought']; $success = shell_exec("python hello.py " . $buy . " " . $_SESSION['user_id']);?>
alert("Processed");

 }
function searchroms(){
       var lol = document.getElementById('search').value;
       alert(lol);
   }
</script>

<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/popper.js/popper.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="./vendor/chart.js/chart.min.js"></script>
<script src="./js/carbon.js"></script>
<script src="./js/demo.js"></script>
</body>
</html>
