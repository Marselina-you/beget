<?php
 class Application_Models_Cart
  {	  
	  function addToCart($id, $count=1)
	  {	  	  
		 $_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$count;		
		return true;
	  }	  
	  
	  function getListItemId() // возвращает список id продуктов из корзины
	  {	  	  		 
		$listId=array_keys($_SESSION['cart']);
		return $listId;	
	  }	  
	  
	  function getTotalSumm() // возвращает иготовую сумму корзины
	  {	  	  		 
		$array_product_id=$this->getListItemId(); // получаем списо id 
		$item_position = new Application_Models_Product();// создаем модель для работы с продуктами		
		
		foreach($array_product_id as $id){
			$product_positions[]=$item_position->getProduct($id);// получаем информацию о каждом продукте
		}
		foreach($product_positions as $product)
		{
			$total_summ+=$_SESSION['cart'][$product['id']]*$product['price'];// расчитываем сумму
		}
			
		return $total_summ;
	  }
	  
	  // отчищает корзину
	 function clearCart(){
    unset($_SESSION['cart']);
  }
	  
	  // обновляет содержимое корзины
	  function refreshCart($array_product_id){ // получает ассоциативный массив id=>count
		foreach($array_product_id as $Item_Id => $new_count){
			if($new_count<=0){ 
				unset($_SESSION['cart'][$Item_Id]); // если количесво меньше нуля, то удаляем запись
			}
			else
				$_SESSION['cart'][$Item_Id]=$new_count; // присваиваем новое количество			
			
		}
		
	  }
	  
	  // проверка корзины на заполненность
	 function isEmptyCart(){ 
    if($_SESSION['cart']) return true; 
    else return false;
    }
	  
	  // возвращает html код корзины
	  function printCart()
	  {	  	  
		$array_product_id=$this->getListItemId(); // получает список id
		
		$item_position = new Application_Models_Product();	// создаем модель для работы с продуктами	
		foreach($array_product_id as $id){
			$product_positions[]=$item_position->getProduct($id); // заполняем массив информацией о каждом продукте
		}	
	  // формируем интерфейс для работы с корзиной
			$table_cart="<div class='table_cart table_form_user_order'>";
			
			foreach($product_positions as $product)
			{
				
				
				
				$table_cart.="<div class='product d-flex justify-content-center align-items-center'><div class='block-product-left__img padding_menu'><img src='/images/dest/".$product["id"].".png'  width='50%'/></div>";
				$table_cart.="<div class='block-product-right d-flex flex-column  col-xl-4 justify-content-center'><div class='whitecolor fontSans size22px'>".$product['name']."</div>";
				$table_cart.="<div class='whitecolor fontSans size22px'>Цена:".$product['value']." &#8364;. </div>";
				$table_cart.="<div class='col-xl-6'><input type='text' style='text-align:center' size=3 name='item_".$product['id']."' value='".$_SESSION['cart'][$product['id']]."' /></div>";
				$table_cart.="<div class='whitecolor fontSans size22px'>".$_SESSION['cart'][$product['id']]*$product['value']." &#8364;. </div>";
				$table_cart.="<div class='whitecolor fontSans size22px'>Удалить"."<INPUT TYPE='checkbox'  name='del_".$product['id']."'>"."</div></div></div>";
				
				$total_summ+=$_SESSION['cart'][$product['id']]*$product['value'];
			}
			$table_cart.="<div class='whitecolor fontSans size22px'>К оплате: </div><strong><span style='color: #7F0037'>".$total_summ." &#8364;. </span></strong></div>";
		
		return $table_cart;
	  }	  
  } 
   