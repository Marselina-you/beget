<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/app.min.css">
<script type="text/javascript" src="js/tinyfader.js"></script>

</head>
<div class="slider">
		
		<div id="slideshow">
			<ul id="slides">
				<li><img src="images/dest/slide1.jpg"  alt="Мустанг" /></li>
				<li><img src="images/dest/slide2.jpg" alt="Мустанг" /></li>
				<li><img src="images/dest/slide3.jpg" alt="Мустанг" /></li>
				<li><img src="images/dest/slide4.jpg" alt="Мустанг" /></li>
				<li><img src="images/dest/slide6.jpg" alt="Мустанг" /></li>
				
			</ul>
		</div>

	<div class="navigation d-flex justify-content-between col-lg-12">
		<div class="sliderbutton"><img src="images/dest/left.gif" width="32" height="38" alt="Назад" onclick="slideshow.move(-1)" /></div>
		<div class="sliderbutton"><img src="images/dest/right.gif" width="32" height="38" alt="Вперед" onclick="slideshow.move(1)" /></div>
	    </div>	
	</div>
	
	 <div class="page-title-header-content align-items-center col-xl-5 col-lg-6 offset-lg-3">
		    	<div class="page-title-header-content__logo d-flex justify-content-center"><img src="images/dest/logotip.png"  width="75%" alt="Мустанг" />
		    	</div>
		    	<div class="page-title-header-content__name size48px fontSans font-weight-bold whitecolor text-center">BURRITO
		    	</div>
		    	<div class="page-title-header-content__decoration d-flex justify-content-center"><img src="images/dest/decor.png"   width="70%" alt="Мустанг" />
		    	</div>
		    	<div class="page-title-header-content__subname whitecolor size29px text-center">chili-bar
		    	</div>
		    </div>
	
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



