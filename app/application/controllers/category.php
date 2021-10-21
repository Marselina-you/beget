<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Category extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Category;
		 $category = $model->getCategory($_REQUEST['types_id']);	
		 $this->category=$category;
		
	 }
  }
/*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>