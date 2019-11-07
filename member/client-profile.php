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
<title><?php echo $clientName; ?> - clientbaze</title>
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
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
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
                        <li class="active"><a href="clients.php"><i class="fa fa-users"></i>Clients</a></li>
                        <li class=""><a href="clients-measurement.php"><i class="fa fa-address-card-o"></i>Measurements</a></li>
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
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="clients.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10"><?php echo $clientName; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?>
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div id="clientProfile" class="profile_dataWrap">
                                            <div class="profile-datas">
                                                <div class="blocPos clearfix">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group tTag" data-toggle="tooltip" title="Client ID">
                                                            <p class="view__output"><?php echo $clientID; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 m-bt-20">
                                                        <div class="sample__view" style="background:url(../images/clients/<?php echo $clientPic; ?>); background-position:center; background-repeat:no-repeat;"></div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Client Name</label>
                                                            <p class="view__output"><?php echo $clientName; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Other Name</label>
                                                            <p class="view__output"><?php echo $otherName; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Email</label>
                                                            <p class="view__output"><?php echo $clientEmail; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Phone Number </label>
                                                            <p class="view__output"><?php echo $clientPhone; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Other Number </label>
                                                            <p class="view__output"><?php echo $clientOtherPhone; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Gender </label>
                                                            <p class="view__output"><?php echo $clientGender; ?></p>
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Address </label>
                                                            <p class="view__output"><?php echo $clientAddress; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Locality </label>
                                                            <p class="view__output"><?php echo $clientLocality; ?></p>
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">State </label>
                                                            <p class="view__output"><?php echo $clientState; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="formDivider"></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group wrap__lst">
                                                            <label class="lbl__tag text-uppercase f-s-11 fw-6">Company </label>
                                                            <p class="view__output"><?php echo $clientCompany; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="formDivider"></div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 <?php if($clientFacebook==""){echo 'disp-none';} ?>">
                                                        <p class="pad-5 f-s-13"><a href="<?php echo $clientFacebook; ?>" class="lbl__tag" data-toggle="tooltip" data-placement="bottom" title="<?php echo $clientFacebook; ?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 <?php if($clientTwitter==""){echo 'disp-none';} ?>">
                                                        <p class="pad-5 f-s-13"><a href="<?php echo $clientTwitter; ?>" class="lbl__tag" data-toggle="tooltip" data-placement="bottom" title="<?php echo $clientTwitter; ?>" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 <?php if($clientInstagram==""){echo 'disp-none';} ?>">
                                                        <p class="pad-5 f-s-13"><a href="<?php echo $clientInstagram; ?>" class="lbl__tag" data-toggle="tooltip" data-placement="bottom" title="<?php echo $clientInstagram; ?>" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></p>
                                                    </div>
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                        <div class="form-group">
                                                            <a href="client-profile.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
                                                        </div>
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
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/activepage.js"></script>

</body>
</html>