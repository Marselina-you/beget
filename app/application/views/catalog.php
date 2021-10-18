<h1>Каталог</h1>
<?
//представление каталога (страница каталога)
foreach($Items as $item)
		{
			if($i%3==0):?> 
			<div style="clear:both;"></div>
			<?endif;
			?>
			<div class="product">
				<div class="product_image">
					<a href="/product/<?=$item["foto"]?>"><image src="/images/dest/<?=$item["id"]?>.png" /></a>
				</div>
				<h2>
				<a href="/product/<?=$item["url"]?>"><?=$item["name"]?></a>
				</h2>
				<div class="product_price">
				<?=$item["value"]?> руб.
				</div>

				<div class="product_buy">
				
						<a href="/catalog?in-cart-product-id=<?=$item["id"]?>">В корзину</a>
					
				</div>
			
			</div>
		<?
			$i++;
		}
		?>
	
