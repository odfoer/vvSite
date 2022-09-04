<?php 
   include '../blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='news'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html>
<head>
<title>Адмін | news&events</title>
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
<body>
	<!--header-->
	<?php $news=("active"); include '../admin/aheader.php';?>
	<!--//header-->
	<!--banner-->
	<div class="banner1 about-bnr">
	</div>	
	<!--//banner-->
	<!--news-->
	<div class="news" >
		<div class="container">
			<h1 class="hdng">Події та новини</h1>
			<h2 class="hdng-two">
			  <form method="POST" action="../scrypt/pages.php">
				 <input type="submit" value="Щоб змінити text1 натисніть цю кнопку">
				 <input style='background-color:silver' type='hidden' name='id' value='<?php echo $myrow['id'];?>'>
				 <label>text1</label>
				 <textarea style='background-color:silver;' type='text' name='text1' value=''><?php echo $myrow['text1'];?></textarea>
			  </form>
			
			</h2>
			<div class="news-info">

					<?php
						$resultnews = $mysqli->query("SELECT * FROM news");
						while ($myrownews = $resultnews->fetch_assoc()){
								$theme = $myrownews["theme"];
								$i = $myrownews["id"];
						echo ("<div class='col-md-6 news-grids'>
							   <div class='news-grids-left'>
							   <a href='../admin/anews&events_.php?theme=$theme'>
							   <img src='../images/news/".$myrownews["minifoto"].".jpg' class='img-responsive' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400'></a>
									<form action='../scrypt/uploadnews.php' method='post' enctype='multipart/form-data'>
										<input name='description' type='hidden' value='".$myrownews['id']."'>
										<input type='FILE' style=background-color:silver; name='imgupload'>
										<input type=submit value='Змінити новину | Видалити ВСЕ'>
										<input type='checkbox' name='delete' value='del'>
										<input type='checkbox' checked name='center' value='resize'>CENTER
										<input style='background-color:silver' type='hidden' name='id' value='".$myrownews['id']."'>
										<label>THEME:".$myrownews['theme']."</label>
										<textarea style='background-color:silver;' type='text'  hidden name='theme' value=''>".$myrownews['theme']."</textarea>
										<label>data:</label>
										<textarea style='background-color:silver;' type='text' required name='data' value=''>".$myrownews['data']."</textarea>
										<label>minitext:</label>
										<textarea style='background-color:silver;' type='text' required name='minitext' value=''>".$myrownews['minitext']."</textarea>
										<label>Заголовок:</label>
										<textarea style='background-color:silver;' type='text' required name='texth1' value=''>".$myrownews['texth1']."</textarea>
									</form>
							   </div><div class='news-grids-right'>
							   </div>
							   <div class='clearfix'> </div></div>");
						}
						$i++;
						$theme = '';
						echo ("<div class='col-md-6 news-grids'>
							   <div class='news-grids-left'>
							   <a href='../admin/anews&events_.php?theme=$theme'>
							   <img src='../images/news/".$myrownews["minifoto"].".jpg' class='img-responsive' alt='Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400'></a>
									<form action='../scrypt/uploadnews.php' method='POST' enctype='multipart/form-data'>
										<input name='description' type='hidden' value='".$i."'>
										<input type='FILE' style=background-color:silver; name='imgupload'>
										<input type=submit value='Записати новину | Видалити'>
										<input type='checkbox' name='delete' value='del'>
										<input type='checkbox' checked name='center' value='resize'>CENTER
										<label>data:</label>
										<textarea style='background-color:silver;' type='text' required name='data' value=''></textarea>
										<label>minitext:</label>
										<textarea style='background-color:silver;' type='text' required name='minitext' value=''></textarea>
										<label>Заголовок:</label>
										<textarea style='background-color:silver;' type='text' required name='texth1' value=''></textarea>
									</form>
							   </div><div class='news-grids-right'>
							   </div>
							   <div class='clearfix'> </div></div>".$i);
							   
							   
 					?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//news-->
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