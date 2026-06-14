<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Cart</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<h1>Your Cart</h1>

</header>

<?php include 'includes/navbar.php'; ?>

<div class="container">

<table>

<thead>

<tr>

<th>Image</th>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th>Remove</th>

</tr>

</thead>

<tbody id="cartItems">

</tbody>

</table>

<br>

<h2 id="grandTotal">

Grand Total: ₹0

</h2>

<br>

<a href="checkout.php">

<button class="btn">

Proceed To Checkout

</button>

</a>

</div>

<?php include 'includes/footer.php'; ?>

<script src="js/script.js"></script>

</body>

</html>