<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Checkout • LED Concepts</title>
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

<!-- Apply id="wholesaleAcct" if user is logged in as Wholesaler -->
<body class="utility cart checkout" id="">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">

        <div class="jumbotron header-waypoint" data-animate-down="header-small" data-animate-up="header-large"">
            <div class="featureHeadline section wrap">
                <div class="col-xs-12">
                    <!-- <h1>Checkout:</h1> -->
                    <div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
                        <div class="col-xs-4 col-sm-3">
                            <div class="btn btn-empty btn-hexicon" data-bind="css: { active: currentCheckoutStageId() === 'shipping' }"><span class="icon icon-checkoutShippingHex active"></span></div>
                            <p class="hidden-xs"><span class="lead">Customer Info</span></p>
                        </div>
                        <div class="col-xs-2 col-lg-2 hidden-xs"><hr class="aligncenter"></div>
                        <div class="col-xs-4 col-sm-2" data-bind="css: { active: currentCheckoutStageId() === 'reviewAndPayment' }">
                            <div class="btn btn-empty btn-hexicon"><span class="icon icon-checkoutPaymentHex"></span></div>
                            <p class="hidden-xs"><span class="lead">Payment</span></p>
                        </div>
                        <div class="col-xs-2 col-lg-2 hidden-xs"><hr class="aligncenter"></div>
                        <div class="col-xs-4 col-sm-3">
                            <div class="btn btn-empty btn-hexicon" data-bind="css: { active: currentCheckoutStageId() === 'placeOrder' }"><span class="icon icon-checkoutCompleteHex"></span></div>
                            <p class="hidden-xs"><span class="lead">Place Order</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section first">
            <div class="container-fluid">

                <div class="col-xs-12 estimate-total-container">
                    <div class="col-xs-8">
                        <div class="row">
                            <h4 class="text-white first last">Parts Total</h4>
                            <h5 class="text-primary first last">$2000.00</h5>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="row">
                            <a type="button" class="btn btn-dark icon-social pull-right" data-toggle="collapse" data-target=".order-summary">
                                <span class="icon icon-cart"></span>
                                <span class="badge">4</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-xlg-3 cta order-summary collapse pull-right">
                    <div class="section first">
                    <div class="panel panel-empty">
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <div class="row">
                                    <h5 class="first">Summary</h5>
                                    <div class="section wrap">
                                        <hr class="aligncenter first">
                                        <p><span class="lead">4</span> Items in Cart</p>
                                        <hr class="aligncenter first">
                                        <div class="section half first summary-product">
                                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-4">
                                                <div class="row">
                                                    <img class="img-thumbnail img-responsive" src="../img/temp--Morimoto XB35 AMP Ballast 4.jpg" alt="" border="0"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-sm-8 col-md-9 col-lg-8">
                                                <p class="first">BI-XENON: LEXUS RX350</p>
                                                <p><span class="lead">QTY: 2</span> <span class="lead pull-right text-secondary">$1500.00</span></p>
                                            </div>
                                        </div>
                                        <div class="section half first summary-product">
                                            <div class="col-xs-3 col-sm-4 col-md-3 col-lg-4">
                                                <div class="row">
                                                    <img class="img-thumbnail img-responsive" src="../img/temp-gallery7.png" alt="" border="0"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-9 col-sm-8 col-md-9 col-lg-8">
                                                <p class="first">SUPER7: MORIMOTO BI-LED</p>
                                                <p><span class="lead">QTY: 2</span> <span class="lead pull-right text-secondary">$500.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section wrap checkoutmethod">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <hr class="aligncenter">
                                                <div type="button" class="btn btn-block btn-default amazon"><span class="icon icon-amazon icon-before"></span>Amazon <i class="text-weightRegular small">Pay</i></div>

                                                <div data-toggle="modal" data-target="#paypal" type="button" class="btn btn-block btn-default paypal"><span class="icon icon-paypal icon-before"></span>PayPal <i class="text-weightRegular small">Checkout</i></div>
                                            </div>
                                            <div class="col-xs-12"><hr class="aligncenter first"></div>
                                        </div>
                                        <div class="section wrap notice-affirm">
                                            <p class="text-center text-gray1">Starting at <span class="text-affirm">$X.XX/month</span> with <span class="btn btn-empty"><span class="icon icon-affirmFull"></span></span></p> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="section half last cta-extras">
                                <div class="section wrap">
                                    <h6 class="text-center text-gray1">*We offer free standard shipping on orders over $100.</h6>
                                </div>
                                <div class="section wrap">
                                    <p class="note text-center"><span class="lead"><em>*For a shipping quote please fill out address</em></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-7 col-xlg-9 checkoutForms-container">
                    <!-- Shipping 1 -->
                    <div class="section first shippingaddress">
                        <h3>Shipping Address</h3>
                        <hr class="aligncenter">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Email Address">
                                    </div>
                                    <div class="col-sm-2 text-center"><div class="or-container"><span>or</span></div></div>
                                    <div class="col-sm-4 pull-right">
                                        <div type="button" class="btn btn-block btn-primary">Login</div>
                                    </div>
                                </div>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Company Name">
                                    </div>
                                </div>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="City">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Region/State">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Postal Code">
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control drop validate-select" id="select">
                                            <option value="">Country</option>
                                            <option value="#">#</option>
                                            <option value="#">#</option>
                                            <option value="#">#</option>
                                            <option value="#">#</option>
                                            <option value="#">#</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"><span class="small">My Billing and Shipping Address are the same</span>
                                    </label>
                                </div>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowRcircle-fff icon-after"></span> Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                
                    <!-- Shipping 2 -->
                    <div class="section first shippingaddress">
                        <h3>Shipping Address</h3>
                        <hr class="aligncenter">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="" placeholder="option1" checked="">
                                                <p class="small"><span class="text-uppercase">Select an entry from your Address Book</span></p>
                                                <div class="reveal-if-active">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <select class="form-control drop" id="select">
                                                                <option value="">Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                <option value="#">Rob Shimits 747 Quaker Ridge Ct., Columbus, OH, 43230 United States 4406668214</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="" placeholder="option2">
                                                <p class="small"><span class="text-uppercase">Ship to a different address</span></p>
                                                <div class="reveal-if-active">
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="First Name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Company Name">
                                                        </div>
                                                    </div>
                                                    <hr class="aligncenter">
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 1">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 2">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="City">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Region/State">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="inputDefault" placeholder="Postal Code">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <select class="form-control drop validate-select" id="select">
                                                                <option value="">Country</option>
                                                                <option value="#">#</option>
                                                                <option value="#">#</option>
                                                                <option value="#">#</option>
                                                                <option value="#">#</option>
                                                                <option value="#">#</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"><span class="small">Save to My Address Book</span>
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"><span class="small">My Billing and Shipping Address are the same</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowRcircle-fff icon-after"></span> Next</div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div> 

                    <!-- Shipping Method -->
                    <div class="section first shippingmethod">
                        <h3>Shipping Method</h3>
                        <hr class="aligncenter">
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="" placeholder="option1" checked="">
                                                <div class="well">
                                                    <p class="first last"><span class="lead">USPS</span> &nbsp; Priority Mail <span class="pull-right lead text-secondary">$0.00</span></p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="" placeholder="option2">
                                                <div class="well">
                                                    <p class="first last"><span class="lead">UPS</span> &nbsp; Ground <span class="pull-right lead text-secondary">$0.00</span></p>
                                                </div>
                                            </label>
                                        </div>
                                    </p>
                                </p>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowRcircle-fff icon-after"></span> Next</div>
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