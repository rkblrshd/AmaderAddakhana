<!DOCTYPE html>
<html>
<head>
	<title>Front Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		overflow-x: hidden;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}
	#login{
		width: 60%;
		background-color: #fff;
		border: 1px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #fff;
		border: 2px solid #1da1f2;
		color: #1da1f2;
		border-radius: 30px;
	}
	.well{
		background-color: #187FAB;
	}
</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: white"><b><i>আমাদের আড্ডাখানা</i></b></h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left: 0.5%;">
			<img src="images/Front.jpg" class="img-rounded"title="Welcome" width="700px" height="500px" >
		</div>
		<div class="col-sm-6" style="left: 8%:">
			<img src="images/codingcafelogo.png" class="img-rounded" title="Welcome" width="80px" height="80px">
			<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
			<h4><strong>join Today</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php
					if (isset($_POST['signup'])) {
						echo "<script>window.open('signup.php','_self')</script>";
					}
				 ?>
				<button id="login" class="btn btn-info btn-lg" name="login">Login</button><br><br>
				<?php
					if (isset($_POST['login'])) {
						echo "<script>window.open('signin.php','_self')</script>";
					}
				 ?>
			</form>
		</div>
	</div>
</body>
</html>