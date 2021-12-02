<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['cashier_id'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
$sid=$_SESSION['staff_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Herbs & Jed Pharmacy</title>
<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand font-weight-bold" href="#">
			<img src="images/hd_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
			Herbs & Jed Pharmacy 
		</a>
	</nav>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="cashier.php">Dashboard</a></li>
			<li><a href="payment.php"target="_top">Process payment</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="cashier.php" class="dashboard-module">
                	<img src="images/cashier_icon.jpg" width="100" height="100" alt="edit" />
                	<span>Dashboard</span>
                </a>
			     <a href="payment.php"target="_top" class="dashboard-module">
                	<img src="images/payment.png" width="100" height="100" alt="edit" />
                	<span>Process Payment</span>
                </a>
              </div>
</div>
<div id="footer" class="text-center"> <p class="mt-5 mb-3 text-muted">&copy; Herbs & Jed Pharmacy. Copyright All Rights Reserved 2021</p></div>
<script src="style\bootstrap\js\bootstrap.bundle.min.js">
</script> 
</div>
</body>
</html>
