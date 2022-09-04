<div class="header">
		<div class="container">
			<div class="header-left">
				<ul> 
					<li><a href="../admin/aindex.php">0997713400</a></li>
					<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>0971204848</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
									<fieldset id="body">
										<fieldset>
											<label for="email">Email Address</label>
											<input type="text" name="email" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Password</label>
											<input type="password" name="password" id="password">
										</fieldset>
										<input type="submit" id="login" value="Sign in">
										<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
									</fieldset>
									<span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			
			<div class="logo">
				<a href="../"> <img src="../images/logo.png" alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400"/></a>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="../images/menu.png" alt=""/></span>
				<ul>
					<li><a class="<?php echo ($main);?>" href="../admin/aindex.php">Головна</a></li>
					<li><a class="<?php echo ($about);?>"href="../admin/aabout.php">Про мене</a></li>					
					<li><a class="<?php echo ($makeup);?>"href="../admin/amakeup.php">Мейкап</a></li>
					<li><a class="<?php echo ($hairs);?>"href="../admin/ahairs.php">Зачіски</a></li>
					<li><a class="<?php echo ($news);?>"href="../admin/anews&events.php">Новини</a></li>
					<li><a class="<?php echo ($contacts);?>"href="../admin/acontacts.php">Контакти</a></li>
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
			<div class="search-box">
				<div id="sb-search" class="sb-search">
					<form>
						<input class="sb-search-input" placeholder="search term..." type="search" name="search" id="search">
						<input class="sb-search-submit" type="submit" value="">
						<span class="sb-icon-search"> </span>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
			<!-- search-scripts -->
			<script src="js/classie.js"></script>
			<script src="js/uisearch.js"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
		</div>
	</div>