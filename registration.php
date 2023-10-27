<?php 
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']==true) {
	header("Location:index.php");
}
include_once("functions.php");

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		getUserRegistrationInfo($_POST,$filename,$errorMsg);
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="data-bs-theme-dark"  data-bs-theme="dark">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 p-4 border">
					<h3 class="text-center">Registration System</h3>
					<span class="text-danger"><?php echo $errorMsg; ?></span>
					<form action="registration.php" method="post">
					  <div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" name="username" class="form-control" id="username" >
					  </div>
					  
					  <div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="email" name="email" class="form-control" id="email" >
					  </div>
					  
					  <div class="mb-3">
						<label for="pass" class="form-label">Password</label>
						<input type="password" name="password" class="form-control" id="pass">
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Registration</button>
					  <p>If you have already account? <a href="login.php">Login</a></p>
					</form>
				</div>
			</div>
			
		</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>