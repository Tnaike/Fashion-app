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
<title>Change Password - clientbaze</title>
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
                       <li class=""><a href="clients-measurement.php"><i class="fa fa-address-card-o"></i>Measurements</a></li>
                       <li class="divider"></li>
                       <li class="active"><a href="change-password.php"><i class="fa fa-lock fa-ico"></i> Change Password</a></li>
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
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Change Password</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="change-password.php" method="post" id="form__input" enctype="multipart/form-data">                                                                             
                                        <div id="changePassword" class="formWrapper">                                        
                                            <div class="panel_heading">Change Password</div>
                                            <div class="userPWD_dataWrap">
                                                <div class="userPWD_datas">                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">New Password </label>
                                                            <input type="password" name="password" id="password" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Verify Password </label>
                                                            <input type="password" name="v_password" id="v_password" class="form-control">
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 m-tp-20 text-right">
                                            <div class="form-group">
                                                <input type="submit" name="updatePassword" class="btn btn-danger" id="updatePassword" value="Update Password">
                                                <a href="dashboard.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <footer class="footer__alt">
                    <span>Copyright &copy; <?php echo date('Y') ?> clientbaze.ng</span>
                    <ul class="footer-alt__nav">
                        <li><a href="dashboard.php?logout='1'">Home</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="../contact-us.php">Contact</a></li>
                    </ul>
                </footer>
            </div>
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