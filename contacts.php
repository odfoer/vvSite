<?php 
   include './blocks/reset.php';
   $result = $mysqli->query("SELECT * FROM pages WHERE page='contacts'");
   $myrow = $result->fetch_assoc();
   ?>
<!DOCTYPE html>
<html lang="uk">

<head>
    <title><?php echo htmlspecialchars($myrow['title']);?></title>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $myrow['meta_d'];?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($myrow['meta_k']);?>" />
    <meta name="author" content="odfoer">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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
    <?php $contacts=("active"); include 'blocks/header.php';?>
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

                </div>
                <div class="col-md-4 address">
                    <h2>Контакти</h2>
                    <p class="cnt-p"></p>
                    <p><?php echo htmlspecialchars($myrow['text2']);?></p>
                    <p><?php echo htmlspecialchars($myrow['text3']);?></p>
                    <p><?php echo htmlspecialchars($myrow['text4']);?></p>
                    <p><?php echo $myrow['text5'];?></p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//contact-->
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