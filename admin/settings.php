<?php
 $page = 'Settings';
 include ('header.php');
 ?>
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Settings</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">    
                            <!-- DATA WIDGET -->
                            <div class="data_summary-wrap">
                                <div class="dashWidget-wrap clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <a href="users-list.php">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-user"></i></div>
                                            <h3 class="widget-lbl">Add Member</h3>
                                            <div class="stats-count numbers"><p><?php echo $userCount; ?></p></div>
                                            <p>View members</p>
                                        </div>                                    
                                        </a>
                                        <div class="clearfix"></div>                                
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>
<?php include ('footer.php');?>