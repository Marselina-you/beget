<?php 
//представление каталога (страница каталога)
foreach($category as $item)
		{?>
			<div class="product d-flex justify-content-center align-items-center">
				<div class="block-product-left d-flex justify-content-center">
		    	        <div class="block-product-left__img padding_menu">
					<a href="/product/<?=$item["url"]?>"><img src="/images/dest/<?=$item["id"]?>.png" /></a></div>
		    	    </div>
					
				<div class="block-product-right d-flex flex-column col-xl-4 justify-content-center">

				<div class="block-product-right-title d-flex justify-content-center align-items-center">
				<div class="block-product-right-title__name "><a href="/product/<?=$item["url"]?>" class="whitecolor fontSans size22px"><?=$item["name"]?></a></div>

				<div class="block-product-right-title__name "><a href="/product/<?=$item["types_id"]?>" class="whitecolor fontSans size22px"><?=$item["types_id"]?></a></div>
				
				<div class="block-product-right-title__name whitecolor fontSans size22px product_price">
				<?=$item["value"]?> &nbsp;&#8364;
				</div></div>
				<div class="wrap-block-product-right-content d-flex justify-content-center">
		    	            <div class="block-product-right-content d-flex justify-content-center align-items-center whitecolor fontLucida">
				<?=$item["ingredients"]?> 
				</div></div>
				<div class="block-product-right-gramm whitecolor fontLucida  d-flex justify-content-center">
				<?=$item["weight"]?><span>g</span> 
				</div>


				
			</div>
			</div> 
		<?
			
		}
		?>
	
