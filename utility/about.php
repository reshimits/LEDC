<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>About Us • LED Concepts</title>
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

<body class="utility about">

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
                <h1>About Us</h1>
                <h4>Lorem Ipsum Si Dolor Blah blah</h4>
            </div>
        </div>

        <div class="section wrap">
            <div class="flex-row">
                <div class="col-xs-12 col-sm-6 section">
                    <div class="container-fluid">
                    <div class="col-xs-12">
                        <h3>A Brief History of TRS</h3>
                        <p><span class="text-weightBold">Years ago there were no formal sources for retrofitting components.</span> You would have to get a damaged headlight off of eBay or from a salvage yard, extract all the parts from it yourself and design and put together your own wire harness. There were no guarantees on the internal or working condition of these parts, and they were expensive too. You want a set of OEM [plastic] projector shrouds from a BMW E46? $200. A set of OEM clear lenses? That'll be another two bills. You haven't even purchased the core components for the retrofit yet. How about some Acura TL projectors? 300 bucks. Decent condition used OEM ballasts and Philips light bulbs: $200 please and thank you sir.</p>

                        <p class="text-weightBold">And thus, The Retrofit Source was born in June of 2005.</p>

                        <p>Originally specializing in collecting and supplying the hard-to-find HID headlight retrofit components, we started out as a company who purchased and recycled slightly damaged headlight assemblies in bulk from salvage yards around the US. Everything salvageable was cleaned, tested and sold; only to realize road-use once again in a retrofit. Eventually we developed our own purpose-built lineup of parts. Starting with the high-demand parts that could be used across the board such as our E46-Replica shrouds or ZKW-Replica lenses, they were an instant hit. Offering OEM-like performance on an aftermarket budget, we expanded the lineup to include other necessities such as ballasts, bulbs, wire harnesses, and of course projectors. All of these components are designed and manufactured exclusively for TRS under our house brand known as Morimoto. Though we believe Morimoto parts offer the best bang for the buck, we also offer well respected brands like Koito, Stanley, Philips, Osram, Denso, and Matsushita.</p>
                    </div>  
                    </div>          
                </div>

                <div class="col-xs-12 col-sm-6 section gray1 blockquote1">
                    <div class="container-fluid">
                    <div class="col-xs-12">
                        <div class="blockquote">
                            <div class="btn btn-empty btn-hexicon"><span class="icon icon-blockquoteHex"></span></div>
                            <h5 class="text-white">“We truly believed that everybody without a retrofit didn't know what they were missing. By significantly lowering prices, creating a single source for all required components, and educating those who gave us the chance, we were on a mission.”</h5>
                        </div>
                    </div>  
                    </div>          
                </div>
            </div>

            <div class="flex-row">
                <div class="col-xs-12 col-sm-6 section blockquote2">
                    <div class="container-fluid">
                    <div class="col-xs-12">
                        <div class="section">
                        <div class="blockquote">
                            <div class="btn btn-empty btn-hexicon"><span class="icon icon-blockquoteHexAlt"></span></div>
                            <h5>“The Retrofit Source offers the absolute best when it comes to HID headlight retrofitting. We will make every customer happy without exception to uphold the reputation that we've worked so hard to build.”</h5>
                        </div>
                        </div>
                    </div>  
                    </div>          
                </div>

                <div class="col-xs-12 col-sm-6 section blockquote2">
                          
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

    
    <!-- End Document
    ================================================== -->

</body>
</html>