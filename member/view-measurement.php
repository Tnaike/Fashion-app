<?php
include ('../config.php');

if(empty($_SESSION['userName'])){
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1">
<title><?php echo $clientName; ?> Measurement - clientbaze</title>
<link rel="shortcut icon" href="../images/icons/measuring-tape.png" />

<!--******************** CDN LINK ********************-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../font/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/animated.css"/>
<link rel="stylesheet" type="text/css" media="all" href="../css/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="../css/custom.css">
</head>

<body id="admin-body">
<div id='overlay'></div>
<div class="admin-wrap">
	<div class="header">
        <nav class="navbar" role="navigation"> 
       		<div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="sidebar-toggle" data-toggle="collapse" id="sidebar-toggle">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>        
                    <a class="navbar-brand" href="#"><span class="brand_name">clientbaze</span></a>
                </div>
              
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
                    <ul id="menu-bar" class="nav navbar-nav navbar-right main_nav">
                        <li class="dropdown top-drop">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="username"><?php echo $_SESSION['strName']; ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu extended logout animated fadeIn">
                                <li><a href="change-password.php"><i class="fa fa-lock fa-ico"></i> Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="dashboard.php?logout='1'"><i class="fa fa-power-off fa-ico"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>           
                </div>
          	</div>     
        </nav>
    </div>
    
 	<div id="main-wrapper">
        <div class="dashboard-sidebar" id="dashboard-sidebar">
            <div class="dashboard-section">
                <div class="slimScroll">
                    <div class="board-user-type">
                        <h3 class="board-header"><?php echo $_SESSION['fullname']; ?></h3>
                        <span class="lastActive">Last Active: <span><?php echo $_SESSION['last_active']; ?></span></span>
                    </div>                    
                    <ul class="nav user-profile-menu">
                        <li class=""><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
                        <li class=""><a href="clients.php"><i class="fa fa-users"></i>Clients</a></li>
                        <li class="active"><a href="clients-measurement.php"><i class="fa fa-address-card-o"></i>Measurements</a></li>
                        <li class="divider"></li>
                        <li class=""><a href="change-password.php"><i class="fa fa-lock fa-ico"></i> Change Password</a></li>
                        <li class=""><a href="dashboard.php?logout='1'"><i class="fa fa-power-off"></i>Log Out</a></li>
                    </ul>
               
                </div>
            </div>
        </div>
    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-title text-center">
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="clients-measurement.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10"><?php echo $clientName; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section linBod inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?>
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div class="measurement_dataWrap">
                                            <div class="measurement-datas">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group tTag">
                                                        <p class="view__output"><?php echo $clientID; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m-bt-20 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center text-uppercase l-space-2 f-s-14 font-bold">Top</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Shoulder">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Shoulder</label>
                                                                <p class="view__output"><?php echo $measureShoulder; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Chest">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Chest</label>
                                                                <p class="view__output"><?php echo $measureChest; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Short Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short L</label>
                                                                <p class="view__output"><?php echo $measureShortL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Short Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short SL</label>
                                                                <p class="view__output"><?php echo $measureShortSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Long Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Long L</label>
                                                                <p class="view__output"><?php echo $measureLongL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Long Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Long SL</label>
                                                                <p class="view__output"><?php echo $measureLongSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Agbada Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Agbada L</label>
                                                                <p class="view__output"><?php echo $measureAgbadaL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Agbada Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Agbada SL</label>
                                                                <p class="view__output"><?php echo $measureAgbadaSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Sleeves Round">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Sleeves Round</label>
                                                                <p class="view__output"><?php echo $measureSleeveRound; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Neck">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Neck</label>
                                                                <p class="view__output"><?php echo $measureNeck; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Cap">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Cap</label>
                                                                <p class="view__output"><?php echo $measureCap; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Sleeves Choice">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Sleeves Choice</label>
                                                                <p class="view__output"><?php echo $measureSleeveChoice; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center text-uppercase l-space-2 f-s-14 font-bold">Trouser</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Full Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Length</label>
                                                                <p class="view__output"><?php echo $measureTLength; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Short">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short</label>
                                                                <p class="view__output"><?php echo $measureTShort; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Waist">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Waist</label>
                                                                <p class="view__output"><?php echo $measureTWaist; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Thigh">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Thigh</label>
                                                                <p class="view__output"><?php echo $measureTThigh; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Flap">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Flap</label>
                                                                <p class="view__output"><?php echo $measureTFlap; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Knee">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Knee</label>
                                                                <p class="view__output"><?php echo $measureTKnee; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Caf">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Caf</label>
                                                                <p class="view__output"><?php echo $measureTCaf; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Bottom">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Bottom</label>
                                                                <p class="view__output"><?php echo $measureTBottom; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-10 text-right">
                                                    <div class="form-group">
                                                        <a href="clients-measurement.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <footer class="footer__alt">
                <span>Copyright &copy; <?php echo date('Y') ?> clientbaze.ng</span>
                <ul class="footer-alt__nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="../contact-us.php">Contact</a></li>
                </ul>
            </footer>
        </div>
    </div>	<!-- /.main-wrapper -->
</div>

<!-- Script -->
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/activepage.js"></script>

</body>
</html>