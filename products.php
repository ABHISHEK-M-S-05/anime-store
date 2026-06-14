<?php

session_start();

include 'config.php';

if(!isset($_SESSION['user'])){

header("Location: login.php");

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Products</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body>

<header>

<h1>Anime Products</h1>

</header>

<?php include 'includes/navbar.php'; ?>

<div class="container">

<div class="clearfix">

<?php

$result = mysqli_query($conn,
"SELECT * FROM products");

while($row = mysqli_fetch_assoc($result)){

?>

<div class="product">

<img src="<?php echo $row['product_image']; ?>">

<h3>

<?php echo $row['product_name']; ?>

</h3>

<p>

₹<?php echo $row['product_price']; ?>

</p>

<button class="btn add-cart"

data-id="<?php echo $row['id']; ?>"

data-name="<?php echo $row['product_name']; ?>"

data-price="<?php echo $row['product_price']; ?>"

data-image="<?php echo $row['product_image']; ?>">

Add To Cart

</button>

</div>

<?php } ?>

</div>

</div>

<?php include 'includes/footer.php'; ?>

<script src="js/script.js"></script>

</body>

</html>