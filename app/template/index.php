<?
//==================подключаем шаблон сайта===========//	
// Вывод шапки
require_once "header.php";
// Вывод контента
 $view=$router->getView();
 include ($view); 

// Вывод подвала
?>

