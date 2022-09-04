<div class="header">
		<div class="container">
			<div class="header-left">
				<ul> 
					<li><a href="./contacts.php">0997713400</a></li>
					<li><a href="./contacts.php"><span>0971204848</span></a></li>
				</ul>
			</div>
			
			<div class="logo">
				<a href="./"> <img src="./images/logo.png" alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<ul>
					<li><a class="<?php echo ($main);?>" href="./">Головна</a></li>
					<li><a class="<?php echo ($about);?>"href="about.php">Про мене</a></li>					
					<li><a class="<?php echo ($makeup);?>"href="makeup.php">Візаж</a></li>
					<li><a class="<?php echo ($hairs);?>"href="hairs.php">Зачіски</a></li>
					<li><a class="<?php echo ($news);?>"href="news&events.php">Новини</a></li>
					<li><a class="<?php echo ($contacts);?>"href="contacts.php">Контакти</a></li>
				</ul>
				<!-- script-for-menu -->
				<script>					
							$("span.menu").click(function(){
								$(".top-nav ul").slideToggle("slow" , function(){
								});
							});
				</script>
				<!-- script-for-menu -->
			</div>
		</div>
	</div>