<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Maintenance • LED Concepts</title>
    <meta name="description" content="Google Description Here">
    <meta name="keywords" content="Keywords Here" />
    <meta name="author" content="SHIMITS Design/Development">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <!-- CSS
    ================================================== -->
    <link href="../css/bootstrap-theme-full.css" rel="stylesheet">
    <link href="../css/ledc-theme.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Teko:300,400,600" rel="stylesheet">
    
    <!-- Javascript [primary]
    ================================================== -->
    
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="icon" sizes="32x32" href="../img/favicon-32.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../img/favicon-152.png">

</head>

<body class="utility maintenance">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">
        
        <div class="section details short gray3"> 
            <div class="section">
            <div class="container"> 
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <h1>Site Maintenance!</h1>
                    <h3>Sorry about that, we will be right back...</h3>
                    <hr class="aligncenter">
                    <h5 class="text-gray1">We sincerely apologize for the inconvenience. Our site is currently undergoing scheduled maintenance and updates, but will return shortly. Thank you for you patience.</h5>
                    <p>If you have any immediate questions, please <a href="#contact">contact us</a>.</p>
                </div>
            </div>
            </div>
        </div>
        


        <!-- Footer
        ================================================== -->

        <?php require('../shared/footer.html');?>


    </div> <!-- /container -->

    <?php require('../shared/modals.html');?>


    <!-- End Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->
        
    

    <!-- Javascript [secondary]
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 

    <!-- HEADER/NAV toggle MENU BTN -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        }
        $( ".navbar-menu" ).click(function() {
            $(".navbar-menu").toggleClass( "active" );
            // $(".bodyWrap").toggleClass( "active" );
        });
        $('.navbar-nav .dropdown').on('show.bs.dropdown', function() {
            $(".bodyWrap").toggleClass('active', true);
        });

        $('.navbar-nav .dropdown').on('hidden.bs.dropdown', function() {
            $('.bodyWrap').toggleClass('active', false);
        });

        // NAV toggle SUB MENU
        $(".dropdown-menu > li").hover(
            function() {
                $('.dropdown-menu-itemContent.toggle').toggleClass("toggle", false);
                $(this).find('.dropdown-menu-itemContent').toggleClass("toggle", true);
            },
            function() {
                $(this).find('.dropdown-menu-itemContent').toggleClass("toggle", false);
                $(".dropdown-menu > li:first-child .dropdown-menu-itemContent").toggleClass("toggle", true);
            });
        $(".dropdown-menu > li.filler").hover(
            function() {
                $(".dropdown-menu > li:first-child .dropdown-menu-itemContent").toggleClass("toggle", true);
            });    

    </script>

    <!-- iOS Viewport Units Buggyfill -->
    <script src="../js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();
        var hacks = require('viewport-units-buggyfill.hacks');
        require('viewport-units-buggyfill').init({
          hacks: hacks
        });
    </script>

  

    <!-- End Document
    ================================================== -->

</body>
</html>