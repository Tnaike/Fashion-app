<?php
if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: ../404.php'));
        
    session_destroy();
}

include ('../config.php');

if(empty($_SESSION['userName'])){
    header('location: ../login.php');
}
if($_SESSION['user_status'] > 1){header('location: ../login.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1">
<title><?php echo $page ?> - clientbaze</title>
<link rel="shortcut icon" href="../images/icons/measuring-tape.png" />

<!--******************** CDN LINK ********************-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../font/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/animated.css"/>
<link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
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
                        <li <?php if($page == 'Dashboard'){echo 'class="active"';} ?>><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
                        <li <?php if($page == 'Clients'){echo 'class="active"';} ?>><a href="clients.php"><i class="fa fa-users"></i>My Clients</a></li>
                        <li <?php if($page == 'Measurement'){echo 'class="active"';} ?>><a href="clients-measurement.php"><i class="fa fa-address-card-o"></i>Measurements</a></li>
                        <li <?php if($page == 'Wardrobe'){echo 'class="active"';} ?>><a href="wardrobe-monitor.php"><i class="fa fa-database"></i>Wardrobe <span><?php echo $pendPackage; ?></span></a></li>
                        <li <?php if($page == 'Event Reminder'){echo 'class="active"';} ?>><a href="event-reminder.php"><i class="fa fa-calendar"></i>Event Reminder</a></li>
                        <li class="divider"></li>
                        <li <?php if($page == 'Change-Password'){echo 'class="active"';} ?>><a href="change-password.php"><i class="fa fa-lock fa-ico"></i> Change Password</a></li>
                        <li <?php if($page == 'Settings'){echo 'class="active"';} ?>><a href="settings.php"><i class="fa fa-cogs"></i> Settings</a></li>
                        <li class=""><a href="dashboard.php?logout='1'"><i class="fa fa-power-off"></i>Log Out</a></li>
                    </ul>
               
                </div>
            </div>
        </div>