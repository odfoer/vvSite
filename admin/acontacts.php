<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='contacts'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title>Адмін | contacts</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="odfoer">
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
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
	<?php $contacts=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--contact-->
	<div class="contact">
		<div class="container">				
			<div class="contact-grids">
				<div class="col-md-8 map">
					<h1 class="hdng">Як мене знайти</h1>
					<iframe src="<?php echo $myrow['text1'];?>"></iframe>
					  <form method="POST" action="../scrypt/pages.php">
						 <input type="submit" value="Щоб змінити text1 натисніть цю кнопку">
						 <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
						 <label>text1:</label>
						 <textarea style='background-color:silver; width:100%' type='text' name='text1' value=''><?php echo $myrow['text1'];?></textarea>
					  </form>
				</div>
				<div class="col-md-4 address">
					<h2>Контакти</h2>
					<p class="cnt-p"></p>
					   <form method="POST" action="../scrypt/pages.php">
						 <input type="submit" value="Щоб змінити text2 text3 text4 text5 натисніть цю кнопку">
						 <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
						 <label>text2:</label>
						 <textarea style='background-color:silver; width:100%' type='text' name='text2' value=''><?php echo $myrow['text2'];?></textarea>
						 <label>text3:</label>
						 <textarea style='background-color:silver; width:100%' type='text' name='text3' value=''><?php echo $myrow['text3'];?></textarea>
						 <label>text4:</label>
						 <textarea style='background-color:silver; width:100%' type='text' name='text4' value=''><?php echo $myrow['text4'];?></textarea>
						 <label>text5:</label>
						 <textarea style='background-color:silver; width:100%' type='text' name='text5' value=''><?php echo $myrow['text5'];?></textarea>
					  </form>
				</div>									
				<div class="clearfix"> </div>	
			</div>
		</div>		
	</div>
	<!--//contact-->	
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