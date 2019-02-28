<?php
	session_start();
	include '../database.php';
	include '../function.php';
	
	$db = new Database();

	if(isset($_POST['login'])){
		
		$email = mysqli_real_escape_string($db->con, $_POST['email']);
		$password = mysqli_real_escape_string($db->con, $_POST['password']);
	    
		
		if($email=='' || $password==''){
			echo 'Please fill all fields';
			
		}
		else{
			$query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
			$run = $db->select($query);
			
			if($run->num_rows > 0){
				$_SESSION['email'] = $email;
				header('location: index.php');
			}
			else{
				header('location: login.php');
			}
		}
		
	}	
		
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Login Page</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="container">
		<h1 align="center">Admin Login Page</h1>
		<div class="row">
		<br>
        <div class="col-md-6 col-md-offset-3 blog-main">
			
			<form action="login.php" method="post">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder="Enter Your Email" required />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Password" required />
				</div>
				<input type="submit" name="login" value="Login" class="btn btn-primary" />
			</form>
		</div>
		</div>
	</div>
  </body>
</html>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		