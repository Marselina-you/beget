<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.min.css">
<script type="text/javascript" src="js/tinyfader.js"></script>

</head>
<body>
	<div class="container-fluid">
		



	<div class="wrapper_r">
		<div class="header d-flex align-items-center">
			<div class="page-title-header-left col-xl-3">
			    <div class="page-title-header-left__block d-flex flex-column align-items-center">
			    	<div class="page-title-header-left__name fontSans font-weight-bold whitecolor">BURRITO</div>
			    	<div class="page-title-header-left__decoration  justify-content-center"><img src="../images/dest/miny-decor.png" alt="Мустанг" /></div>
			    	<div class="page-title-header-left__subname whitecolor size24px">chili-bar</div>

			    </div>
			    
		    </div>
			<div class="menu page-title-header-menu-wrap d-flex col-xl-9  justify-content-between d-flex">

				<?=$menu?>
			<div class="smalcart">
				<div class="d-flex align-items-center"><strong><a href='/cart'><img src="/images/dest/basket.png"/></a></strong><div class="whitecolor">	<?=$smal_cart['cart_count']?></div><div class="whitecolor">	(<?=$smal_cart['cart_price']?> &#8364;	)</div></div>
				
				
				
			</div>	
			
				
			</div>	

		</div></div></div>
		<div id="content"></div>
		
	
	<script type="text/javascript">
var slideshow=new TINY.fader.fade('slideshow',{
	id:'slides',
	auto:10,
	resume:true,
	
	activeclass:'current',
	visible:true,
	position:0
});
</script>
<script src="js/app.min.js"></script>
</body></html>
			
	