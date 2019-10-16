<?php
 $page = 'Measurement';
 include ('header.php');
 ?>

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
                        <div class="linkWrapper clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-right">
                                    <a href="add-measurement.php" class="btn-view f-s-13" id="clientMeasure-btn">Add Client Measurement</a>
                                </div>
                            </div>
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
                                                                    <th class="db-th" scope="thcol">Phone</th>
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
                                                                        $clientPhone = $row['client_phone'];
                                                                        $measureSleeveChoice = $row['top_sleevesType'];
                                                                        // $modifyDate = $row['modified_date'];
                                                                        $modifieddate = date_create($row['modified_date']);
                                                                        $modifyDate = date_format($modifieddate, 'd-M-Y');
                                                                ?>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N"><?php echo ++$counter; ?></td>
                                                                    <td class="dt-cDate" data-label="Created Date"><?php echo $createdDate; ?></td>
                                                                    <td class="dt-pID" data-label="Client ID"><?php echo $clientID; ?></td>
                                                                    <td class="dt-name" data-label="Client Name"><?php echo $clientName; ?></td>
                                                                    <td class="dt-phone" data-label="Phone"><?php echo $clientPhone; ?></td>
                                                                    <td class="dt-insDate" data-label="Sleeve Choice"><?php echo $measureSleeveChoice; ?></td>
                                                                    <td class="dt-cDate text-center" data-label="Date Update"><?php if($modifyDate==''){echo '---';} else {echo $modifyDate;} ?></td>
                                                                    <td class="dt-action text-right" data-label="Action">
                                                                        <a href="view-measurement.php?client_id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="left" title="View"><i class="fa fa-laptop fa_ico txt-black"></i></a>
                                                                        <a href="edit-measurement.php?client_id=<?php echo $id; ?>" data-toggle="tooltip" data-placement="left" title="Edit"><i class="fa fa-pencil fa_ico txt-black"></i></a>
                                                                        <a href="clients-measurement.php?m_d=<?php echo $id; ?>" class="btn__delete" onclick="return overlayconfirm();" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash fa_ico txt-red"></i></a>
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
<?php include ('footer.php');?>