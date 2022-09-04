<?php 
   include './blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='news'");
   $myrow = $result->fetch_assoc();
      if (isset($_GET['p'])){
   $p = $_GET['p'];
   if ($p == ''){
		header('Location: ./news&events.php');
		exit;
	}
   } else $p = 0;
   ?>
<!DOCTYPE html>
<html>
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
</head>
<body>
	<!--header-->
	<?php $news=("active"); include 'blocks/header.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--news-->
	<div class="news" >
		<div class="container">
			<h1 class="hdng">Події та новини</h1>
			<h2 class="hdng-two"><?php echo $myrow['text1'];?></h2>
			<div class="news-info">
					<?php
						$resultrows = $mysqli->query("SELECT * FROM news");
						$num_rows = $resultrows->num_rows;
						$resultnews = $mysqli->query("SELECT * FROM news ORDER BY id DESC LIMIT $p, 4");
						while ($myrownews = $resultnews->fetch_assoc()){
								$theme = $myrownews["theme"];
						echo ("<div class='col-md-6 news-grids'><div class='news-grids-left'><a href='./news&events_.php?theme=$theme'><img src='images/news/".$myrownews["minifoto"].".jpg' class='img-responsive' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400'></a></div><div class='news-grids-right'><h5>".$myrownews["data"]."</h5><p>".$myrownews["minitext"]."</p></div><div class='clearfix'> </div></div>");
						}
						//echo $num_rows;
						$i = 0;
						$y = 1;
						echo "<div class='top-nav2'><ul>";
 					while ($i <> $num_rows){
						if (($p == $i)){
							$class = 'active';
							
						} else $class = '';
						if (!($i % 4)){
							echo "<li><a class='".$class."' href='./news&events.php?p=$i'>".$y++."</a></li>";
						}
												
											$i++;	
					}
					echo "</ul></div>";
					
					
					?>
				<div class="clearfix"> </div>
			</div>
		</div> 
	</div>
	<!--//news-->
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