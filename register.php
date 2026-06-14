<?php

include 'config.php';

if(isset($_POST['register'])){

$username = $_POST['username'];

$email = $_POST['email'];

$password = $_POST['password'];

$query = "INSERT INTO users(username,email,password)

VALUES('$username','$email','$password')";

mysqli_query($conn,$query);

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Register</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="login-container">

<div class="login-box">

<h1>Create Account</h1>

<form method="POST">

<input type="text"
name="username"
placeholder="Enter Username"
required>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button class="btn"
type="submit"
name="register">

Register

</button>

</form>

<br>

<a href="login.php">

Already Have Account? Login

</a>

</div>

</div>

</body>

</html>