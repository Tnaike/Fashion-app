<?php
 $page = 'Event Reminder';
 include ('header.php');
 ?>
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Events Reminder</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="linkWrapper clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-right">
                                    <a href="add-event.php" class="btn-view f-s-13" id="clientMeasure-btn">Add Event</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                    <form action="" method="post" id="clientsList_form" enctype="multipart/form-data">                                            
                                        <div class="formWrapper pad-0">                                        
                                            <div class="panel_heading"><i class="fa fa-calendar fa-ico"></i> Events List</div>
                                            <div class="clientsList_dataWrap">
                                                <div class="clientsList_datas">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 blocPos clearfix">  
                                                        <div class="flow-left pad-5">
                                                            <label class="f-s-15 txt-black">Search: </label>
                                                        </div>  
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 pad-0">
                                                            <div class="form-group">
                                                                <input type="text" name="searchInput" id="searchInput" class="form-control" onkeyup="filterFunction()" placeholder="e.g. Name, Locality, Category">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="datas_box table-responsive mobi__table">
                                                        <table id="userListTable" class="table table-hover data_table">
                                                            <thead>
                                                                <tr class="db-tr t-th">
                                                                    <th class="db-th text-center" scope="thcol">S/N</th>
                                                                    <th class="db-th" scope="thcol">Client ID</th>
                                                                    <th class="db-th" scope="thcol">Client Name</th>
                                                                    <th class="db-th" scope="thcol">Phone</th>
                                                                    <th class="db-th" scope="thcol">Event Type</th>
                                                                    <th class="db-th" scope="thcol">Event Date</th>
                                                                    <th class="db-th" scope="thcol">Location</th>
                                                                    <th class="db-th text-center" scope="thcol">Action</th>
                                                                </tr>                                            
                                                            </thead>
                                                            <tbody>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N">1</td>
                                                                    <td class="dt-pID" data-label="Client ID">RC298001</td>
                                                                    <td class="dt-name" data-label="Client Name">Engr. Dotun</td>
                                                                    <td class="dt-phone" data-label="Phone">08023011001</td>
                                                                    <td class="dt-insDate" data-label="Event Type"><i class="fa fa-gift fa-ico"></i>Birthday</td>
                                                                    <td class="dt-cDate" data-label="Event Date">20/10/2018</td>
                                                                    <td class="dt-cDate" data-label="Location">Ikeja</td>
                                                                    <td class="dt-action text-center" data-label="Action">
                                                                        <a href="view-event.php" data-toggle="tooltip" data-placement="bottom" title="View" class="txt-blue hovered"> View</a>
                                                                    </td>
                                                                </tr>
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
<?php include ('footer.php');?>