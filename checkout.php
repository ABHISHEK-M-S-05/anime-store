<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Checkout</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<h1>Checkout</h1>

</header>

<?php include 'includes/navbar.php'; ?>

<div class="form-box">

<form action="place_order.php"
method="POST">

<input type="text"
name="fullname"
placeholder="Full Name"
required>

<input type="text"
name="phone"
placeholder="Phone Number"
required>

<textarea name="address"
placeholder="Delivery Address"
required>

</textarea>

<select name="payment"
required>

<option value="COD">

Cash On Delivery

</option>

<option value="UPI">

UPI

</option>

<option value="Card">

Debit/Credit Card

</option>

</select>

<input type="hidden"
name="total_amount"
id="totalAmount">

<button class="btn">

Place Order

</button>

</form>

</div>

<?php include 'includes/footer.php'; ?>

<script>

let cart =
JSON.parse(localStorage.getItem("cart")) || [];

let total = 0;

cart.forEach(item=>{

total += item.price * item.quantity;

});

document.getElementById("totalAmount").value = total;

</script>

</body>

</html>