<?php 
$select_c = '0 товаров';
if(isset($_COOKIE['name'])){
    $head = '<div class="col-lg-12 cookie-form d-flex flex-column align-items-center">
    	<div class="block-cookie colorGrey"><b>Вы будете жрать  '.$name_cookie. '!</br>
    	по дресу<a href=" '.$value_cookie. '">'.$value_cookie. '</a></div>
    		
    		<a href="'.$value_cookie. '">оформить заказ</a></div>';}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/app.min.css">
	<script src="js/app.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	
</head>
    <?php   
        require_once('h_appvars.php');
        
		
		    $son = new mysqli('localhost','root','root', 'burrito');
		    $select1 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE types = 'Appetizers' LIMIT 180");
		    $select2 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE types = 'Main dishes' LIMIT 180");
		    $select3 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE types = 'Desserts' LIMIT 180");
		    $select11 = $son->query("SELECT nameExtras, valueExtras  FROM mainextras");
            $select12 = $son->query("SELECT nameBeverages, valueBeverages  FROM mainbeverages");
		    
	        $maindishes = 'Main Dishes';
	        $desserts = 'Desserts';
	        $appetizers = 'Appetizers';
		    $ex = 'Extras';
		    $bev = 'Beverages';

if (isset($_GET['size']) == "maindishes") {
	$appetizers = sprintf($maindishes);
	
}
		        
                ?>
	<body>
	    <div class="container-fluid">
            


<?php
	if (empty($_GET["size"])){
		$appetizers = 'Appetizers';
		 echo'<div class="nows1"><div class="menu-products__subtitle whitecolor size35px fontArial text-center">' .$appetizers.'</div>';
         while($info = $select1->fetch_array()){
    	   echo'<div class="block-product d-flex justify-content-center border">
		    <div class="block-product-left d-flex justify-content-center">
		    	       
		    	    </div>';
               echo'<div class="block-product-right d-flex flex-column  col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center">
               	<form method="post">
		    	        <div class="block-product-right-title d-flex justify-content-center align-items-center">

		    		        <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="each_view.php?id=' . $info['id'] . '">'.$info['name'].'</a></div> 
		    		        <input type="hidden" name="name" value="'.$info['name'].'">';
				   echo'<div class="block-product-right-title__value whitecolor fontSans size22px">'.$info['value'].'<span>&nbsp;&#8364;</span></div>

		    	        <div class="whitecolor size22px" id="answer"></div></div>
		    	        <input type="text" name="value" value="each_view.php?id=' . $info['id'] . '">';

				   echo'<div class="wrap-block-product-right-content d-flex justify-content-center">
		    	            <div class="block-product-right-content d-flex justify-content-center align-items-center whitecolor fontLucida">'.$info['ingredients'].'</div>
		    	        </div>
		    	        <input type="hidden" name="ingredients" value="'.$info['ingredients'].'">';
				   echo'<div class="block-product-right-gramm whitecolor fontLucida  d-flex">'.$info['weight'].'<span>g</span></div>
				    <input type="hidden" name="weight" value="'.$info['weight'].'">
				        <div class="buttonButton">
				        	
				        
				        	<input type="submit" name="submit"></div>
				        	
				        </form>
				        </div>
				        
				        </div>
		        </div>';  
				}} ?>
 
    <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="cart.php">КОРЗИНА</a></div></div>
				        <div class="block-product-right-title__name whitecolor fontSans size22px">'.$select_c.'</div></div>
    <br />
       <input type="text" id="test1" />
    <div class="wrap-button-minus"><button class="button-minus button-plus ui-n3" type="button" tabindex="0"><div class="button-minus-border button-plus" tabindex="-1"><a href="#" onclick="getInput('test1')"><svg width="24" height="24" class="ui-m9"><path d="M13 11h7a1 1 0 010 2h-7v7a1 1 0 01-2 0v-7H4a1 1 0 010-2h7V4a1 1 0 012 0v7z" fill="#f2f3f5">
				        						</path></svg></a></div></button></div>                                                                                                  
    

    Тут выводим результат
    
    <script>
        var answer = document.getElementById('answer');
        function getInput(inputId) {
            var element = document.getElementById(inputId);
            answer.innerText = element.value;
        }
    </script>     
        
       
        
        <script src="js/menu.js"></script>
    
	
    </body>
</html>

		    
		     	
		     	