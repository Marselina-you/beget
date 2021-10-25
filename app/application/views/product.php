<a href="/catalog"><<< Назад</a>
<h1 class="whitecolor"><?=$product['name']?></h1>
<div class="card_product">
				<div class="product_image">
					<image src="/images/dest/<?=$product["id"]?>.png" />
				</div>
				<div class="product_desc whitecolor">
					<?=$product['weight']?>gramm					
				</div>
				<div class="price whitecolor">
					<?=$product['value']?> руб.					
				</div>
				<div class="price whitecolor">
					<?=$product['ingredients']?> руб.					
				</div>
				<div class="product_buy whitecolor">
					<a href="/">Купить</a>
				</div>
</div>