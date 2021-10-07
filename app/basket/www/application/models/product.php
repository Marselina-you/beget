<?php
//Модель вывода каталога
 class Application_Models_Product
  {	  
	  function getProduct($id)
	  { 
		 $sql = "SELECT * FROM product WHERE id='$id'";
		 $result = mysql_query($sql)  or die(mysql_error());
	
		 if($row = mysql_fetch_object($result))
		 {		 
		
			$product=array(
				"id"=>$row->id,
				"name"=>$row->name,
				"desc"=>$row->desc,
				"price"=>$row->price
			);
			
		  }
		  return $product; 
	  }
  } 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  