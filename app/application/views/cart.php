<div class="cart_user"><div class="whitecolor fontSans size48px">Корзина</div>
<?if($empty_cart):?>
<form action="/cart" method="post" class="form_user_order">
<?=$big_cart;?>
<input type="submit" name="refresh" value="Пересчитать"  style="margin-left:10px; margin-top:10px;" />
<input type="submit" name="clear" value="Очистить" style=" height:30px; padding: 0px 20px;" />
</form>

<form action="/order" method="post" style="margin-left:600px;">
<input type="submit" name="order" value="Оформить заказ" style=" height:30px; padding: 0px 20px;" />
</form>
<form action="/order" method="post" style="margin-left:600px;"></form></div>


<?else:?>
Ваша корзина пуста!
<?endif;?>