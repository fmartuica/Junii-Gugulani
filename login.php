<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Conectare</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nume de utilizator</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Parolă</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Conectare</button>
  	</div>
  	<p>
  		Nu ești încă membru? <a href="register.php">Înregistrare</a>
  	</p>
  </form>
</body>
</html>