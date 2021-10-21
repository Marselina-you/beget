<?php
$menu=getMenu();

$smal_cart=getSmalCart();

function getMenu(){
	return Lib_Menu::getInstance()->getMenu();
}
function getSmalCart(){
	return Lib_SmalCart::getInstance()->getCartData();
}

$menu_category=getMenuCategory();
function getMenuCategory(){
	return Lib_MenuCategory::getInstance()->getMenuCategory();
}



