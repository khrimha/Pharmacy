<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){
case 'Admin':
$result=mysqli_query($con, "SELECT admin_id, username FROM admin WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Pharmacist':
$result=mysqli_query($con, "SELECT pharmacist_id, first_name,last_name,staff_id,username FROM pharmacist WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['pharmacist_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pharmacist.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Cashier':
$result=mysqli_query($con, "SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['cashier_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':
$result=mysqli_query($con, "SELECT manager_id, first_name,last_name,staff_id,username FROM manager WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
echo <<<LOGIN

LOGIN;
?>

<!DOCTYPE html>
<html>
<head>
<title>Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css">

</head>
<body>

<div id="content">
<!-- <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand font-weight-bold" href="#">
    <img src="images/hd_logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    Pharmacy System 
  </a>
</nav> -->

<div id="main">

  <section class="text-center">

  	<form class="form-signin" method="post" action="index.php">
      <img class="mb-4" src="images/hd_logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	  <p> <?= $message ?> </p>
      <label for="inputUsername" class="sr-only">Username</label>
      <input type="text" id="inputUsername" class="form-control" name="username" value="" placeholder="Username" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="password" value="" placeholder="Password" required>
      <div class="checkbox mb-3">
	  <select class="form-control form-control-lg custom-select mr-sm-2" name="position" id="position">
        <option selected>Select position...</option>
        <option >Admin</option>
        <option >Pharmacist</option>
        <option >Cashier</option>
		<option >Manager</option>
      </select>
	    
      </div>
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Login"/>
      
    </form>
    </section>
</div>
<div id="footer" class="text-center"> <p class="mt-5 mb-3 text-muted">&copy; Pharmacy Sys. Copyright All Rights Reserved 2021</p></div>
<script src="style\bootstrap\js\bootstrap.bundle.min.js">
</script> 
</div>
</body>
</html>