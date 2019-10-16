<?php
 $page = 'Wardrobe';
 include ('header.php');
 ?>

        <?php
            $sql = "SELECT c.client_name, c.client_phone, w.* FROM client c, wardrobe w WHERE c.client_id = w.client_id ORDER BY w.received_date DESC";
            $result = mysqli_query($conn, $sql);
            $num_of_results = mysqli_num_rows($result);
        ?> 
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-6 col-md-6 col-sm-10 col-xs-10 dashboard-title">
                                    <h4 class="m-right-10">Wardrobe Monitor</h4>
                                </li>
                                <!-- <li class="col-lg-6 col-md-6 col-sm-2 col-xs-2 dashboard-title">
                                    <p class="flow-right m-tp-15 m-right-10"><img src="../images/icons/red_blink.gif" alt="signal" width="18" height="18" data-toggle="tooltip" data-placement="left" title="Wardrobe Signal" id="deliverySignal"></p>
                                </li> -->
                            </ul>
                        </div>
                        <div class="linkWrapper clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-right">
                                    <a href="add-package.php" class="btn-view f-s-13" id="clientPackage-btn">Add To Wardrobe</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                    <form action="" method="post" id="clientsList_form" enctype="multipart/form-data">                                            
                                        <div class="formWrapper pad-0">                                        
                                            <div class="panel_heading"><i class="fa fa-database fa-ico"></i> Wardrobe List <span class="flow-right bg-white text-capitalize m-left-15 f-s-12" style="padding:2px 5px;"><?php echo $num_of_results; ?> Records</span></div>
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
                                                                    <th class="db-th" scope="thcol">Received Date</th>
                                                                    <th class="db-th" scope="thcol">Client ID</th>
                                                                    <th class="db-th" scope="thcol">Client Name</th>
                                                                    <th class="db-th" scope="thcol">Outfit Type</th>
                                                                    <th class="db-th" scope="thcol">Amount</th>
                                                                    <th class="db-th" scope="thcol">Delivery Date</th>
                                                                    <th class="db-th" scope="thcol">Balance</th>
                                                                    <th class="db-th" scope="thcol">Delivery Status</th>
                                                                    <th class="db-th text-center" scope="thcol">Action</th>
                                                                </tr>                                            
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $counter = 0;
                                                                    if(mysqli_num_rows($result) > 0){
                                                                    while($row = mysqli_fetch_assoc($result)){
                                                                        $id = $row['id'];
                                                                        $receivedate = date_create($row['received_date']);
                                                                        $receivedDate = date_format($receivedate, 'd-M-Y');
                                                                        $clientID = $row['client_id'];
                                                                        $clientName = $row['client_name'];
                                                                        $outfitType = $row['outfit_type'];
                                                                        $amount = $row['amount'];
                                                                        $amountBal = ($row['amount']) - ($row['amount_paid']);
                                                                        // $deliveryDate = $row['delivery_date'];
                                                                        $deliverdate = date_create($row['delivery_date']);
                                                                        $deliveryDate = date_format($deliverdate, 'd-M-Y');
                                                                        $deliveryStatus = $row['delivery_status'];
                                                                ?>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N"><?php echo ++$counter; ?></td>
                                                                    <td class="dt-rDate" data-label="Received Date"><?php echo $receivedDate; ?></td>
                                                                    <td class="dt-pID" data-label="Client ID"><?php echo $clientID; ?></td>
                                                                    <td class="dt-name" data-label="Client Name"><?php echo $clientName; ?></td>
                                                                    <td class="dt-type" data-label="Outfit Type"><?php echo $outfitType; ?></td>
                                                                    <td class="dt-Amt numbers" data-label="Amount">&#8358; <?php echo $amount; ?></td>
                                                                    <td class="dt-dDate" data-label="Delivery Date"><?php echo $deliveryDate; ?></td>
                                                                    <td class="dt-Bal numbers txt-red" data-label="Balance">&#8358; <?php echo $amountBal; ?></td>
                                                                    <td class="dt-status" data-label="Delivery Status"><?php if($deliveryStatus==0){echo $pending;} else {echo $success;} ?></td>
                                                                    <td class="dt-action text-right" data-label="Action">
                                                                        <a href="wardrobe.php?package-id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-laptop fa_ico txt-black"></i></a>
                                                                        <!-- <a href="edit-package.php" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil fa_ico txt-black"></i></a> -->
                                                                        <a href="wardrobe-monitor.php?w_d=<?php echo $id;?>" onclick="return overlayconfirm();" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash fa_ico txt-red"></i></a>
                                                                    </td>
                                                                </tr>
                                                                <?php   
                                                                  }  
                                                                }
                                                                else{
                                                                    ?>
                                                                    <tr class="read_data">
                                                                        <td colspan="100%" class="dt_report text-center">Wardrobe is Empty!</td>
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
<?php include ('footer.php');?>