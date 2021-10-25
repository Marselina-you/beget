<?php
require_once "config.php"; //файл настроек
$router=new Lib_Application; //создаем объект, который будет искать нуджные контролеры
$member=$router->Run();//Начинаем поиск нужного контролера

if(isset($member)) //если контролер вернул какието переменные, то делаеми их доступными для публичной части
  foreach ($member as $key => $value)
    {
        $$key= $value; 
        // Возможно здесь кому-то будет не понятно назначение оператора $$.
        // Приведу пример
        //  $a="b";
        //  $$a=1;
        //  echo $b;
        // В результате на выходе получим: 1
        // Можно провести аналогию оператора $$ с указателями в C++

    }
 
    
require_once "function.php";//подключаем функционал сайта
require_once "./template/index.php";//подключаем шаблон сайта ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css">
    <title>Child of the Sun</title>
</head>
<body>
    <div class="container-fluid d-flex">
        <div class="d-flex flex-column col-lg-6">
            

            <?php
            $rt = array('orange', 'banana', 'apple', 'peanapple', 'pumpkin');
              
$route=$rt[(count($rt)-1)];
echo $route;

            ?>
        </div>
    </div>
</body>
</html>






	
	



