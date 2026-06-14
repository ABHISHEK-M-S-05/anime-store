<?php

session_start();

include 'config.php';

if(isset($_POST['login'])){

$email = $_POST['email'];

$password = $_POST['password'];

$query = "SELECT * FROM users
WHERE email='$email'
AND password='$password'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

$_SESSION['user']=$email;

header("Location: home.php");

}else{

echo "<script>alert('Invalid Login');</script>";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Anime Store Login</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="login-container">

<div class="login-box">

<h1>Anime Store</h1>

<p>Welcome Back Nakama!</p>

<form method="POST">

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit"
name="login"
class="btn">

Login

</button>

</form>

<br>

<a href="register.php">

New User? Register Here

</a>

</div>

</div>

</body>

</html>