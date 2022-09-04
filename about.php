<?php 
   include './blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='about'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <title><?php echo htmlspecialchars($myrow['title']);?></title>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="description" content="<?php echo $myrow['meta_d'];?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($myrow['meta_k']);?>" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
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
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
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
    <?php $about=("active"); include 'blocks/header.php';?>
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
                    <img src="images/img5.jpg" class="img-responsive"
                        alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400" />
                </div>
                <div class="col-md-6 about-text-right">
                    <?php
						$resultab = $mysqli->query("SELECT * FROM aboutpageabout");
						//$i = 0;
						while ($myrowab = $resultab->fetch_assoc()){
                                 //if ($myrowab["text"] == 0){
									// $i++;
									// if ($i == 1){
									  // echo ("<h4>".htmlspecialchars($myrowab["text"])."</h4>");
									// } else
									 
                                 //echo ("<p>".htmlspecialchars($myrowab["text"])."</p>");
                                 //}
                                 echo ("<p>".htmlspecialchars($myrowab["text"])."</p>");
                                 }
			?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="about-slid">
            <div class="container">
                <div class="about-slid-info">
                    <h2><?php echo htmlspecialchars($myrow['text1']);?></h2>
                    <p><?php echo htmlspecialchars($myrow['text2']);?></p>
                </div>
            </div>
        </div>
    </div>
    <!--//about-->
    <video id=videoPlayer controls="controls" width="100%"
        poster="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.jpg" width="100%"
        title="www.victoria-visage.lutsk.ua" onended="var v=this;setTimeout(function(){v.play()},300)">
        <source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.mp4" type="video/mp4" />
        <source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.m4v" type="video/mp4" />
        <source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.webm"
            type="video/webm" />
        <source src="index.files/html5video/Backstage_Make_up_&_hairstyles_by_Victoria_Vashchuk.ogv" type="video/ogg" />
        <object type="application/x-shockwave-flash" data="index.files/html5video/flashfox.swf" width="100%"
            style="position:relative;">
            <param name="movie" value="index.files/html5video/flashfox2.swf" />
            <param name="allowFullScreen" value="true" />
            <param name="flashVars"
                value="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v" />
            <embed src="index.files/html5video/flashfox2.swf" width="100%" style="position:relative;"
                flashVars="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v"
                allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash"
                pluginspage="http://www.adobe.com/go/getflashplayer_en" />
        </object>
    </video>
    <video id=videoPlayer controls="controls" width="100%"
        poster="index.files/html5video/www.victoria-visage.lutsk.ua.jpg" width="100%"
        title="www.victoria-visage.lutsk.ua" onended="var v=this;setTimeout(function(){v.play()},300)">
        <source src="index.files/html5video/www.victoria-visage.lutsk.ua.mp4" type="video/mp4" />
        <source src="index.files/html5video/www.victoria-visage.lutsk.ua.m4v" type="video/mp4" />
        <source src="index.files/html5video/www.victoria-visage.lutsk.ua.webm" type="video/webm" />
        <source src="index.files/html5video/www.victoria-visage.lutsk.ua.ogv" type="video/ogg" />
        <object type="application/x-shockwave-flash" data="index.files/html5video/flashfox.swf" width="100%"
            style="position:relative;">
            <param name="movie" value="index.files/html5video/flashfox.swf" />
            <param name="allowFullScreen" value="true" />
            <param name="flashVars"
                value="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v" />
            <embed src="index.files/html5video/flashfox.swf" width="100%" style="position:relative;"
                flashVars="autoplay=false&amp;controls=true&amp;fullScreenEnabled=true&amp;posterOnEnd=true&amp;loop=false&amp;poster=index.files/html5video/www.victoria-visage.lutsk.ua.jpg&amp;src=www.victoria-visage.lutsk.ua.m4v"
                allowFullScreen="true" wmode="transparent" type="application/x-shockwave-flash"
                pluginspage="http://www.adobe.com/go/getflashplayer_en" />
        </object>
    </video>
    <script src="index.files/html5video/html5ext.js" type="text/javascript"></script>

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

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

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