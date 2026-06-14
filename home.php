<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Home</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<h1>Anime Merchandise Store</h1>

<p>Welcome Nakama!</p>

</header>

<?php include 'includes/navbar.php'; ?>

<div class="container">

<div class="hero">

<h1>Welcome To Anime Store</h1>

<p>One Piece • Naruto • JJK • Demon Slayer</p>

<br>

<a href="products.php">

<button class="btn">

Shop Now

</button>

</a>

</div>

<h2>Featured Products</h2>

<br>

<div class="clearfix">

<div class="product">

<img src="images/luffy_tshirt.jpg">

<h3>Luffy T-Shirt</h3>

<p>₹799</p>

</div>

<div class="product">

<img src="images/zoro_sword.jpg">

<h3>Zoro Sword</h3>

<p>₹2499</p>

</div>

<div class="product">

<img src="images/sanji_hoodie.jpg">

<h3>Sanji Hoodie</h3>

<p>₹1499</p>

</div>

</div>

</div>

<?php include 'includes/footer.php'; ?>

</body>

</html>