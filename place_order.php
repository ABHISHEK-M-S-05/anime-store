<?php

include 'config.php';

$fullname = $_POST['fullname'];

$phone = $_POST['phone'];

$address = $_POST['address'];

$payment = $_POST['payment'];

$total = $_POST['total_amount'];

$query = "INSERT INTO orders
(fullname,phone,address,payment_method,total_amount)

VALUES

('$fullname','$phone','$address','$payment','$total')";

mysqli_query($conn,$query);

?>

<!DOCTYPE html>

<html>

<head>

<title>Order Success</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="login-container">

<div class="login-box">

<h1>

Order Placed Successfully 🎉

</h1>

<br>

<h2>

Amount Paid: ₹<?php echo $total; ?>

</h2>

<br>

<a href="home.php">

<button class="btn">

Continue Shopping

</button>

</a>

</div>

</div>

<script>

localStorage.removeItem("cart");

</script>

</body>

</html>