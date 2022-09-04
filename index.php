<?php 
   include './blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='index'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <title><?php echo htmlspecialchars($myrow['title']);?></title>
    <meta property="og:url" content="http://victoria-visage.lutsk.ua/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo htmlspecialchars($myrow['title']);?>" />
    <meta property="og:description" content="<?php echo $myrow['meta_d'];?>" />
    <meta property="og:image" content="http://victoria-visage.lutsk.ua/images/img5.jpg" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="wot-verification" content="c67b473088cde2a261cc" />
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!--header-->
    <?php $main=("active"); include 'blocks/header.php';?>
    <!--//header-->
    <!--banner-->
    <div class="banner">
        <!-- banner-text Slider starts Here -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
        </script>
        <!--//End-slider-script -->
        <div id="top" class="callbacks_container">
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
    <!--//banner-->
    <!--welcome-->
    <div class="welcome">
        <div class="container">
            <h1 class="hdng"><?php echo htmlspecialchars($myrow['text1']);?></h1>
            <h1 class="hdng"><?php echo htmlspecialchars($myrow['text2']);?></h1>
            <p><?php echo htmlspecialchars($myrow['text3']);?></p>
            <div class="welcome-info">
                <div class="col-md-6 welcome-grids">
                    <img src="images/img1.jpg"
                        alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400" />
                </div>
                <div class="col-md-6 welcome-grids">
                    <img src="images/img2.jpg"
                        alt="Вікторія Ващук | професійний весільний візажист-стиліст в Луцьку | (099)77-13-400" />
                </div>
                <div class="clearfix"> </div>
            </div>
            <p><?php echo htmlspecialchars($myrow['text4']);?></p>
        </div>
    </div>
    <!--//welcome-->
    <!--banner-bottom-->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-4 banner-bottom-grids">
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
            <p></p>
            <ul>
                <?php
			$resultido = $mysqli->query("SELECT * FROM indexpageido ");
			while ($myrowido = $resultido->fetch_assoc()){
                                 if ($myrowido["text"] == 0){
                                 echo ("<li><span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span><a href='".$myrowido["href"]."'>".htmlspecialchars($myrowido["text"])."</a></li>");
                                 }
                                 }
			?>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="work">
        <div class="col-md-4 work-grids work-grids-left">
            <h3>Чому саме я ?</h3>
            <p></p>
            <ul>
                <?php
			$resultwi = $mysqli->query("SELECT * FROM indexpagewi ");
			while ($myrowwi = $resultwi->fetch_assoc()){
                                 if ($myrowwi["text"] == 0){
                                 echo ("<li><span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span><a href='".$myrowwi["href"]."'>".htmlspecialchars($myrowwi["text"])."</a></li>");
                                 }
                                 }
			?>
            </ul>
        </div>
        <div class="col-md-8 work-grids work-img work-img-btm">
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--//work-->
    <!--services-->
    <div class="services">
        <div class="container">
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
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider) {
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
    <?php include 'blocks/footer.php';?>
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