







<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","feedly");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="container" id="container">
		<!-- one when "sign up" is clicked -->
		<div class="form-container sign-up-container">
			<form action="" method="POST">
				<h1>Create Account</h1>
				<input type="text" placeholder="Name" name="st_username" />
				<input type="email" placeholder="Email" name="st_email" />
				<input type="password" placeholder="Password" name="st_pass" />
				<button name="sign_up">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="" method="POST">
				<h1>Sign in</h1>
				<input type="text" placeholder="Username" name="st_username" />
				<input type="password" placeholder="Password" name="st_pass"/>
				<a href="#">Forgot your password?</a>
				<button name="sign_in">Sign In</button>
<!-- 				<button class="ghost-black" id="committeeSignIn">committee?</button>
 -->
 				<!-- <button class="ghost-black" id="signIn">committee?</button> -->
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>
	<script src="app.js"></script>
</body>
</html>

<?php
	if(isset($_POST['sign_in']))
	{
		if(isset($_POST['st_username']))
		{
			$q = "SELECT * FROM students WHERE st_username='$_POST[st_username]' and st_pass='$_POST[st_pass]';";
			if($q)
			{
				echo "<script>alert('Logged in');</script>";
			}
		}
	}
?>