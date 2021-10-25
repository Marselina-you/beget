<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton

  class Lib_Menu
  {
	public $MenuItem = array("main"=>"/", "about us"=>"/catalog", "menu"=>"/catalog", "happy-hours"=>"/category", "booking"=>"/", "delivery"=>"/",);     
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenu()
	 {	
	   $print="<div class=' page-title-header-menu align-items-center d-flex col-lg-12 d-flex justify-content-between'>";	 
       foreach($this->MenuItem as $name=>$item ){
       	
	    		
		 $print.='<div class="page-title-header-menu__item"><a href="'.$item.'" class="whitecolor size18px fontSans">'.$name.'</a></div>';
	   }

	   
	   return  $print;		 
	 }
 }

/*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>