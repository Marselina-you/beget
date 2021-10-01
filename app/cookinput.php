<?php
session_start();
if (isset($_POST['On'])) {
	setcookie("Test", "On", time()+3600, "/","", 0);
	$result = $_COOKIE['Test'];
}
elseif (isset($_POST['Off'])) {
 	# code...
  setcookie("Test", "Off", time()+3600, "/","", 0);

$result = $_COOKIE['Test'];
}

else
{
$result = null;

}
?>
<form id="Test" action='' method='post'>
<button type='submit' name='On'>ON</button>
<button type='submit' name='Off'>OFF</button>
</form>
<p><?= $result;?></p>