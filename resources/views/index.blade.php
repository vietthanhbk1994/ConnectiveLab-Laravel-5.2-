<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <title>Connective Lab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/", "ext":".png", "source":{"concatemoji":"http:\/\/demo.themovation.com\/pursuit_one_page\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.2.5"}};
            !function(a, b, c){function d(a){var c = b.createElement("canvas"), d = c.getContext && c.getContext("2d"); return d && d.fillText?(d.textBaseline = "top", d.font = "600 32px Arial", "flag" === a?(d.fillText(String.fromCharCode(55356, 56812, 55356, 56807), 0, 0), c.toDataURL().length > 3e3):(d.fillText(String.fromCharCode(55357, 56835), 0, 0), 0 !== d.getImageData(16, 16, 1, 1).data[0])):!1}function e(a){var c = b.createElement("script"); c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)}var f, g; c.supports = {simple:d("simple"), flag:d("flag")}, c.DOMReady = !1, c.readyCallback = function(){c.DOMReady = !0}, c.supports.simple && c.supports.flag || (g = function(){c.readyCallback()}, b.addEventListener?(b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)):(a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function(){"complete" === b.readyState && c.readyCallback()})), f = c.source || {}, f.concatemoji?e(f.concatemoji):f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))}(window, document, window._wpemojiSettings);
        </script>
        <style type="text/css">
            .error{
                color:red;
            }
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 .07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <link rel="stylesheet" href="css/formidablepro.css">
        <link rel="stylesheet" href="css/style_front.css">
        <link rel="stylesheet" href="css/glyphicons.css">
        <link rel="stylesheet" href="css/themo_animations.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/ekko-lightbox.min.css">
        <link rel="stylesheet" href="css/ekko-dark.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/app.css">
        <style id='roots_app-inline-css' type='text/css'>
            /* Navigation Padding */
            .navbar .navbar-nav {margin-top:13px} 
            .navbar .navbar-toggle {top:15px}
        </style>
        <!-- Basic stylesheet owl carousel slide -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Default Theme owl carousel slide-->
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/responsive.css?ver=1">
        <script type='text/javascript' src='js/jquery.js?ver=1.11.2'></script>
        <script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>
        <script type='text/javascript' src='js/vendor/modernizr-2.7.0.min.js?ver=2.7.0'></script>
        <script type='text/javascript' src='js/vendor/jquery.backstretch.min.js?ver=2.0.4'></script>
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/favicon.ico" type="image/icon">
        <link rel="icon" href="images/favicon.ico" type="image/icon">
        <!--<link rel="stylesheet" href="css/style_front.css">-->
        <!-- Theme Custom CSS outfall -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body class="home page page-id-6 page-template-default">
        <!-- MENU -->
        @include('layouts.menu')                             
        <!-- END MENU -->
        <div class="wrap" role="document" id="home">
            <div class="content">
                <div class="inner-container">
                    <!-- HOME -->
                    @include('home')   
                    <!-- SERVICES -->
                    @include('services')                     
                    <!-- TECHNOLOGIES -->
                    @include('technologies')   
                    <!-- FEEDBACKS -->
                    @include('feedbacks')                      
                    <!-- MEMBERS -->
                    @include('members')                    
                    <!-- CONTACTS -->
                    @include('contacts')
                </div><!-- /.inner-container -->
            </div><!-- /.content -->
        </div><!-- /.wrap -->
        <!-- CONTACTS -->
        @include('layouts.footer')
        <script type='text/javascript' src='js/init.js?ver=1'></script>
        <script type='text/javascript' src='js/vendor/imagesloaded.pkgd.min.js?ver=3.1.4'></script>
        <script type='text/javascript' src='js/vendor/jquery.stellar.min.js?ver=0.6.22'></script>
        <script type='text/javascript' src='js/main.js?ver=1'></script>
        <script type='text/javascript' src='js/vendor/bootstrap.min.js?ver=3.1.1'></script>
        <script type='text/javascript' src='js/vendor/application.js?ver=1'></script>
        <script type='text/javascript' src='js/vendor/ekko-lightbox.min.js?ver=1'></script>
        <script type='text/javascript' src='js/vendor/jquery.flexslider-min.js?ver=2.2.2'></script>
        <script type='text/javascript' src='js/masonry.min.js?ver=3.1.2'></script>
        <script type='text/javascript' src='js/vendor/jquery.scrollUp.min.js?ver=2.4.0'></script>
        <script type='text/javascript' src='js/vendor/jquery.smooth-scroll.min.js?ver=1.5.3'></script>
        <script type='text/javascript' src='js/vendor/jquery.ba-bbq.js?ver=1.2.1s'></script>
        <script type='text/javascript' src='js/vendor/waypoints.min.js?ver=2.0.5'></script>
        <script type='text/javascript' src='js/vendor/headhesive.min.js?ver=1.1.1'></script>
        <script type='text/javascript' src='js/vendor/retina.min.js?ver=1.3.0'></script>
        <script type='text/javascript' src='js/demo_options.js?ver=1'></script>
        <script type='text/javascript' src='js/jquery.placeholder.js?ver=2.0.7'></script>
        <!-- Include js plugin owl carousel-->
        <script src="js/owl.carousel.min.js"></script>
        <script type='text/javascript'>
            /* <![CDATA[ */
            var frm_js = {"ajax_url":"http:\/\/demo.themovation.com\/pursuit_one_page\/wp-admin\/admin-ajax.php", "images_url":"http:\/\/demo.themovation.com\/pursuit_one_page\/wp-content\/plugins\/formidable\/images", "loading":"Loading\u2026", "remove":"Remove", "offset":"4", "nonce":"5df4907927", "id":"ID"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='js/formidable.min.js?ver=2.0.11'></script>
        <script type='text/javascript' src='js/jquery.validate.min.js'></script>

        <script>

            jQuery(window).load(function() {

            var isTouchAnimation = is_touch_device(false);
            if (!isTouchAnimation){
            animate_scrolled_into_view(jQuery('#main-flex-slider .slider-title'), 'slideUp', '0');
            animate_scrolled_into_view(jQuery('#main-flex-slider .slider-subtitle'), 'slideUp', '100');
            animate_scrolled_into_view(jQuery('#main-flex-slider .page-title-button'), 'slideUp', '200');
            
            var scrollTimeout; // global for any pending scrollTimeout

            jQuery(window).scroll(function() {
            if (scrollTimeout) {
            // clear the timeout, if one is pending
            clearTimeout(scrollTimeout);
            scrollTimeout = null;
            }
            scrollTimeout = setTimeout(scrollHandler, 0);
            });
            scrollHandler = function () {
            if (!is_touch_device(false)){ // Disable for Mobile
            animate_scrolled_into_view(jQuery('#main-flex-slider .slider-title'), 'slideUp', '0');
            animate_scrolled_into_view(jQuery('#main-flex-slider .slider-subtitle'), 'slideUp', '100');
            animate_scrolled_into_view(jQuery('#main-flex-slider .page-title-button'), 'slideUp', '200');
            }
            };
            };
            });
        </script>
        <script>
            jQuery(document).ready(function () {
            jQuery("#owl-member").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items: 4,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    pagination: false
            });
            jQuery("#owl-carousel").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
                    items : 4,
                    itemsDesktop : [1199, 3],
                    itemsDesktopSmall : [979, 3],
                    pagination: false
            });
            jQuery("#form-contacts").validate({
            rules: {
            name : {
            required : true,
                    maxlength: 100
            },
                    email : {
                    required : true,
                            maxlength: 100,
                            email: true
                    },
                    company : {
                    required : true,
                            maxlength: 100
                    },
                    content : {
                    required : true
                    }
            }
            });
            jQuery("#owl-feedbacks").owlCarousel({
            navigation : false, // Show next and prev buttons
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem:true,
                    items : 1,
                    itemsDesktop : false,
                    itemsDesktopSmall : false,
                    itemsTablet: false,
                    itemsMobile : false,
                    pagination: false
            });
            });

        </script>
    </body>
</html>