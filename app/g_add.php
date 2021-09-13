<!DOCTYPE html>
<html>
<head>
  <title>Главная страница</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.min.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="conteiner-fluid">
    <div class="wrap-block-menu">
      <div class="block-menu d-flex">
        <div class="block-menu__item col-lg-3 fontTahoma size26px"><a href="">выйти</a></div>
        <div class="block-menu__item col-lg-3 fontTahoma size26px"><a href="forma1.php">добавить</a></div>
        <div class="block-menu__item col-lg-3 fontTahoma size26px"><a href="">редактировать</a></div>
        <div class="block-menu__item col-lg-3 fontTahoma size26px"><a href="adminView.php">просмотр всех</a></div>
        </div>
    </div>
  </div>
  <?php

if (move_uploaded_file($_FILES['filename'] ['tmp_name'], 'images/src/'.$_FILES['filename'] ['name'])){
  
  echo "aga";
}else{
  echo "now";
}
?>
</body>
</html>
