<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/styles_login.css">
  
	<title>Static Login</title>
	
</head>
	<!-- For Admin
		Username : admin
		Password : admin

		Username : Ravan
		Password : van123

		For Content Manager
		Username : Pepito
		Password : manaloto

		Username : Juan
		Password : delacruz

		For System User
		Username : User
		Password : 1234 -->
	<?php

		if (isset($_POST['btnLogin'])){
	
			$username = $_POST['username'];
			$pass = $_POST['password'];

			$userType = $_POST['userType'];
			$c = count($userType);

			for ($i=0; $i < $c; $i++) { 
				if ($userType[$i] == 1) {
					if($username == "admin" && $pass == "admin"){
						echo'<div class="alert alert-primary margTop" role="alert">';
        					echo"<center>Login Success as Admin</center>";
						echo"</div>";
					}
					elseif ($username == "Ravan" && $pass == "van123"){
						echo'<div class="alert alert-primary margTop" role="alert">';
        					echo"<center>Login Success as Admin</center>";
						echo"</div>";
					}
					else
						echo'<div class="alert alert-danger margTop" role="alert"><center>Wrong password / username!</center></div>';
				}

				if($userType[$i] == 2){
					if ($username == "Pepito" && $pass == "manaloto") {
						echo'<div class="alert alert-primary margTop" role="alert">';
        					echo"<center>Login Success as Content Manager</center>";
						echo"</div>";
					}
					elseif($username == "Juan" && $pass == "delacruz"){
						echo'<div class="alert alert-primary margTop" role="alert">';
        					echo"<center>Login Success as Content Manager</center>";
						echo"</div>";
					}
					else
						echo'<div class="alert alert-danger margTop " role="alert"><center>Wrong password / username!</center></div>';
				}
				if($userType[$i] == 3){
					if ($username == "User" && $pass == "1234") {
						echo'<div class="alert alert-primary margTop" role="alert">';
        					echo"<center>Login Success as Sytem User</center>";
						echo"</div>";
					}
					else
						echo'<div class="alert alert-danger margTop " role="alert"><center>Wrong password / username!</center></div>';
				}
			}	
		}
	?>

<body>
	<div class="container">
		<form action="" method="post">
			<div class="preview text-center">
				<img class="preview-img" src="img/pic.png" alt="" width="150" height="150"> 
			</div>
			<div class="form-group">
				<select class="form-control" name="userType[]" id="userType">
					<option value="1">Admin</option>
					<option value="2">Content Manager</option>
					<option value="3">System User</option>
				</select>
			</div>
			<div class="form-group">
				<input class="form-control" type="text" name="username" required autofocus placeholder="Enter Username">
			</div>
			<div class="form-group">
				<input class="form-control" type="password" name="password" required  placeholder="Enter Password" >
			</div>
			<div class="form-group">
				<input class="btn btn-primary btn-block" type="submit"  name="btnLogin" value="Login">
			</div>
		</form>
	</div>
	
</body>
</html>