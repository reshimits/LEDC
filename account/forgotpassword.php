<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Forgot Password • LED Concepts</title>
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

<body class="account utility forgotpassword">

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
                <h1>Forgot Password</h1>
                <h4>Please enter your email address below. You will receive a link to reset your password.</h4>
            </div>
        </div>


       <div class="section wrap">

                <div class="col-xs-12 col-sm-5 col-lg-6 section">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>We can help with that</h3>
                        <p>Please check your spam folder if you do not receive a new password within five minutes. If you did not receive an email, please call support at <a href="tel:404-220-7940">404-220-7940</a>.</p>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-7 col-lg-6 section short gray3">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>Retrieve Password</h3>
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Email">
                                    </div>
                                </div>
                                
                                <hr class="aligncenter">

                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Submit</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form> 
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