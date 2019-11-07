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
<title>Measurements - clientbaze</title>
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

        <?php
            $sql = "SELECT c.client_name, c.client_phone, m.* FROM client c, measurement m WHERE c.client_id = m.client_id ORDER BY m.modified_date DESC";
            $result = mysqli_query($conn, $sql);
            $num_of_results = mysqli_num_rows($result);
        ?>    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Clients Measurements</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                    <form action="" method="post" id="clientsList_form" enctype="multipart/form-data">                                            
                                        <div class="formWrapper pad-0">                                        
                                            <div class="panel_heading"><i class="fa fa-address-card-o fa-ico"></i> Measurements List <span class="flow-right bg-white text-capitalize m-left-15 f-s-12" style="padding:2px 5px;"><?php echo $num_of_results; ?>  Records</span></div>
                                            <div class="clientsList_dataWrap">
                                                <div class="clientsList_datas">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 blocPos clearfix">  
                                                        <div class="flow-left pad-5">
                                                            <label class="f-s-15 txt-black">Search: </label>
                                                        </div>  
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 pad-0">
                                                            <div class="form-group">
                                                                <input type="text" name="searchInput" id="searchInput" class="form-control" onkeyup="filterFunction()" placeholder="e.g. Client ID, Name, Phone Number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="datas_box table-responsive mobi__table">
                                                        <table id="userListTable" class="table table-hover data_table">
                                                            <thead>
                                                                <tr class="db-tr t-th">
                                                                    <th class="db-th text-center" scope="thcol">S/N</th>
                                                                    <th class="db-th" scope="thcol">Created Date</th>
                                                                    <th class="db-th" scope="thcol">Client ID</th>
                                                                    <th class="db-th" scope="thcol">Client Name</th>
                                                                    <th class="db-th" scope="thcol">Sleeve Choice</th>
                                                                    <th class="db-th text-center" scope="thcol">Date Update</th>
                                                                    <th class="db-th text-center" scope="thcol">Action</th>
                                                                </tr>                                            
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $counter = 0;
                                                                    if(mysqli_num_rows($result) > 0){
                                                                    while($row = mysqli_fetch_assoc($result)){
                                                                        $id = $row['id'];
                                                                        $createdate = date_create($row['created_date']);
                                                                        $createdDate = date_format($createdate, 'd-M-Y');
                                                                        $clientID = $row['client_id'];
                                                                        $clientName = $row['client_name'];
                                                                        $measureSleeveChoice = $row['top_sleevesType'];
                                                                        $modifieddate = date_create($row['modified_date']);
                                                                        $modifyDate = date_format($modifieddate, 'd-M-Y');
                                                                ?>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N"><?php echo ++$counter; ?></td>
                                                                    <td class="dt-cDate" data-label="Created Date"><?php echo $createdDate; ?></td>
                                                                    <td class="dt-pID" data-label="Client ID"><?php echo $clientID; ?></td>
                                                                    <td class="dt-name" data-label="Client Name"><?php echo $clientName; ?></td>
                                                                    <td class="dt-insDate" data-label="Sleeve Choice"><?php echo $measureSleeveChoice; ?></td>
                                                                    <td class="dt-cDate text-center" data-label="Date Update"><?php if($modifyDate==''){echo '---';} else {echo $modifyDate;} ?></td>
                                                                    <td class="dt-action text-center" data-label="Action">
                                                                        <a href="view-measurement.php?client_id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-laptop fa_ico txt-black"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <?php   
                                                                  }  
                                                                }
                                                                else{
                                                                    ?>
                                                                    <tr class="read_data">
                                                                        <td colspan="100%" class="dt_report text-center">No Measurement Record found!</td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
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
    </div>
</div>

<!-- Script -->
<script type="text/javascript" src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/activepage.js"></script>

</body>
</html>