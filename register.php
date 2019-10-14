<?php include ('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Register Client - clientbaze</title>
    <link rel="shortcut icon" href="images/icons/measuring-tape.png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=satisfy" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
</head>

<body>
    <div class="page-wrapper">
        <header class="header-section">
            <div class="top-line">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span class="top-info m-right-15 hidden-xs">
                                <i class="fa fa-phone m-right-5"></i><a href="tel:+2348023031668" class="txt-black"> +234 802 303 1668</a>
                            </span>
                            <span class="top-info hidden-xs">
                                <i class="fa fa-envelope m-right-5"></i><a href="mailto:support@clientbaze.ng" class="txt-black"> support@clientbaze.ng</a>
                            </span>
                        </div>
                        <div class="pull-right">
                            <ul class="top-social flow-left">
                                <li class="disp-inblock m-right-15"><a href="http://www.facebook.com" data-toggle="tooltip" data-placement="left" title="Like Us on Facebook" class="facebook txt-primary"><i class="fa fa-facebook"></i></a></li>
                                <li class="disp-inblock m-right-15"><a href="http://www.twitter.com" data-toggle="tooltip" data-placement="left" title="Follow Us on Twitter" class="twitter txt-primary"><i class="fa fa-twitter"></i></a></li>
                                <li class="disp-inblock m-right-15"><a href="http://www.instagram.com" data-toggle="tooltip" data-placement="left" title="Follow Us on Instagram" class="instagram txt-primary"><i class="fa fa-instagram"></i></a></li>
                                <li class="disp-inblock"><a href="http://www.youtube.com" data-toggle="tooltip" data-placement="left" title="Follow Us on Youtube" class="youtube txt-primary"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-section">
                <nav class="navbar" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                                aria-controls="navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.htm">
                                <!-- <img src="images/icons/measuring-tape.png" class="wp-logo" alt="clientbaze logo" /> -->
                                <span class="brand_name">clientbaze</span>
                            </a>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
                                <li class=""><a href="index.htm">Home</a></li>
                                <li class=""><a href="about-us.htm">About Us</a></li>
                                <li class=""><a href="wardrobe.htm">WardRobe</a></li>
                                <li class=""><a href="events.htm">Events</a></li>
                                <li class=""><a href="contact-us.htm">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section id="register_account" class="login-section">
            <div class="container">
                <div class="row">
                    <div class="pc_acc-container section-20">
                        <div class="col-md-12 col-sm-12">
                            <h3 class="titleTag">Register Client</h3>                            
                        </div>
                        <div class="accLog-wrap floatPos pad-20">
                        <?php include('errors.php'); ?>                            
                            <form action="" method="post" id="form__input" class="inputForm" enctype="multipart/form-data">
                                <div class="col-sm-12 col-xs-12 input-fields">
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Username </label>
                                        <input type="text" name="Username" class="input_value" placeholder="Username">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">First Name <sup>*</sup></label>
                                        <input type="text" name="firstName" class="input_value required" placeholder="First Name">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Last Name</label>
                                        <input type="text" name="lastName" class="input_value" placeholder="Last Name">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Email <sup>*</sup></label>
                                        <input type="email" name="userEmail" class="input_value email" placeholder="Email">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Phone Number <sup>*</sup></label>
                                        <input type="text" name="userPhone" class="input_value digits" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Password <sup>*</sup></label>
                                        <input type="password" name="password" class="input_value" placeholder="Password">
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="input_lbl">Verify Password <sup>*</sup></label>
                                        <input type="password" name="v_password" class="input_value" placeholder="Verify Password">
                                    </div>
                                    <div class="clearfix f-s-12 m-bt-10">
                                        <small>By creating an account you accept our <a href="" class="anchor-red">Terms of Use</a> and <a href="" class="anchor-red"> Privacy</a>. </small>
                                    </div>
                                    <div class="clearfix">
                                        <button type="submit" name="btnRegister" class="submit_btn btn_primary disp_block m-bt-10">Create Account</button>
                                    </div>                                    
                                    <div class="linkwrap clearfix">    
                                        <p class="text-center f-s-12">Already have an account? <a href="login.php" class="anchor-blue">Log In</a></p>
                                    </div>
                                  </div>
                            </form>
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <footer id="tb-footer" class="clearfix">
            <div class="tb-footerinfo text-center">                     
                <span class="tb-copyright">Copyright &copy; <?php echo date('Y') ?> clientbaze.ng All Rights Reserved. <span class="txt-lightsteel">Powered By <a href="#" class="txt-lightsteel">Tbaze</a></span></span>
            </div>
        </footer>
    </div>

    <!-- script -->
    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/activepage.js"></script>
</body>

</html>