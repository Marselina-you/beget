<?php 
$select_c = '0 товаров';
if(isset($_COOKIE['name'])){
    $head = '<div class="col-lg-12 cookie-form d-flex flex-column align-items-center">
    	<div class="block-cookie colorGrey"><b>Вы будете жрать  '.$name_cookie. '!</br>
    	по дресу<a href=" '.$value_cookie. '">'.$value_cookie. '</a></div>
    		
    		<a href="each_view.php?id=' .$value_cookie.  '">оформить заказ</a></div>';}?>

    <?php   
        require_once('h_appvars.php');
        
		
		    $son = new mysqli('localhost','root','root', 'burrito');
		    $select1 = $son->query("SELECT  id, name, value, weight  FROM maincoarse WHERE types = 'Appetizers' LIMIT 180");
		    $select2 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE types = 'Main dishes' LIMIT 180");
		    $select3 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE types = 'Desserts' LIMIT 180");
		    $select11 = $son->query("SELECT nameExtras, valueExtras  FROM mainextras");
            $select12 = $son->query("SELECT nameBeverages, valueBeverages  FROM mainbeverages");
		    
	        $maindishes = 'Main Dishes';
	        $desserts = 'Desserts';
	        $appetizers = 'Appetizers';
		    $ex = 'Extras';
		    $bev = 'Beverages';

	        
         	
                
	
	    
            




	if (empty($_GET["size"])){
		
         while($info = $select1->fetch_array()){

         	
    	   echo'<div class="block-product d-flex justify-content-center border">
		    <div class="block-product-left d-flex justify-content-center">
		    	       
		    	    </div>';
               echo'<div class="block-product-right d-flex flex-column  col-xl-4 col-lg-4 col-md-12 col-sm-12 justify-content-center">
               	<form method="post" id="' . $info['id'] . '">
		    	        <div class="block-product-right-title d-flex justify-content-center align-items-center">

		    		        <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="each_view.php?id=' . $info['id'] . '">'.$info['name'].'</a></div> 
		    		        <input type="hidden" name="name" value="'.$info['name'].'">';
				   echo'<div class="block-product-right-title__value whitecolor fontSans size22px">'.$info['value'].'<span>&nbsp;&#8364;</span></div>

		    	        <div class="whitecolor size22px" id="answer"></div></div>
		    	        <input type="text" name="value" value="'.$info['value'].'">';

				   
				   echo'<div class="block-product-right-gramm whitecolor fontLucida  d-flex">'.$info['weight'].'<span>g</span></div>
				    <input type="hidden" name="weight" value="'.$info['weight'].'">
				        <div class="buttonButton">
				        	
				        
				        	<input type="submit" name="submit"></div>
				        	
				        </form>
				        </div>
				        
				        </div>
		        </div>'; 

				}}
				
				
				
echo $head;


 
 
    
		    
		     	
		     	