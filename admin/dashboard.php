<?php
 $page = 'Dashboard';
 include ('header.php');
 ?>
    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Dashboard</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">    
                            <!-- DATA WIDGET -->
                            <div class="data_summary-wrap">
                                <div class="dashWidget-wrap clearfix">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <a href="clients.php">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-users"></i></div>
                                            <h3 class="widget-lbl">My Clients</h3>
                                            <div class="stats-count numbers"><p><?php echo $countNum; ?></p></div>
                                            <p>View your clients</p>
                                        </div>                                    
                                        </a>
                                        <div class="clearfix"></div>                                
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <a href="clients-measurement.php">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-address-card-o"></i></div>
                                            <h3 class="widget-lbl">Measurements</h3>
                                            <div class="stats-count numbers"><p><?php echo $countMNum; ?></p></div>
                                            <p>View, Add &amp; Delete Measurements</p>
                                        </div>                                    
                                        </a>
                                        <div class="clearfix"></div>                                
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <a href="wardrobe-monitor.php">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-database"></i></div>
                                            <h3 class="widget-lbl">Wardrobe</h3>                                            
                                            <div class="stats-count numbers"><p><?php echo $wardNum; ?></p></div>
                                            <p>Add, Edit &amp; Delete from Wardrobe</p>
                                        </div>                                    
                                        </a>
                                        <div class="clearfix"></div>                                
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <a href="event-reminder.php">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-calendar"></i></div>
                                            <h3 class="widget-lbl">Event Reminder</h3>
                                            <div class="stats-count numbers"><p>2</p></div>
                                            <p>View upcoming events of clients</p>
                                        </div>                                    
                                        </a>
                                        <div class="clearfix"></div>  
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-share"></i></div>
                                            <h3 class="widget-lbl">Total Inflow</h3>                                            
                                            <span class="inflow_count numbers fw-6 f-s-14">&#8358; <?php echo $amtSum; ?></span>
                                        </div>
                                        <div class="clearfix"></div>                                
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 animated slideInUp">
                                        <div class="widget widget-stats">
                                            <div class="widget_icon"><i class="fa fa-money"></i></div>
                                            <h3 class="widget-lbl">Total Outstanding</h3>
                                            <span class="inflow_count numbers fw-6 f-s-14 txt-red">&#8358; <?php echo $outstandSum; ?></span>
                                        </div>
                                        <div class="clearfix"></div>                                
                                    </div>
                                </div>
                                <div class="dashWidget-wrap clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 animated slideInUp">
                                        <div class="section-grid panel_cad">
                                            <div id="activity_summary">
                                                <h4 class="title-tag fw-5">Recent Activities</h4>
                                                <div id="widget_disp" class="dashboard-widget-list disp-none">
                                                    <div class="dashboard-msg-txt">
                                                        <p><i class="fa fa-check"></i> Your listing <a href="listings.php" class="anchor-red"> 4 Bedroom House for Sale</a> has been Booked! </p> 	
                                                    </div>
                                                    <span class="dashboard-close cancelBtn"><i class="fa fa-times"></i></span>
                                                </div>
                                                <div class="dashboard-widget-list">
                                                    <div class="dashboard-msg-txt text-center">
                                                        <p>No Recent Activity</p> 	
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
            </div>
<?php include ('footer.php');?>