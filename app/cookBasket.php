<?php 

$col = $_POST['submit'];
if(isset($_POST['submit'])){
    setcookie('colichestvo', $col);
    header('Location: ' .$_SERVER["HTTP_REFERER"]);
}
$Result=$_COOKIE['colichestvo'];
echo $result;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/app.min.css">
    <script src="js/app.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Extras-Beverages</title>
    <script type="text/javascript" >
$(document).ready(function(){
    $(".inp_price").css('opacity', '0');
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 0 ? 1 : count;
        $input.val(count);
        $input.change();
        if(count == 0){$(this).next().css('opacity', '0');}
        return false;
    });
    $('.plus').click(function () {
        $(this).prev().css('opacity', '1');
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
       

        return false;
    });
 
        

}) 
</script>
</head>
<body>
<?php
$son = new mysqli('localhost','root','root', 'burrito');
        $select11 = $son->query("SELECT idExtras, nameExtras, valueExtras  FROM mainextras ");
        $select12 = $son->query("SELECT idBeverages, nameBeverages, valueBeverages  FROM mainbeverages");

        $ex = 'Extras';
        $bev = 'Beverages'; 
        echo '<div class="d-flex justify-content-center align-items-center">
                <div class="menu-products__item justify-content-center"><a href="cookBasket.php?size=extras" class="size18px whitecolor fontSans">' .$ex.'</a></div>
                <div class="menu-products__item"><a href="cookBasket.php?size=beverages" class="size18px whitecolor fontSans">' .$bev.'</a></div></div>';
                if (empty($_GET["size"])) {
            $ex = 'Extras';
            echo'<div class="block-product-additionally__category whitecolor size35px fontArial text-center">' .$ex. '</div>';
            
while($info = $select11->fetch_array()){
    echo'<div class="block-product-additionally-content d-flex flex-column justify-content-center"><div class="count_box block-product-additionally__name whitecolor size22px fontSans">
<div class="minus whitecolor">-</div>'.$info['nameExtras'].'
<form method ="post"><input class="inp_price button-alcogol whitecolor" type="text" value="0"  id ="'.$info["idExtras"].'" name="submit"/>
<button class="plus whitecolor" name="colich">+</button></form>
            </div>';
        echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['valueExtras'].'&nbsp;&#8364;</div>
                    </div>';
                 echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['idExtras'].'&nbsp;</div>
                    </div>';
                }




            }
                    


















                    elseif ($_GET["size"] == "beverages") {
                        $bev = 'Beverages';
    echo'<div class="block-product-additionally__category whitecolor size35px fontArial text-center">' .$bev. '</div>';
    while($info = $select12->fetch_array()){
    echo'<div class="block-product-additionally-content d-flex flex-column"><div class="count_box block-product-additionally__name whitecolor size22px fontSans text-center">
<div class="minus whitecolor">-</div>'.$info['nameBeverages'].'
<input class="inp_price button-alcogol whitecolor" type="text" value="0" name="votes['.$info["id"].']"/>
<div class="plus whitecolor">+</div></div>';
                echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['valueBeverages'].'&nbsp;&#8364;</div></div>';
                echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['idBeverages'].'&nbsp;</div></div>';
                }}elseif ($_GET["size"] == "extras") {
    echo'<div class="block-product-additionally__category whitecolor size35px fontArial text-center">' .$ex. '</div>';
    while($info = $select11->fetch_array()){
    echo'<div class="block-product-additionally-content d-flex flex-column"><div class="count_box block-product-additionally__name whitecolor size22px fontSans text-center">
<div class="minus whitecolor">-</div>'.$info['nameExtras'].'
<input class="inp_price button-alcogol whitecolor" type="text" value="0"/>
<div class="plus whitecolor">+</div>
            </div>';
                echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['valueExtras'].'&nbsp;&#8364;</div></div>';
                echo'<div class="block-product-additionally__value whitecolor size18px fontSans text-center">'.$info['idExtras'].'&nbsp;</div></div>';
                }}?></body></html>