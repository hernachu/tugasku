<?php 
	session_start();
	if (isset($_SESSION['login'])) {
		header("location: register.php");
		exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	.error {color: #FF0000;}
body {background-color: pink;}
</style>
	<title>Login</title>
</head>
<body>
 <div class="row">
  <div class="col-md-6 col-md-offset-3">

<br><br><br><br><br><br><br><br><br><br><br>
 	<center> <u> <i><b> <h2>Silahkan Login <br><br></h2> </b></i></u></center>
 	<form method="POST" action="actionlogin.php">
 		<center>
 		Username	: 
		<input type="text" name="username" placeholder="username">
		<br>
		<br>
		Password	:
		<input type="password" name="password" placeholder="password">
		<br><br>
		<input type="submit" name="masuk">
	</center>
 	</form>
 		<center> <i><br><br> <h3>Belum Punya Akun?</h3> <button><a href="formregister.php"> Sign Up</a></button></i></center>
 				
 </div>
</div>
</body>
</html>