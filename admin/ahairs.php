<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='hairs'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title>Адмінка | hairs</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $myrow['meta_d'];?>">
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
<!--gallery-->
<script src="../js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!--/gallery-->

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
	<?php $hairs=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->	
	<!-- gallery -->
	<div class="gallery">
		<h1 class="hdng">Мої роботи</h1>
		<h2 class="hdng-two">
		<form method="POST" action="../scrypt/pages.php">
         <input type="submit" value="Щоб змінити text1 натисніть цю кнопку">
         <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
         <label>text1:</label>
         <textarea style='background-color:silver;' type='text' name='text1' value=''><?php echo $myrow['text1'];?></textarea>
        </form>
		</h2>
		<div class="gallery-grids">
			<ul>
			<?php
				$resulths = $mysqli->query("SELECT * FROM hairsfoto ORDER BY id ASC");
				while ($myrowhs = $resulths->fetch_assoc()){
					$i = $myrowhs['id'];
				echo ("<li><a href='../images/hairs/".$myrowhs["mini"].".jpg'><img src='../images/hairs/".$myrowhs["big"].".jpg' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400' /><div></div></a>
				<form action='../scrypt/uploadfotohs.php' method='post' enctype='multipart/form-data'>
                        <input name='description' type='hidden' value='".$myrowhs['id']."'>
                        <input type='FILE' style=background-color:silver; name='imgupload'>
                        <input type=submit value='Завантажити | Видалити'>
                        <input type='checkbox' name='delete' value='del'>
                        <input type='checkbox' checked name='center' value='resize'>CENTER
                </form>
				</li>");
				}
				$i++;
                        echo $i;
                        echo ("<li><a href='../images/hairs/".$myrowhs["mini"].".jpg'><img src='../images/hairs/".$myrowhs["big"].".jpg' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400' /><div></div></a>
				<form action='../scrypt/uploadfotohs.php' method='post' enctype='multipart/form-data'>
                        <input name='description' type='hidden' value='".$i."'>
                        <input type='FILE' style=background-color:silver; name='imgupload'>
                        <input type=submit value='Завантажити | Видалити'>
                        <input type='checkbox' name='delete' value='del'>
                        <input type='checkbox' checked name='center' value='resize'>CENTER
                </form>
                        </li>");
			?>	
			</ul>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!--//gallery -->
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