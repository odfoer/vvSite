<?php 
   include './blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='makeup'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title><?php echo htmlspecialchars($myrow['title']);?></title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $myrow['meta_d'];?>">
<meta name="keywords" content="<?php echo htmlspecialchars($myrow['meta_k']);?>"/>
<meta name="author" content="odfoer">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
<!--pop-up-->
<script src="js/menu_jquery.js"></script>
<!--//pop-up-->
<!--gallery-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--/gallery-->

</head>
<body>
	<!--header-->
	<?php $makeup=("active"); include 'blocks/header.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->	
	<!-- gallery -->
	<div class="gallery">
		<h1 class="hdng">Мої роботи</h1>
		<h2 class="hdng-two"><?php echo htmlspecialchars($myrow['text1']);?></h2>
		<div class="gallery-grids">
			<ul>
			<?php
				$resultmk = $mysqli->query("SELECT * FROM makeupfoto ORDER BY id DESC");
				while ($myrowmk = $resultmk->fetch_assoc()){
				echo ("<li><a href='images/makeup/".$myrowmk["mini"].".jpg'><img src='images/makeup/".$myrowmk["big"].".jpg' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400' /><div class='glry-bgd'></div></a></li>");
				}
			?>	
			</ul>
			<div class="clearfix"> </div>
		</div>
<video  id=videoPlayer controls="controls"  width="100%" poster="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.jpg" width="100%" title="www.victoria-visage.lutsk.ua" onended="var v=this;setTimeout(function(){v.play()},300)">
<source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.mp4" type="video/mp4"/>
<source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.m4v" type="video/mp4" />
<source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.webm" type="video/webm" />
<source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.ogv" type="video/ogg" />
<object type="application/x-shockwave-flash" data="index.files/html5video/flashfox.swf" width="100%" style="position:relative;">
<param name="movie" value="index.files/html5video/flashfox2.swf" />
<param name="allowFullScreen" value="true" />
<param name="flashVars" value="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v" />
 <embed src="index.files/html5video/flashfox2.swf" width="100%" style="position:relative;"  flashVars="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v"	allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_en" />
</object>
</video>		
	</div>
	
	<!--//gallery -->
	<!--footer-->
	<?php include './blocks/footer.php';?>
	<!--//footer-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--//smooth-scrolling-of-move-up-->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>