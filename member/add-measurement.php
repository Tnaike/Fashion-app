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
<title>Add Client Measurement - clientbaze</title>
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
                        <li class=""><a href="clients.php"><i class="fa fa-users"></i>My Clients</a></li>
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
                                    <span class="disp-inblock f-s-18 fw-6 pad-10">Add Measurement</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section linBod inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="add-measurement.php" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div class="measurement_dataWrap">
                                            <div class="measurement-datas">
                                                <div class="floatPos blocPos m-bt-30">                                                    
                                                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 text-center">
                                                        <div class="form-group">
                                                            <label class="control-label txt-red font-bold">Client ID</label>
                                                            <!-- <input type="text" name="clientID" id="clientID" class="form-control text-center text-uppercase required" data-toggle="tooltip" title="Enter client ID"> -->
                                                            <?php
                                                                $sql="Select client_id, client_name from client ORDER BY created_date DESC";
                                                                $q=mysqli_query($conn, $sql);
                                                                echo "<select name=\"clientID\" class=\"form-control text-center text-uppercase required\">"; 
                                                                echo "<option></option>";
                                                                while($row = mysqli_fetch_array($q)) 
                                                                {
                                                                    $clientID = $row['client_id'];
                                                                    $clientName = $row['client_name'];
                                                                    echo "<option value='".$clientID."'>".$clientName. ' - ' .$clientID."</option>"; 
                                                                }
                                                                echo "</select>";
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m-bt-20 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center l-space-2 f-s-14 font-bold">Top</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Shoulder</label>
                                                                <input type="number" name="measureShoulder" id="measureShoulder" maxlength="5" class="form-control" data-toggle="tooltip" title="Shoulder" value="0">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Chest</label>
                                                                <input type="number" name="measureChest" id="measureChest" maxlength="5" class="form-control" data-toggle="tooltip" title="Chest" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short L</label>
                                                                <input type="number" name="measureShortL" id="measureShortL" maxlength="5" class="form-control" data-toggle="tooltip" title="Short Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short SL</label>
                                                                <input type="number" name="measureShortSleeveL" id="measureShortSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Short Sleeve Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Long L</label>
                                                                <input type="number" name="measureLongL" id="measureLongL" maxlength="5" class="form-control" data-toggle="tooltip" title="Long Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Long SL</label>
                                                                <input type="number" name="measureLongSleeveL" id="measureLongSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Long Sleeve Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Agbada L</label>
                                                                <input type="number" name="measureAgbadaL" id="measureAgbadaL" maxlength="5" class="form-control" data-toggle="tooltip" title="Agbada Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Agbada SL</label>
                                                                <input type="number" name="measureAgbadaSleeveL" id="measureAgbadaSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Agbada Sleeve Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Sleeves Round</label>
                                                                <input type="number" name="measureSleeveRound" id="measureSleeveRound" maxlength="5" class="form-control" data-toggle="tooltip" title="Sleeves Round" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Neck</label>
                                                                <input type="number" name="measureNeck" id="measureNeck" maxlength="5" class="form-control" data-toggle="tooltip" title="Neck" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Cap</label>
                                                                <input type="number" name="measureCap" id="measureCap" maxlength="5" class="form-control" data-toggle="tooltip" title="Cap" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Sleeves Choice</label>
                                                                <select name="measureSleeveChoice" id="measureSleeveChoice" class="form-control">
                                                                    <option value="Any">Any</option>
                                                                    <option value="Long Sleeves">Long Sleeves</option>
                                                                    <option value="Short Sleeves">Short Sleeves</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center l-space-2 f-s-14 font-bold">Trouser</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Length</label>
                                                                <input type="number" name="measureTLength" id="measureTLength" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Full Length" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short</label>
                                                                <input type="number" name="measureTShort" id="measureTShort" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Short" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Waist</label>
                                                                <input type="number" name="measureTWaist" id="measureTWaist" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Waist" value="0">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Thigh</label>
                                                                <input type="number" name="measureTThigh" id="measureTThigh" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Thigh" value="0">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Flap</label>
                                                                <input type="number" name="measureTFlap" id="measureTFlap" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Flap" value="0">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Knee</label>
                                                                <input type="number" name="measureTKnee" id="measureTKnee" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Knee" value="0">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Caf</label>
                                                                <input type="number" name="measureTCaf" id="measureTCaf" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Caf" value="0">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Bottom</label>
                                                                <input type="number" name="measureTBottom" id="measureTBottom" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Bottom" value="0">
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                    <div class="form-group">
                                                        <!-- <button type="submit" name="addMeasurement" class="btn btn-danger" id="addMeasurement">Add</button> -->
                                                        <input type="submit" name="addMeasurement" class="btn btn-danger" id="addMeasurement" value="Save">
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