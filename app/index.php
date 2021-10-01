<?php
$name = $_POST['name'];
$value = $_POST['value'];
$ingredients = $_POST['ingredients'];
$weight = $_POST['weight'];

if (isset($_POST['submit'])) {
  setcookie('name', $name);
  setcookie('value', $value);
  setcookie('ingredients', $ingredients);
  setcookie('weight', $weight);
   
}
$name_cookie = $_COOKIE['name'];
$value_cookie = $_COOKIE['value'];
$ingredients_cookie = $_COOKIE['ingredients'];
$weight_cookie = $_COOKIE['weight'];
?><!DOCTYPE html>
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
	
	<?php echo(kkk); 
	require_once('menu.php');?>
	
	<div class="block">
		<a target="_blank" href="doc.1.html">Документ 1</a>
	</div>
	<div class="block"></div>
		<a target="_self" href="">Документ 2</a>
	<div class="block"></div>
		<a target="_self" href="">Документ 3</a>

<script src="js/app.min.js"></script>
</body>
</html>