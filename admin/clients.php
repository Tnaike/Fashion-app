<?php
 $page = 'Clients';
 include ('header.php');
 ?>

        <?php        
            $results_per_page = 50;

            $sql = "SELECT * FROM client ORDER BY created_date DESC";
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
                                    <h4 class="m-right-10">My Clients</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="linkWrapper clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-right">
                                    <a href="add-client.php" class="btn-view f-s-13" id="addClient-btn">Add Client</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                    <form action="" method="post" id="clientsList_form" enctype="multipart/form-data">                                            
                                        <div class="formWrapper pad-0">                                        
                                            <div class="panel_heading"><i class="fa fa-users fa-ico"></i> Clients List <span class="flow-right bg-white text-capitalize m-left-15 f-s-12" style="padding:2px 5px;"><?php echo $num_of_results; ?>  Records</span></div>
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
                                                                    <th class="db-th" scope="thcol">Created Date</th>
                                                                    <th class="db-th" scope="thcol">Client ID</th>
                                                                    <th class="db-th" scope="thcol">Client Name</th>
                                                                    <th class="db-th" scope="thcol">Phone</th>
                                                                    <th class="db-th" scope="thcol">Address</th>
                                                                    <th class="db-th" scope="thcol">Locality</th>
                                                                    <th class="db-th" scope="thcol">Status</th>
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
                                                                    $clientPhone = $row['client_phone'];
                                                                    $clientAddress = $row['address'];
                                                                    $clientLocality = $row['locality'];
                                                                    $category = 'Active';
                                                                ?>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N"><?php echo ++$counter; ?></td>
                                                                    <td class="dt-cDate" data-label="Created Date"><?php echo $createdDate; ?></td>
                                                                    <td class="dt-pID" data-label="Client ID"><?php echo $clientID; ?></td>
                                                                    <td class="dt-name" data-label="Client Name"><?php echo $clientName; ?></td>
                                                                    <td class="dt-phone" data-label="Phone"><?php echo $clientPhone; ?></td>
                                                                    <td class="dt-insDate" data-label="Address"><?php echo $clientAddress; ?></td>
                                                                    <td class="dt-locality" data-label="Locality"><?php echo $clientLocality; ?></td>
                                                                    <td class="dt-status" data-label="Status"><span class="active-symb"> <?php echo $category; ?></span></td>
                                                                    <td class="dt-action text-right" data-label="Action">
                                                                        <a href="client-profile.php?edit_id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-laptop fa_ico txt-black"></i></a>
                                                                        <a href="clients.php?del_id=<?php echo $id; ?>" class="btn__delete" onclick="return overlayconfirm();" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash fa_ico txt-red"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <?php   
                                                                  }  
                                                                }
                                                                else{
                                                                    ?>
                                                                    <tr class="read_data">
                                                                        <td colspan="100%" class="dt_report text-center">No Client Record found!</td>
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
                        </div> <!-- content-data-wrap --> 

                    </div>
                </div>
            </div>
            <!-- DELETE OVERLAY SECTION -->
            <!-- <div class="modalBackground" style="display:none;">
                <div class="pop_alertMgs text-center">
                    <h4 class="alert-title">Delete Message</h4>
                    <p>Are you sure you want to delete this data?</p>
                                
                    <div class="form-group text-center">
                        <a href="#" class="btn btn-primary font-xs bod-0" id="yes_btn">Yes</a>
                        <a href="" class="btn btn-danger font-xs bod-0 m-left-10">Cancel</a>
                    </div>
                </div>
            </div> -->
 <?php include ('footer.php');?>