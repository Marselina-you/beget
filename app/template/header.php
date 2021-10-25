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
				<div class="d-flex align-items-center page-title-header-menu__item"><a href='/cart' class='d-flex'>
					<svg width="24" height="24" fill="none">
				
				<path fill-rule="evenodd" clip-rule="evenodd" d="M10 2a4 4 0 00-4 4v2H.867L2.18 18.496A4 4 0 006.15 22h11.703a4 4 0 003.969-3.504L23.133 8H18V6a4 4 0 00-4-4h-4zm3 7a1 1 0 00-1-1H8V6a2 2 0 012-2h4a2 2 0 012 2v4h4.867l-1.03 8.248A2 2 0 0117.851 20H6.148a2 2 0 01-1.984-1.752L3.133 10H12a1 1 0 001-1z" fill="#fff"></path></svg>
				<div class="whitecolor"><?=$smal_cart['cart_count']?>(<?=$smal_cart['cart_price']?> &#8364;)</div></a></div></div>
				
			
				
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
			
	