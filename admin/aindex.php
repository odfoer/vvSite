<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='index'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title>Адмінка | main</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>	
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
<script src="../js/menu_jquery.js"></script>
<!--//pop-up-->
</head>
<body>
	  <form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити title, meta_k,meta_d натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>title:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='title' value=''><?php echo $myrow['title'];?></textarea>
         <label>Опис сторінки:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='meta_d' value=''><?php echo $myrow['meta_d'];?></textarea>
         <label>Ключові слова:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='meta_k' value=''><?php echo $myrow['meta_k'];?></textarea>
      </form>
	<!--header-->
	<?php $main=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner">
		<!-- banner-text Slider starts Here -->
		<script src="../js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});	
			});
		</script>
		<!--//End-slider-script -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
					</div>
				</li>
				<li>
					<div class="banner1 banner2">
					</div>
				</li>
				<li>
					<div class="banner1 banner3">
					</div>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>			
      <form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
         <input type='radio' checked name='radio' value='banner'><em style=color:silver;>slide1</em>
		 <input type='radio' name='radio' value='banner1'><em style=color:silver;>slide2</em>
		 <input type='radio' name='radio' value='banner2'><em style=color:silver;>slide3</em>
		 <input name='description' type='hidden' value='1'>
		 <input name='w' type='hidden' value='1280'>
		 <input name='h' type='hidden' value='770'>
         <input type='FILE' style=background-color:silver; name='imgupload'>
         <input type=submit value='Завантажити вибраний слайд(1280x770)'>
         <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
      </form>

	<!--//banner-->
	<!--welcome-->
	<div class="welcome">
		<div class="container">
	 <form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити text1 text2 text3 text4 натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>text1:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text1' value=''><?php echo $myrow['text1'];?></textarea>
         <label>text2:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text2' value=''><?php echo $myrow['text2'];?></textarea>
         <label>text3:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text3' value=''><?php echo $myrow['text3'];?></textarea>
		 <label>text4:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text4' value=''><?php echo $myrow['text4'];?></textarea>
      </form>
			<h1 class="hdng"><?php echo htmlspecialchars($myrow['text1']);?></h1>
			<h1 class="hdng"><?php echo htmlspecialchars($myrow['text2']);?></h1>
			<p><?php echo htmlspecialchars($myrow['text3']);?></p>
			<div class="welcome-info">
				<div class="col-md-6 welcome-grids">
					<img src="../images/img1.jpg" alt=""/>
				</div>
				<div class="col-md-6 welcome-grids">
					<img src="../images/img2.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
				<form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
					 <input type='radio' checked name='radio' value='img1'><em style=color:silver;>left IMG</em>
					 <input type='radio' name='radio' value='img2'><em style=color:silver;>right IMG</em>
					 <input name='description' type='hidden' value='1'>
					 <input name='w' type='hidden' value='470'>
					 <input name='h' type='hidden' value='200'>
					 <input type='FILE' style=background-color:silver; name='imgupload'>
					 <input type=submit value='Завантажити вибрану фото (470x200)'>
					 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
   			    </form>
			</div>
			<p><?php echo htmlspecialchars($myrow['text4']);?></p>			
		</div>
	</div>
	<!--//welcome-->
	<!--banner-bottom-->
	<form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити text5 text6 text7 text8 натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>text5:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text5' value=''><?php echo $myrow['text5'];?></textarea>
         <label>text6:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text6' value=''><?php echo $myrow['text6'];?></textarea>
         <label>text7:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text7' value=''><?php echo $myrow['text7'];?></textarea>
		 <label>text8:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text8' value=''><?php echo $myrow['text8'];?></textarea>
      </form>
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-4 banner-bottom-grids">
				<form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
					 <input type='radio' checked name='radio' value='slid1'><em style=color:silver;>background-IMG</em>
					 <input name='description' type='hidden' value='1'>
					 <input name='w' type='hidden' value='1280'>
					 <input name='h' type='hidden' value='678'>
					 <input type='FILE' style=background-color:silver; name='imgupload'>
					 <input type=submit value='Завантажити вибрану фото (1280x636)'>
					 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
   			    </form>
				<h2>Хто я ?</h2>
			</div>
	  		<div class="col-md-4 banner-bottom-grids">
				<h4><?php echo htmlspecialchars($myrow['text5']);?></h4>
				<p><?php echo htmlspecialchars($myrow['text6']);?></p>
			</div>
			<div class="col-md-4 banner-bottom-grids">
				<h4><?php echo htmlspecialchars($myrow['text7']);?></h4>
				<p><?php echo htmlspecialchars($myrow['text8']);?></p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--work-->
	<div class="work">
		<div class="col-md-8 work-grids work-img">			
		</div>
		<div class="col-md-4 work-grids">
			<h3>Що я роблю ?</h3>
			<p><form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
					 <input type='radio' checked name='radio' value='img3'><em style=color:silver;>IMG</em>
					 <input name='description' type='hidden' value='1'>
					 <input name='w' type='hidden' value='1280'>
					 <input name='h' type='hidden' value='853'>
					 <input type='FILE' style=background-color:silver; name='imgupload'>
					 <input type=submit value='Завантажити вибрану фото (1280x853)'>
					 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
   			    </form></p>
			<ul>
			<form method="POST" action="../scrypt/textido.php">
                <input type="submit" value="Щоб змінити текст натисни цю кнопку">
                    <?php
						$resultido = $mysqli->query("SELECT * FROM indexpageido");
                        while ($myrowido = $resultido->fetch_assoc()){
                        $i = $myrowido['id'];
                            echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$myrowido['id']."' value=''>".$myrowido['text']."</textarea></p>");
                                    }
                        $i++;
                        echo $i;
                        echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$i."' value=''></textarea></p>");
                        ?>
            </form>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="work">		
		<div class="col-md-4 work-grids work-grids-left">
			<h3>Чому саме я ?</h3>
			<p> <form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
					 <input type='radio' checked name='radio' value='img4'><em style=color:silver;>IMG</em>
					 <input name='description' type='hidden' value='1'>
					 <input name='w' type='hidden' value='1280'>
					 <input name='h' type='hidden' value='701'>
					 <input type='FILE' style=background-color:silver; name='imgupload'>
					 <input type=submit value='Завантажити вибрану фото (1280x701)'>
					 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
   			    </form></p>
			<ul>
			<form method="POST" action="../scrypt/textwi.php">
                <input type="submit" value="Щоб змінити текст натисни цю кнопку">
                    <?php
						$resultwi = $mysqli->query("SELECT * FROM indexpagewi");
                        while ($myrowwi = $resultwi->fetch_assoc()){
                        $i2 = $myrowwi['id'];
                            echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$myrowwi['id']."' value=''>".$myrowwi['text']."</textarea></p>");
                                    }
                        $i2++;
                        echo $i2;
                        echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$i2."' value=''></textarea></p>");
                        ?>
            </form>
			</ul>
		</div>
		<div class="col-md-8 work-grids work-img work-img-btm">			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//work-->
	<!--services-->
	  <form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити text9 text10 text11 text12 text13 text14 text15 text16 натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>text9:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text9' value=''><?php echo $myrow['text9'];?></textarea>
         <label>text10:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text10' value=''><?php echo $myrow['text10'];?></textarea>
         <label>text11:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text11' value=''><?php echo $myrow['text11'];?></textarea>
		 <label>text12:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text12' value=''><?php echo $myrow['text12'];?></textarea>
		 <label>text13:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text13' value=''><?php echo $myrow['text13'];?></textarea>
		 <label>text14:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text14' value=''><?php echo $myrow['text14'];?></textarea>
		 <label>text15:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text15' value=''><?php echo $myrow['text15'];?></textarea>
		 <label>text16:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text16' value=''><?php echo $myrow['text16'];?></textarea>
      </form>
	<div class="services">
		<div class="container">
				<form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
					 <input type='radio' checked name='radio' value='slid'><em style=color:silver;>background-IMG</em>
					 <input name='description' type='hidden' value='1'>
					 <input name='w' type='hidden' value='1280'>
					 <input name='h' type='hidden' value='636'>
					 <input type='FILE' style=background-color:silver; name='imgupload'>
					 <input type=submit value='Завантажити вибрану фото (1280x636)'>
					 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
   			    </form>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									
								</div>
								<h4><?php echo htmlspecialchars($myrow['text9']);?></h4>
								<p><?php echo htmlspecialchars($myrow['text10']);?></p>
							</div>	
						</li>	
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									
								</div>
								<h4><?php echo htmlspecialchars($myrow['text11']);?></h4>
								<p><?php echo htmlspecialchars($myrow['text12']);?></p>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									
								</div>
								<h4><?php echo htmlspecialchars($myrow['text13']);?></h4>
								<p><?php echo htmlspecialchars($myrow['text14']);?></p>
							</div>	
						</li>
						<li>
							<div class="services-grids">
								<div class="srvc-img">
									
								</div>
								<h4><?php echo htmlspecialchars($myrow['text15']);?></h4>
								<p><?php echo htmlspecialchars($myrow['text16']);?></p>
							</div>	
						</li>
					</ul>
				</div>
			</section>
			<!--FlexSlider-->					
					<script defer src="../js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
			<!--End-slider-script-->		
		</div>
	</div>
	<!--//services-->
	<!--footer-->
	<?php include '../blocks/footer.php';?>
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