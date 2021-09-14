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
define('MM_UPLOADPATH', 'images/src/');

  $son = new mysqli('localhost','root','root', 'beget');
  $name = mysqli_real_escape_string($son, trim($_FILES['filename']['name']));
  $types = $_FILES['filename']['type'];
  $size = $_FILES['filename']['size'];
  $time = $_FILES['filename'] ['tmp_name']; 
  $target = MM_UPLOADPATH . basename($name);
   
  if (move_uploaded_file($_FILES['filename'] ['tmp_name'], $target.$_FILES['name'])){


 
  if (isset($_POST['submit'])) {
  $add = $son->query("INSERT INTO prod (type, size, name) VALUES ('$types', '$size', '$name')");
   echo "aga";
   echo'<div class="col-lg-9 darkbrowncolor size20px fontSegoeScript">'  .$types. '</div>';
   echo'<div class="col-lg-9 darkbrowncolor size20px fontSegoeScript">'  .$size. '</div>';
   echo'<div class="col-lg-9 darkbrowncolor size20px fontSegoeScript">'  .$name. '</div>';
    echo'<img src="' . MM_UPLOADPATH . $name. '"  alt="Profile Picture" />';
}else{
  echo "now";
}}
?>
</body>
</html>
