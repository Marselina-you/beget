<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
	  function getList()
	  {  
	  	 $son = new mysqli(HOST, USER, PASSWORD, NAME_BD);
		 $result = $son->query("SELECT * FROM maincoarse WHERE types = 'Desserts'");
		 $result1 = $son->query("SELECT * FROM maincoarse WHERE types = 'Appetizers' ");
		 $result2 = $son->query("SELECT * FROM maincoarse WHERE types = 'Desserts' ");
		
	
		 while ($row = $result->fetch_assoc())
		 {		 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"foto"=>$row['foto'],
				"types"=>$row['types'],
				"name"=>$row['name'],
				"value"=>$row['value'],	
				"ingredients"=>$row['ingredients'],
				"weight"=>$row['weight']		
						
			);
		  }
		
		
		 return $сatalogItems; 
	  }
  } 
 /*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>  
  