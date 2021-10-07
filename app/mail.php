<?php
 $son = new mysqli('localhost','root','root', 'burrito');
		    $select1 = $son->query("SELECT  id, name, value, weight  FROM maincoarse WHERE id = '" . $_POST['id'] . "' LIMIT 180");
		while($info = $select1->fetch_array()){
			echo $info['name'];
		}