if ($name=="Вход" && $_SESSION["User"]!=""){
				$print.='<a href="/enter">'.$_SESSION["User"].'</a> [ <a href="/enter?out=1"><span style="font-size:10px">выйти</span></a> ]';
			}			
		else $print.='<a href="'.$item.'">'.$name.'</a>';