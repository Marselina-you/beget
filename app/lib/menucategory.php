<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton

  class Lib_MenuCategory
  {
	public $MenuItem = array("Appetizers"=>"/category/2", "MainDishes"=>"catalog.php?size=maindishes", "Desserts"=>"/category/3");     
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenuCategory()
	 {	
	   $print="<div class='d-flex justify-content-center align-items-center'>";	 
       foreach($this->MenuItem as $name=>$item ){
       	
	    		
		 $print.='<div class="menu-products__item1"><a href="'.$item.'" class="size18px whitecolor fontSans">'.$name.'</a></div>';
	   }

	   
	   return  $print;		 
	 }
 }
