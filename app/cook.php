<?php 

if(isset($_COOKIE['name'])){
	$select_c = sprintf($date_c);
	$select_b = sprintf($timeorder_c);
	$select_t = sprintf($people_c);
	$pr = 'rere';
    $head = '<div class="col-lg-12 cookie-form d-flex flex-column align-items-center">
    	<div class="block-cookie colorGrey"><b>Вы заказали столик на  '.$date_c. '!</br>Time: '.$timeorder_c. '</br>Вас будет '.$people_c. '</b></div><div class="block-cookie1 col-lg-8 colorGrey d-flex flex-column align-items-center">Чтобы оформить заказ, вам нужно <a href="enter.php" class="header-box1__href">войти</a>
    		<div class= "empty1"></div>
    		<div>или</div><a href="registration.php" class="header-box1__href">зарегистрироваться</a>
    		<div class= "empty2"></div>
    		<a href="delCook.php">отменить заказ</a></div>
    	
    ';
    
    
    
    
}


?><html>
<head>
	<title>cookie</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css"/>
</head>
<body>
<div class="col-lg-12 forma-block">
	<div class="col-lg-12 forma-block_title">
		<h2 class="colorGrey text-center forma-block_title1"><a name="top">Booking</a></h2>
			<p class="colorGrey text-center">You can reserve a table at any time convenient for you</p>
	</div>
			    <form class="col-lg-8 offset-lg-2 order-form d-flex justify-content-center" method="post">
				    <select type="text" name="date" class="size32px select-style-general select-style marginZero">
					    <option><?php echo'<div>' .$select_c. '</div>' ?></option>
					    <option>July 11</option>
					    <option>July 12</option>
					    <option>July 13</option>
				        <option>July 14</option>
				        <option>July 15</option>
				        <option>July 16</option>
				    </select>
				<select type="text" name="timeorder" class="size32px select-style-general select-style1 marginZero">
				    <option><?php echo'<div>' .$select_b. '</div>' ?></option>
				    <option>19.00pm</option>
				    <option>20.00pm</option>
				    <option>21.00pm</option>
				    <option>22.00pm</option>
				</select>
				<select type="text" name="people" class="size32px select-style-general select-style3 marginZero">
				    <option><?php echo'<div>' .$select_t. '</div>' ?></option>
				    <option>1 people</option>
				    <option>2 people</option>
				    <option>3 people</option>
				    <option>4 people</option>
				</select>
<input type="submit" name="submit" value="reserve" class="submit-style marginZero"/>
			</form>
			<div class="forma-block_title_decor d-flex flex-column align-items-center">
			<hr class="text-center" width="70%"/>
			<div class="col-lg-1 content-block2__img"><img src="images/dest/drawing.png" alt=""/></div></div>
			
			

   
</div>
<?php 

if(isset($_COOKIE['date'])){
	echo $head;
	
	}
	?>
</body>
<script src="js/app.min.js"></script>
<script src="js/empty.js"></script>
</html>