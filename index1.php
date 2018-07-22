<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Mai întâi trebuie să te autentifici.";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Ești pregătit să înveți modulul practic?</h2>
</div>
<div class="content">

  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Bine ai venit,<strong><?php echo $_SESSION['username']; ?></strong>!</p>
    	<p> <a href="index1.php?logout='1'" style="color: red;">Deconectare</a> </p>
    <?php endif ?>
</div>
	
	<style>
.center {
    text-align: center;
}

.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 0 4px;
}

.pagination a.active {
    background-color: #FFD000;
    color: white;
    border: 1px solid #FFD000;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style><br><br>
		<div class="center">
  <div class="pagination">
    <a href="ardeleana.php">&laquo;</a>
    <a href="index.php" class="active">1</a>
    <a href="hora.php">2</a>
    <a href="brau.php">3</a>
	 <a href="ardeleana.php">4</a>
    <a href="hora.php">&raquo;</a>
  </div>
</div>
		
</body>
</html>