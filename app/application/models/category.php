<?php
//Модель вывода каталога
 class Application_Models_Category
  {	  
	  function getCategory($types)
	  { 

	  	$son = new mysqli('localhost','root','root', 'burrito');
		$result = $son->query("SELECT * FROM maincoarse WHERE types = '$types'");

		 
		 
	
		
				 
		
			 while ($row = $result->fetch_assoc())
		 {		 
			$categoryItems[]=array(
				"id"=>$row['id'],
				"foto"=>$row['foto'],
				"url"=>$row['url'],
				"types"=>$row['types'],
				"types_id"=>$row['types_id'],
				"name"=>$row['name'],
				"value"=>$row['value'],	
				"ingredients"=>$row['ingredients'],
				"weight"=>$row['weight']		
						
					
						
			);
		  }
			
		  
		  return $categoryItems; 
	  }
  } 