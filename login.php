<?php include_once 'includes\server.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Deallo Craft House - Login</title>
	<link rel="stylesheet" type="text/css" href="styles\login_styles.css"/>
    <link rel="icon" type="image/png" href="images/DealloLogo-favicon.png"/>
</head>
<body class="bg">

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('includes\errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="pages\register.php">Sign up</a>
		</p>
        <p>
			<a href="pages\forgotPassword.php">Forgot password?</a>
		</p>
	</form>


</body>
</html>