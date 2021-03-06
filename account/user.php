<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>My Account • LED Concepts</title>
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

<body class="account">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">
        
        <div class="jumbotron">
            <div class="featureHeadline col-xs-12">
                <h1>My Account</h1>
                <h4>Welcome, Boss Koss</h4>
            </div>
        </div>


        <div class="section wrap">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="tabWrap">
                        <div class="nav-tabsWrap col-xs-12 col-sm-3 col-lg-2">
                            <div class="row">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="tab-myacct-orderhistory active"><a href="#orderhistory" data-toggle="tab">
                                        <span class="icon icon-myacct icon-myacct-orderhistory"></span>
                                        <h4><span class="hidden-xs">Order </span>History</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                    <li class="tab-myacct"><a href="#myacct" data-toggle="tab">
                                        <span class="icon icon-myacct"></span>
                                        <h4><span class="hidden-xs">My </span>Account</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-contentWrap gray3 col-xs-12 col-sm-9 col-lg-10">
                            <div id="myTabContent" class="tab-content gray3">
                                <div class="tab-pane fade active in" id="orderhistory">
                                    <?php require('../account/orderhistory.html');?>
                                </div>
                                <div class="tab-pane fade" id="myacct">
                                    <?php require('../account/myacct.html');?>
                                </div>
                            </div>
                        </div>
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

    <!-- HEADER/NAV size change based on scroll -->
    <script src="../js/waypoints.min.js"></script>
    <script>
        var $head = $( '#header' );
        $( '.header-waypoint' ).each( function(i) {
            var $el = $( this ),
                animClassDown = $el.data( 'animateDown' ),
                animClassUp = $el.data( 'animateUp' );

            $el.waypoint( function( direction ) {
                if( direction === 'down' && animClassDown ) {
                    $head.attr('class', 'header ' + animClassDown);
                }
                else if( direction === 'up' && animClassUp ){
                    $head.attr('class', 'header ' + animClassUp);
                }
            }, { offset: '0%' } );
        } );
    </script>

    <!-- HEADER/NAV toggle MENU BTN -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        }
        $( ".navbar-menu" ).click(function() {
            $(".navbar-menu").toggleClass( "active" );
            $(".bodyWrap").toggleClass( "active" );
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

    <!-- PRODUCT QTY ORDERING: Added to style the Spinner for Numeric Inputs -->
    <script type="text/javascript">
        (function ($) {
          $('.spinner .btn.add').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
          });
          $('.spinner .btn.subtract').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
          });
        })(jQuery);
    </script>
  

    <!-- End Document
    ================================================== -->

</body>
</html>