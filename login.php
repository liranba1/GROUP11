<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	
  		<label>Username</label>
  		<input type="text" name="username" >
		<br/><br/>

  		<label>Password</label>
  		<input type="password" name="password">
	    <br/><br/>

  		<button type="submit" class="btn" name="login_user">Login</button>
	    <br/>

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a><br/>
		Back to <a href="home.php">Homepage</a><br/>
  	</p>
	
  </form>
</body>
</html>