<?php
require_once('h_appvars.php');
// Connect to the database
  $son = new mysqli('localhost','root','root', 'burrito');
  $select1 = $son->query("SELECT  id, foto, types, name, value, ingredients, weight  FROM maincoarse WHERE id = '" . $_GET['id'] . "'");
        



// Возьмите данные профиля из базы данных
  
  
    while ($info = $select1->fetch_array()) {
      echo '<div>'  .$info['id']. '</div>';
      echo '<img src="'.MM_UPLOADPATH. $info['foto'].'"  alt="Сыр фото" />';
        echo '<div class="h5 browncolor">'  .$info['name']. '</div></div>';
          echo'<div class="box1-view-content-ihfo-text__value cheese-text">'  .$info['value']. ', 00 p</div>';
         
         
         
            }
  