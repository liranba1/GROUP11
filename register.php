<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>


  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>

  	  <label>Username</label>
  	  <input type="text" name="username">
	  <br/><br/>


  	  <label>Email</label>
  	  <input type="email" name="email">
	  <br/><br/>


  	  <label>Password</label>
  	  <input type="password" name="password_1">
	  <br/><br/>


  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
	  <br/><br/>

  	  <button type="submit" class="btn" name="reg_user">Register</button>
	  <br/><br/>

  	<p>
  		Already a member? <a href="login.php">Sign in</a><br/>
		Back to <a href="home.php">Homepage</a><br/>
  	</p>
  </form>
</body>
</html>
