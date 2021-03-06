<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>My Cart • LED Concepts</title>
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

<body class="utility cart">

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
                <h1>My Cart</h1>
                <h4>Checkout</h4>
            </div>
        </div>

        <!-- If no Products are in Cart -->
        <!-- <div class="section short">
            <div class="container">
                <div class="col-xs-12">
                    <h3>You have no items in your shopping cart.</h3>
                    <h5 class="text-gray1">Click <a href="">here</a> to continue shopping.</h5>
                </div>
            </div>
        </div> -->

        <!-- If Products are in Cart -->
        <div class="section gray1 cart-product">
            <div class="container-fluid">
                <div class="col-xs-12">
                    <h3>BI-XENON: LEXUS RX350</h3>
                    <hr class="aligncenter first">
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-3">
                    <ul class="row productGrid">
                        <li class="thumbnail">
                            <a href="productdetail.php" class="thumb-top">
                                <div class="thumbnail-image"><img src="../img/temp--Morimoto XB35 AMP Ballast 4.jpg" class="img-responsive" alt="" border="none"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-5">
                    <ul class="list-group">
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Bi-Xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item"><p class="small"><span class="lead text-gray2">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item"><p class="small"><span class="lead text-gray2">H1 HID Bulbs:</span> 2 x H1: XB 4500K <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Shroud Style:</span> 2 x Mini Gatling Gun <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item"><p class="small"><span class="lead text-gray2">Wire Harness:</span> 1 x HD Relay <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">LED Halos:</span> 2 x 70mm XSB Switchback <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item"><p class="small"><span class="lead text-gray2">Headlight Sealant:</span> 1 x Gray: RetroRubber <span class="lead text-secondary pull-right">$0.00</span></p></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 cta">
                    <div class="panel panel-empty">
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-5">
                                            <p><span class="lead">Item Price:</span> <span class="retail text-muted">$439.99</span></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="section wrap">
                                                <p><span class="lead">Order QTY:</span></p>
                                            </div>
                                            <div class="section wrap">
                                                <div class="input-group spinner">
                                                    <div class="input-group-btn">
                                                        <div class="btn btn-sm btn-default subtract" type="button">-</div>
                                                    </div>
                                                    <input type="text" class="form-control btn-sm" value="1">
                                                    <div class="input-group-btn">
                                                        <div class="btn btn-sm btn-default add" type="button">+</div>
                                                    </div>
                                                </div>
                                                <span class="btn btn-empty btn-xs edit">// Update</span><span class="btn btn-empty btn-xs edit text-gray1">// Remove</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="section wrap"><hr class="aligncenter first"></div>
                                            <div class="section wrap">
                                                <h5 class="text-gray1">Sub-Total: <span class="retail text-primary pull-right">$439.99</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="section cart-product">
            <div class="container-fluid">
                <div class="col-xs-12">
                    <h3>BI-XENON Long Title MORIMOTO MINI STAGE III (D2S) Kit</h3>
                    <hr class="aligncenter first">
                    <ul class="messages"><li class="error-msg"><ul><li><span>OUT OF STOCK! 2x Morimoto XB35 (35w) are current sold out. More are expected in stock by 12-12-16 </span></li></ul></li></ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-2 col-lg-3">
                    <ul class="row productGrid">
                        <li class="thumbnail">
                            <a href="productdetail.php" class="thumb-top">
                                <div class="thumbnail-image"><img src="../img/temp--Morimoto XB35 AMP Ballast 6.jpg" class="img-responsive" alt="" border="none"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-6 col-lg-5">
                    <ul class="list-group">
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <!-- <li class="list-group-item"><p class="small"><span class="lead text-gray2">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item active"><p class="small"><span class="lead text-gray2">H1 HID Bulbs:</span> 2 x H1: XB 4500K <span class="lead text-secondary pull-right">$0.00</span></p></li>
                        <li class="list-group-item"><p class="small"><span class="lead text-gray2">Wire Harness:</span> 1 x HD Relay <span class="lead text-secondary pull-right">$0.00</span></p></li> -->
                    </ul>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 cta">
                    <div class="panel panel-empty">
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-sm-5">
                                            <p><span class="lead">Item Price:</span> <span class="retail text-muted">$15.00</span></p>
                                        </div>
                                        <div class="col-xs-12 col-sm-7">
                                            <div class="section wrap">
                                                <p><span class="lead">Order QTY:</span></p>
                                            </div>
                                            <div class="section wrap">
                                                <div class="input-group spinner">
                                                    <div class="input-group-btn">
                                                        <div class="btn btn-sm btn-default subtract" type="button">-</div>
                                                    </div>
                                                    <input type="text" class="form-control btn-sm" value="2">
                                                    <div class="input-group-btn">
                                                        <div class="btn btn-sm btn-default add" type="button">+</div>
                                                    </div>
                                                </div>
                                                <span class="btn btn-empty btn-xs edit">// Update</span><span class="btn btn-empty btn-xs edit text-gray1">// Remove</span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="section wrap"><hr class="aligncenter first"></div>
                                            <div class="section wrap">
                                                <h5 class="text-gray1">Sub-Total: <span class="retail text-primary pull-right">$879.98</span></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


        <div class="section title gray3 subtotal">
            <div class="container-fluid">
                <div class="col-xs-12">
                    <h3 class="text-right text-secondary">Sub-Total: <span class="text-primary">$1,319.97</span></h3>
                    <div class="section wrap notice-affirm">
                        <p class="text-right text-gray3">Starting at <span class="text-affirm">$X.XX/month</span> with <span class="btn btn-empty"><span class="icon icon-affirmFull"></span></span></p> 
                    </div>
                    <div class="section wrap"><div class="col-xs-12 col-sm-6 col-md-4 pull-right"><div class="row"><hr class="aligncenter first"></div></div></div>
                    <div class="section wrap"><h6 class="pull-right text-gray1">*We offer free standard shipping on orders over $100. <span class="text-white">You're only <span class="text-primary">$26</span> away!</span></h6></div>
                    <div class="section wrap"><p class="note pull-right"><span class="lead"><em>*For a shipping quote please fill out address</em></span></p></div>
                </div>
            </div>    
        </div>

        <div class="section bg-primary">
            <div class="container">
                <div class="col-xs-12 text-center">
                    <div class="btn btn-empty btn-hexicon"><span class="icon icon-cartQuick"></span></div>
                    
                    <h2 class="text-gray4">Secure Checkout:</h2>
                </div>
            </div>    
        </div>

        <div class="section wrap hexDownEdge hexDownEdge-primary"></div>


        <div class="section wrap checkout">
            <div class="section checkoutmethod">
                <div class="container">
                    <div class="col-xs-12">
                        <!-- <div class="section last">
                            <h3>Checkout Method</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div type="button" class="btn btn-block btn-dark guest">Cont<span class="hidden-sm">inue</span> as Guest</div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div data-toggle="modal" data-target="#login" type="button" class="btn btn-block btn-default">Register</div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div data-toggle="modal" data-target="#login" type="button" class="btn btn-block btn-primary">Log In</div>
                                </div>
                            </div>
                        </div>
                        <div class="section halftop">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <div type="button" class="btn btn-block btn-default amazon"><span class="icon icon-amazon icon-before"></span>Amazon <i class="text-weightRegular small">Pay</i></div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div type="button" class="btn btn-block btn-default paypal"><span class="icon icon-paypal icon-before"></span>PayPal <i class="hidden-sm text-weightRegular small">Checkout</i></div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div type="button" class="btn btn-block btn-default affirm"><span class="icon icon-affirm icon-before"></span>Affirm <i class="text-weightRegular small">Monthly Pay<span class="hidden-sm">ments</span></i></div>
                                </div>
                            </div>
                        </div> -->
                        <div class="section last">
                            <h3>Checkout Method</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-5 col-md-6 col-lg-5">
                                    <p><span class="lead text-primary">Credit Card:</span></p>
                                    <div class="btn-group" role="group" aria-label="...">
                                        <div type="button" class="btn btn-default">Log In</div>
                                        <div type="button" class="btn btn-default">Register</div>
                                        <div type="button" class="btn btn-default guest"><span class="hidden-xs hidden-sm">Continue as </span>Guest</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-7 expresscheckout">
                                    <p><span class="lead text-primary">Express Options:</span></p>
                                    <div class="btn-group" role="group" aria-label="...">
                                        <div type="button" class="btn btn-default amazon"><span class="icon icon-amazon icon-before"></span><span class="hidden-xs">Amazon <i class="hidden-xs hidden-sm hidden-md text-weightRegular small">Pay</i></span></div>
                                        <div type="button" class="btn btn-default paypal"><span class="icon icon-paypal icon-before"></span><span class="hidden-xs">PayPal <i class="hidden-xs hidden-sm hidden-md text-weightRegular small">Checkout</i></span></div>
                                        <div type="button" class="btn btn-default affirm"><span class="icon icon-affirm icon-before"></span><span class="hidden-xs">Affirm <i class="hidden-xs hidden-sm hidden-md text-weightRegular small">Monthly Pay</i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="section wrap">
                <div class="flex-row">
                    <div class="col-xs-12 col-sm-6 section gray1 billingaddress nocheckoutmethod">
                        <div class="container-fluid disabled">
                        <div class="col-xs-12">
                            <h3>Billing Address</h3>
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="" placeholder="option2">
                                                    <p class="small"><span class="text-uppercase">Select an entry from your Address Book</span></p>
                                                    <div class="reveal-if-active">
                                                        <div class="form-group">
                                                            <div class="col-xs-12">
                                                                <select class="form-control drop" id="select">
                                                                    <option value="">DEFAULT BILLING ADDRESS: Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                    <option value="#">Matt Kossoff 8385 Allegiance Rd. Unit E Columbus, OH, 43235 United States 4406668214</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="" placeholder="option3">
                                                    <p class="small"><span class="text-uppercase">Bill to a different address</span></p>
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
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 1">
                                                            </div>
                                                            <div class="col-sm-6">
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
                                                                <select class="form-control drop" id="select">
                                                                    <option value="">Country</option>
                                                                    <option value="#">#</option>
                                                                    <option value="#">#</option>
                                                                    <option value="#">#</option>
                                                                    <option value="#">#</option>
                                                                    <option value="#">#</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputDefault" placeholder="Postal Code">
                                                            </div>
                                                        </div>
                                                        <hr class="aligncenter">
                                                        <div class="form-group">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputDefault" placeholder="Email Address">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputDefault" placeholder="Confirm Email Address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" id="inputDefault" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"><p class="small">Save to My Address Book</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="small">*Your shipment may be delayed if you do not provide an accurate billing address.</p>
                                    <hr class="aligncenter">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                            <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Continue</div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>            
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 section gray2 shippingaddress">
                        <div class="container-fluid disabled">
                        <div class="col-xs-12">
                            <h3>Shipping Address</h3>
                                <form class="form-horizontal">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="" placeholder="option1" checked="">
                                                        <p class="small"><span class="text-uppercase">Same as Billing Address</span></p>
                                                        <div class="reveal-if-active"><!-- Needs to be here to keep spacing consistent --></div>
                                                    </label>
                                                </div>
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
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputDefault" placeholder="Street Address 1">
                                                                </div>
                                                                <div class="col-sm-6">
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
                                                                    <select class="form-control drop validate-select" id="select">
                                                                        <option value="">Country</option>
                                                                        <option value="#">#</option>
                                                                        <option value="#">#</option>
                                                                        <option value="#">#</option>
                                                                        <option value="#">#</option>
                                                                        <option value="#">#</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputDefault" placeholder="Postal Code">
                                                                </div>
                                                            </div>
                                                            <hr class="aligncenter">
                                                            <div class="form-group">
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputDefault" placeholder="Email Address">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputDefault" placeholder="Confirm Email Address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-6">
                                                                    <input type="text" class="form-control" id="inputDefault" placeholder="Phone">
                                                                </div>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox"><span class="small">Save to My Address Book</span>
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
                                                <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                                <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Continue</div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                        </div>  
                        </div>          
                    </div>
                </div>
            </div>

            <div class="section wrap">
                <div class="flex-row">

                    <div class="col-xs-12 col-sm-6 section gray3 shippingmethod">
                        <div class="container-fluid disabled">
                        <div class="col-xs-12">
                            <h3>Shipping Method</h3>
                                <form class="form-horizontal">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <p class="small"><span class="text-uppercase">Select a Shipping Method</span></p>
                                                <select class="form-control drop" id="select">
                                                    <option value="">Flat Rate ... $5.00</option>
                                                    <option value="">USPS ... First Class Mail - Package – 1-3 business days ... $24.63</option>
                                                    <option value="">USPS ... Priority Mail - Package – 1-3 business days ... $5.35</option>
                                                    <option value="">UPS ... Ground ... $6.79</option>
                                                    <option value="">UPS ... 3 Day Select ... $10.22</option>
                                                    <option value="">UPS ... Next Day Air Saver ... $40.16</option>
                                                    <option value="">UPS ... Next Day Air ... $44.02</option>
                                                </select>
                                                <h6 class="pull-right text-white"><em>> Ships <span class="text-primary">tomorrow</span>, from Atlanta</em></h6>
                                            </div>
                                        </div>
                                            
                                        <hr class="aligncenter">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                                <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Continue</div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>            
                        </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 section gray4 billingmethod nocheckoutmethod">
                        <div class="container-fluid disabled">
                        <div class="col-xs-12">
                            <h3>Billing Method</h3>
                            <form class="form-horizontal">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked>
                                                    <p class="small"><span class="text-uppercase">Store Credit</span></p>
                                                    <ul class="messages"><li class="notice-msg"><ul><li><span>$100 Available</a></span></li></ul></li></ul>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="" placeholder="option1" checked="">
                                                    <p class="small"><span class="text-uppercase">Credit Card</span></p>
                                                    <div class="reveal-if-active">
                                                        
                                                        <div id="payment_form_gene_braintree_creditcard" style="" class="form-list">
                                                            <div id="credit-card-form" class="form-groupWrap">
                                                                <div class="credit-card-loading hidden">
                                                                    <div class="col-xs-12 pagination-loader">
                                                                        <div class="panel panel-empty text-center">
                                                                            <div class="btn btn-empty btn-hexicon">
                                                                                <span class="icon icon-loaderPie"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-list braintree-hostedfield">
                                                                    <div class="form-group">
                                                                        <div class="col-xs-2">
                                                                            <div class="card-type"><img src="../../2016/img/icon-creditcard-amex.svg" id="card-type-image" class="img-responsive"></div>
                                                                        </div>
                                                                        <div class="input-box card-number col-xs-10">
                                                                            <div id="card-number" class="form-control"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="input-box col-xs-4">
                                                                            <div class="v-fix">
                                                                                <div id="expiration-month" class="braintree-input-field braintree-expiration form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4">
                                                                            <div class="v-fix">
                                                                                <div id="expiration-year" class="braintree-input-field braintree-expiration form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-4 input-box">
                                                                            <div class="v-fix">
                                                                                <div id="cvv" class="braintree-input-field braintree-cvv form-control">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="braintree-avs-postal-code" style="display: none;">
                                                                        <label for="postal-code">Postal Code</label>
                                                                        <div id="postal-code" class="braintree-input-field braintree-postal-code"></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div id="braintree-hosted-submit">
                                                                <!-- Fields for the payment method -->
                                                                <input type="text" name="payment[payment_method_nonce]" value="" id="creditcard-payment-nonce" class="validate-fire-hosted" autocomplete="off">
                                                            </div>
                                                            <input type="hidden" name="payment[submit_after_payment]" value="1" id="braintree-submit-after-payment">
                                                        </div>

                                                    </div>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="" placeholder="option2">
                                                    <p class="small"><span class="text-uppercase">PayPal</span></p>
                                                    <div class="reveal-if-active">
                                                    <!-- PayPal Logo -->
                                                    <table border="0" cellpadding="10" cellspacing="0" align="left" style="margin-right:10px;"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" border="0" alt="Now accepting PayPal"></a></td></tr></table>
                                                    <!-- PayPal Logo -->
                                                    <p class="small">*You will be redirected to the PayPal website.</p>
                                                    </div>    
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="aligncenter">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                            <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Continue</div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>            
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="section gray1 orderextras">
                <div class="container-fluid disabled">

                    <div class="col-xs-12 col-sm-6 orderextras">
                        <h3>But Wait, There’s More</h3>
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-10 col-md-8">
                                        <p class="small"><span class="text-uppercase">Do you have a Promotional Code?</span></p>                                
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="inputDefault" placeholder="Enter Promo Code">
                                            <span class="input-group-btn">
                                                <a class="btn btn-default" type="button"> Apply</a>
                                            </span>
                                        </div>
                                        <ul class="messages"><li class="success-msg"><ul><li><span>SUCCESS! 10% off Coupon Code Accepted.</span></li></ul></li></ul>
                                    </div>
                                </div>
                            </fieldset>
                        </form>            
                    </div>

                    <div class="section first">
                        <div class="col-xs-12">
                            <hr class="aligncenter">
                            <div class="form-group">
                                <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                <!-- <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowR-666 icon-after"></span> Continue</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section first double ordersummary">
            <div class="section wrap title">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="row">
                        <div class="section title inner half">
                            <h2 class="text-center text-gray4">Order Summary</h2>
                            <h4 class="text-center">Lorem Ipsum</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section first">
                <div class="container">
                    <div class="col-xs-12">

                        <div class="row">
                            <div class="section wrap">
                                <div class="col-xs-12 col-sm-6 pull-right">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Subtotal: <span class="pull-right">$399.99</span></h4>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Promo Code: <span class="pull-right">-$39.99</span></h4>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Shipping &amp; Handling: <span class="pull-right">$24.04</span></h4>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <h4>Sales Tax: <span class="pull-right">$16.38</span></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <hr>
                                        <h3 class="text-primary">Total: <span class="pull-right">$840.40</span></h3>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section wrap">
                                <div class="col-xs-12"><hr></div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <div type="button" class="btn btn-default back"><span class="icon icon-arrowL-999 icon-before"></span> Back</div>
                                        <h6 class=""><a href="#">&lt; Forgot an Item? Continue Shopping</a></h6>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 pull-right">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <div type="button" class="btn btn-lg btn-block btn-primary active"><span class="icon icon-securecheckout icon-before"></span>Confirm Order<span class="icon icon-loaderPie"></span></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6 note">
                                    <div class="row">
                                    <div class="col-xs-12">
                                        <p class="text-right">*Please double check the details of your order before submitting. Once it is processed, we can not change or cancel it.</p>
                                    </div>
                                    </div>
                                </div>
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
    
    <!-- For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning you must initialize them yourself. -->
    <script type="text/javascript">
        $('.btn').popover('hide');
        $('.btn').tooltip('hide');

        $(document).ready(function(){
            $('.btn').popover();
            $('.btn').on('click', function (e) {
                $('.btn').not(this).popover('hide');
            });
        });
    </script>   
    

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

    <!-- CHECKOUT BLOCK x BLOCK SCRIPT -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        } 
        $( ".section.checkoutmethod .btn.guest" ).click(function() {
            $(".section.checkoutmethod .container-fluid").toggleClass( "disabled",true );
            $(".section.billingaddress .container-fluid").toggleClass( "disabled",false );
        });
        $( ".section.billingaddress .btn.continue" ).click(function() {
            $(".section.billingaddress .container-fluid").toggleClass( "disabled",true );
            $(".section.shippingaddress .container-fluid").toggleClass( "disabled",false );
        });
        $( ".section.shippingaddress .btn.continue" ).click(function() {
            $(".section.shippingaddress .container-fluid").toggleClass( "disabled",true );
            $(".section.shippingmethod .container-fluid").toggleClass( "disabled",false );
        });
        $( ".section.shippingmethod .btn.continue" ).click(function() {
            $(".section.shippingmethod .container-fluid").toggleClass( "disabled",true );
            $(".section.billingmethod .container-fluid").toggleClass( "disabled",false );
        });
        $( ".section.billingmethod .btn.continue" ).click(function() {
            $(".section.billingmethod .container-fluid").toggleClass( "disabled",true );
            $(".section.orderextras .container-fluid").toggleClass( "disabled",false );
        });

        $( ".section.billingaddress .btn.back" ).click(function() {
            $(".section.checkoutmethod .container-fluid").toggleClass( "disabled",false );
            $(".section.billingaddress .container-fluid").toggleClass( "disabled",true );
        });
        $( ".section.shippingaddress .btn.back" ).click(function() {
            $(".section.billingaddress .container-fluid").toggleClass( "disabled",false );
            $(".section.shippingaddress .container-fluid").toggleClass( "disabled",true );
        });
        $( ".section.shippingmethod .btn.back" ).click(function() {
            $(".section.shippingaddress .container-fluid").toggleClass( "disabled",false );
            $(".section.shippingmethod .container-fluid").toggleClass( "disabled",true );
        });
        $( ".section.billingmethod .btn.back" ).click(function() {
            $(".section.shippingmethod .container-fluid").toggleClass( "disabled",false );
            $(".section.billingmethod .container-fluid").toggleClass( "disabled",true );
        });
        $( ".section.orderextras .btn.back" ).click(function() {
            $(".section.shippingmethod .container-fluid").toggleClass( "disabled",false );
            $(".section.orderextras .container-fluid").toggleClass( "disabled",true );
        });
    </script>
  

    <!-- End Document
    ================================================== -->

</body>
</html>