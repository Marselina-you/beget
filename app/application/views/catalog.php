<?php echo '<div class="block d-flex justify-content-center align-items-center">';
		$son = new mysqli('localhost','root','root', 'burrito');
            $select1 = $son->query("SELECT   types_id, types   FROM categories ");
            while($info = $select1->fetch_array()){
           
               echo'
                        
                            <div class="block-product-right-title__name whitecolor fontSans size22px"><a href="/category/'.$info['types'].'">'.$info['types'].'</a></div>';
                        }
                        echo '</div>';
		



//представление каталога (страница каталога)
foreach($Items as $item)
		{?>
			<div class="product d-flex justify-content-center align-items-center">
				
					<div class="block-product-left d-flex justify-content-center">
		    	        <div class="block-product-left__img padding_menu">
					<a href="/product/<?=$item["url"]?>"><img src="/images/dest/<?=$item["id"]?>.png" /></a></div>
		    	    </div>
				<div class="block-product-right d-flex flex-column col-xl-4 justify-content-center">

				<div class="block-product-right-title d-flex justify-content-center align-items-center">
				<div class="block-product-right-title__name "><a href="/product/<?=$item["url"]?>" class="whitecolor fontSans size22px"><?=$item["url"]?></a></div>

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


				<div class="product_buy d-flex justify-content-center padding_menu">
				<div class="opyt btn btn-primary padding15 size22px">
						<a href="/catalog?in-cart-product-id=<?=$item["id"]?>" class="whitecolor">В корзину</a></div>
					
				</div>
			</div>
			</div> 
		<?
			
		}
		?>
	
