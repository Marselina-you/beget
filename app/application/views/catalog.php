<div class="menu-header d-flex flex-column align-items-center justify-content-center">
			<div class="whitecolor fontSans size48px">Menu</div>
			<hr align="center" width="400" size="5" color="White" /></div>
 <div class="menu-products d-flex flex-column justify-content-center">
				<div class="d-flex justify-content-center align-items-center">
				    <div class="menu-products__item1"><a href="size=appetizers" class="size18px whitecolor fontSans"/>Appetizers</a></div>
			        <div class="menu-products__item1"><a href="size=maindishes" class="size18px whitecolor fontSans"/>Main Dishes</a></div>
			        <div class="menu-products__item1"><a href="size=desserts" class="size18px whitecolor fontSans"/>Desserts</a></div>
			    </div></div>
<?
$maindishes = 'Main Dishes';
$desserts = 'Desserts';
$appetizers = 'Appetizers';
if (isset($_GET['size']) == "maindishes") {
	$appetizers = sprintf($maindishes);
	
}
//представление каталога (страница каталога)
foreach($Items as $item)
		{?>
			<div class="product d-flex justify-content-center align-items-center">
				
					<div class="block-product-left d-flex justify-content-center">
		    	        <div class="block-product-left__img padding_menu">
					<a href="/product/<?=$item["foto"]?>"><image src="/images/dest/<?=$item["id"]?>.png" /></a></div>
		    	    </div>
				<div class="block-product-right d-flex flex-column  col-xl-4 justify-content-center">

				<div class="block-product-right-title d-flex justify-content-center align-items-center">
				<div class="block-product-right-title__name "><a href="/product/<?=$item["url"]?>" class="whitecolor fontSans size22px"><?=$item["name"]?></a></div>
				
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
	
