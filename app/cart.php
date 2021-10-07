<?php
$name_cookie = $_COOKIE['name'];
$value_cookie = $_COOKIE['value'];
$ingredients_cookie = $_COOKIE['ingredients'];
$weight_cookie = $_COOKIE['weight'];

?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/app.min.css">
	<script src="js/app.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>cart</title>
	
    
    

	
	
</head>
<body>
	<h1>Kuku</h1>
	<?php 
if(isset($_COOKIE['name'])){

	$head = '<div class="col-lg-12 cookie-form d-flex flex-column align-items-center">
    	<div class="block-cookie colorGrey"><b>Вы будете жрать  '.$name_cookie. '!</br>по цене '.$value_cookie. '</div>
    		
    		<a href="each_view.php?id=' . $info['id'] . '">оформить заказ</a></div>';
	echo $head;
	
	}

	?>
	<div class="nown">

	</div>
</body>
</html>