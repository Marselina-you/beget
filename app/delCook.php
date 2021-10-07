<?php
if (isset($_COOKIE['name'])) {
     $_COOKIE = array();
     }
    setcookie('name', '', time() - 3600);
    setcookie('value', '', time() - 3600);
    setcookie('ingredients', '', time() - 3600);
     setcookie('weight', '', time() - 3600);
$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . 'index.php';
  header('Location: ' . $home_url);
  