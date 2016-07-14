<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="../public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

    <!-- js -->
    <script src="../public/js/jquery.min.js"></script>
    <!-- //js -->
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flatter Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="../public/js/move-top.js"></script>
    <script type="text/javascript" src="../public/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="navi">
            <div class="head-logo">
                <div class="logo">
                    <a href="index.html">LOGO</a>
                </div>
                <div class="head-logo-right-icons">
                    <div class="head-logo-right">
                        <div class="fig">
                        </div>
                        <ul>
                            <li><a href="#" class="dot"> </a></li>
                            <li><a href="#" class="mes"> </a></li>
                            <li><a href="index.php?r=hello/login">点我!点我!!</a></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="top-nav">
                <span class="menu"><img src="../public/images/menu.png" alt="" /></span>
                <ul class="nav1">
                    <li><a href="index.html" class="active">HOME</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                </ul>
                <script>
                    $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                            // Animation complete.
                        });
                    });

                </script>
            </div>
            <div class="clearfix"> </div>
            <div class="banner-info">
                <h3>OUR <span>TOTAL</span> <span>PRODUCTS</span><span></span></h3>
                <p class="para">Selected Projects from<span>fanhonglong</span></p>
            </div>

        </div>
    </div>
</div>
<!-- //banner -->
</body>
</html>