<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='about'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title>Адмінка | about</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
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
	<?php $about=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--about-->
	<div class="about"> 
		<div class="container">
			<h1 class="hdng">Про мене</h1>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="../images/img5.jpg" class="img-responsive" alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400"/>
				      <form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
						 <input type='radio' checked name='radio' value='img5'><em style=color:silver;>IMG</em>
						 <input name='description' type='hidden' value='1'>
						 <input name='w' type='hidden' value='640'>
						 <input name='h' type='hidden' value='420'>
						 <input type='FILE' style=background-color:silver; name='imgupload'>
						 <input type=submit value='Завантажити вибраний слайд(640x420)'>
						 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
					  </form>
				</div>
				<div class="col-md-6 about-text-right">
					<form method="POST" action="../scrypt/textabout.php">
						<input type="submit" value="Щоб змінити текст натисни цю кнопку">
                    <?php
						$resultido = $mysqli->query("SELECT * FROM aboutpageabout");
                        while ($myrowido = $resultido->fetch_assoc()){
                        $i = $myrowido['id'];
                            echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$myrowido['id']."' value=''>".$myrowido['text']."</textarea></p>");
                                    }
                        $i++;
                        echo $i;
                        echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$i."' value=''></textarea></p>");
                        ?>
						</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="about-slid"> 
			<div class="container">
				<div class="about-slid-info"> 
	 <form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити text1 text2 натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>text1:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text1' value=''><?php echo $myrow['text1'];?></textarea>
         <label>text2:</label>
         <textarea style='background-color:silver; width:100%' type='text' name='text2' value=''><?php echo $myrow['text2'];?></textarea>
      </form>
				</div>
			</div>
		</div>
		
				      <form action='../scrypt/slide.php' method='POST' enctype='multipart/form-data'>
						 <input type='radio' checked name='radio' value='slid3'><em style=color:silver;>IMG</em>
						 <input name='description' type='hidden' value='1'>
						 <input name='w' type='hidden' value='1280'>
						 <input name='h' type='hidden' value='852'>
						 <input type='FILE' style=background-color:silver; name='imgupload'>
						 <input type=submit value='Завантажити вибраний слайд(1280x852)'>
						 <input type='checkbox' checked name='center' value='resize'><em style=color:silver;>CENTER</em>
					  </form>
	</div>
	<!--//about-->
	<!--about-team-->
	
	
	
	
	
	
	
	
	
<!--	
	
	<div class="about-team">		
		<div class="container">
			<h3 class="title">Команда</h3>
			<div class="row team-row">
				<div class="col-md-3 team-grids">
					<div class="thumbnail team-thmnl">
						<img src="images/img6.jpg" class="img-responsive zoom-img" alt="...">
						<div class="caption">
							<h4><a href="#">Vaura Tegsner</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="thumbnail team-thmnl">
						<img src="images/img7.jpg" class="img-responsive zoom-img" alt="...">
						<div class="caption">
							<h4><a href="#">Jark Kohnson</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="thumbnail team-thmnl">
						<img src="images/img8.jpg" class="img-responsive zoom-img" alt="...">
						<div class="caption">
							<h4><a href="#">Goes Mehak</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
					</div>
				</div>
				<div class="col-md-3 team-grids">
					<div class="thumbnail team-thmnl">
						<img src="images/img9.jpg" class="img-responsive zoom-img" alt="...">
						<div class="caption">
							<h4><a href="#">Jark Kohnson</a></h4>
							<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>						
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div> -->
	<!--//about-team-->
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
    <script src="../js/bootstrap.js"></script>
</body>
</html>