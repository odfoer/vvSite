<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='news'");
   $myrow = $result->fetch_assoc();
   if (isset($_GET['theme'])){
   $theme = $_GET['theme'];
   if ($theme == ''){
		header('Location: ../admin/anews&events.php');
		exit;
	}
   }

   ?>
<!DOCTYPE html>
<html lang="uk">
<head>
<title>Адмін | news&events</title>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<!--header-->
	<?php $news=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--about-->
	<div class="about"> 
		<div class="container">
			<h1 class="hdng"><?php 
			   $result1 = $mysqli->query("SELECT * FROM news WHERE theme = '$theme'");
			   $myrow1 = $result1->fetch_assoc();
				echo $myrow1['texth1'];?></h1>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="../images/news/<?php echo $myrow1['bigfoto'];?>.jpg" class="img-responsive" alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400"/>
					
				</div>
				<div class="col-md-6 about-text-right">

					<form method="POST" action="../scrypt/textnews.php">
						<input type="submit" value="Щоб змінити текст натисни цю кнопку">
                    <?php
						$resultnw = $mysqli->query("SELECT * FROM newstext WHERE theme = '$theme' ");
                        while ($myrownw = $resultnw->fetch_assoc()){
                        $i = $myrownw['id'];
                            echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$myrownw['id']."' value=''>".$myrownw['text']."</textarea></p>");
										
										
                                    }
                        $resultnw2 = $mysqli->query("SELECT MAX(id) AS id  FROM newstext");
						$myrownw2 = $resultnw2->fetch_assoc();
						$i = $myrownw2['id'] + 1;
                        echo ($i);
                        echo ("<p><textarea style='background-color:pink; width:100%' type='text' name='".$i."' value=''></textarea></p>");
						echo ("<p><textarea style='background-color:pink; width:100%' type='text' hidden name='theme' value=''>".$theme."</textarea></p>");
                        ?>
						</form>
			
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="gallery">
		<div class="gallery-grids">
			<ul>
			<?php
				$resultmk = $mysqli->query("SELECT * FROM newsgallery WHERE theme = '$theme' ORDER BY id ASC");
				while ($myrowmk = $resultmk->fetch_assoc()){
					$i = $myrowmk['id'];
				echo ("<li><a href='../images/news/".$myrowmk["mini"].".jpg'><img src='../images/news/".$myrowmk["big"].".jpg' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400' /><div></div></a>
				<form action='../scrypt/uploadfotonews.php' method='post' enctype='multipart/form-data'>
                        <input name='description' type='hidden' value='".$myrowmk['id']."'>
                        <input type='FILE' style=background-color:silver; name='imgupload'>
                        <input type=submit value='Завантажити | Видалити'>
                        <input type='checkbox' name='delete' value='del'>
                        <input type='checkbox' checked name='center' value='resize'>CENTER
                </form>
				</li>");
				}
						$resultnw2 = $mysqli->query("SELECT MAX(id) AS id  FROM newsgallery");
						$myrownw2 = $resultnw2->fetch_assoc();
						$i = $myrownw2['id'] + 1;
                        echo $i;
                        echo ("<li><a href='../images/news/".$myrowmk['mini'].".jpg'><img src='../images/news/".$myrowmk['big'].".jpg' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400' /><div></div></a>
				<form action='../scrypt/uploadfotonews.php' method='post' enctype='multipart/form-data'>
                        <input name='description' type='hidden' value='".$i."'>
                        <input type='FILE' style=background-color:silver; name='imgupload'>
                        <input type=submit value='Завантажити | Видалити'>
                        <input type='checkbox' name='delete' value='del'>
                        <input type='checkbox' checked name='center' value='resize'>CENTER
						<input type='hidden' name='theme' value='".$theme."'>
                </form>
                        </li>");
						echo ("");
			?>	
			</ul>
			<div class="clearfix"> </div>
		</div>	
	</div>
		
		<div class="about-slid"> 
			<div class="container">
				<div class="about-slid-info"> 
					<h2><?php echo htmlspecialchars($myrow['text2']);?></h2>
					<p><?php echo htmlspecialchars($myrow['text3']);?></p>
				</div>
			</div>
		</div>
	</div>
	<!--//about-->
	<!--about-team-->
	
	
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