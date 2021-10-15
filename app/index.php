<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>beget</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/app.min.css">
	<script src="js/jquery-3.0.0.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="smalcart">
				<strong>Товаров в корзине:</strong>	<?=$smal_cart['cart_count']?> шт.
				<br/>
				<strong>На сумму:</strong>	<?=$smal_cart['cart_price']?> руб.	
				<br/>
				<a href=''>Оформить заказ</a>
			</div>	
	<?php 
	require_once('menu.php');


	?>
	


<script src="js/app.min.js"></script>
</body>
</html>