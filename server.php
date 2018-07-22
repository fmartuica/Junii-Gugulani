<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'registration');


if (isset($_POST['reg_user'])) { 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Este necesar un nume de utilizator."); }
  if (empty($email)) { array_push($errors, "Este necesar un email."); }
  if (empty($password_1)) { array_push($errors, "Este necesară o parolă."); }
  if ($password_1 != $password_2) {
	array_push($errors, "Cele două parole nu se potrivesc.");
  }


  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Acest nume de utilizator este deja existent.");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Acest email este deja existent.");
    }
  }


  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Sunteți conectat(ă) acum.";
  	header('location: index1.php');
  }
}


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Este necesar numele de utilizator.");
  }
  if (empty($password)) {
  	array_push($errors, "Este necesară parola.");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Sunteți conectat(ă) acum.";
  	  header('location: index1.php');
  	}else {
  		array_push($errors, "Numele de utilizator sau parola este greșit.");
  	}
  }
}

?>