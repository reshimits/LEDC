<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Verify Account • LED Concepts</title>
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

<body class="account utility verifyaccount">

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
                <h1>Verify Your Account</h1>
                <h4>This email address is currently associated with an existing customer account. Please log in to associate your Amazon account with this customer.</h4>
            </div>
        </div>


       <div class="section wrap">

                <div class="col-xs-12 col-sm-5 col-lg-6 section">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>Verify Email</h3>
                        <p>Email address: <span class="text-weightBold">Matt@theretrofitsource.com</span></p>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-7 col-lg-6 section short gray3">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>Verify Password</h3>
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Password">
                                    </div>
                                </div>
                                
                                <hr class="aligncenter">

                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="small" style="float:left;"><a href="/client/TRS/2016/account/forgotpassword.php">Forgot Password</a></div>
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