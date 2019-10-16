<?php
 $page = 'Settings';
 include ('header.php');
 ?>

        <?php
            $sql = "SELECT * FROM users ORDER BY created_date DESC";
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
                                    <h4 class="m-right-10">Member List</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="linkWrapper clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group text-right">
                                    <a href="add-role.php" class="btn-view f-s-13" id="clientPackage-btn">Add Member's Role</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                    <form action="" method="post" id="List_form" enctype="multipart/form-data">                                            
                                        <div class="formWrapper pad-0">                                        
                                            <div class="panel_heading"><i class="fa fa-user fa-ico"></i>Added Member <span class="flow-right bg-white text-capitalize m-left-15 f-s-12" style="padding:2px 5px;"><?php echo $num_of_results; ?> Records</span></div>
                                            <div class="clientsList_dataWrap">
                                                <div class="clientsList_datas">                                                    
                                                    <div class="datas_box table-responsive mobi__table">
                                                        <table id="userListTable" class="table table-hover data_table">
                                                            <thead>
                                                                <tr class="db-tr t-th">
                                                                    <th class="db-th text-center" scope="thcol">S/N</th>
                                                                    <th class="db-th" scope="thcol">Created Date</th>
                                                                    <th class="db-th" scope="thcol">Username</th>
                                                                    <th class="db-th" scope="thcol">Name</th>
                                                                    <th class="db-th" scope="thcol">Phone</th>
                                                                    <th class="db-th" scope="thcol">Email</th>
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
                                                                        $username = $row['username'];
                                                                        $memberName = $row['firstname'];
                                                                        $phoneNum = $row['phone'];
                                                                        $email = $row['email'];
                                                                        $userStatus = $row['user_status'];
                                                                ?>
                                                                <tr class="read_data">
                                                                    <td class="dt_sn text-center" data-label="S/N"><?php echo ++$counter; ?></td>
                                                                    <td class="dt-rDate" data-label="Created Date"><?php echo $createdDate; ?></td>
                                                                    <td class="dt-pID" data-label="Username"><?php echo $username; ?></td>
                                                                    <td class="dt-name" data-label="Name"><?php echo $memberName; ?></td>
                                                                    <td class="dt-type" data-label="Phone"><?php echo $phoneNum; ?></td>
                                                                    <td class="dt-dDate" data-label="Email"><?php echo $email; ?></td>
                                                                    <td class="dt-status" data-label="User Status"><?php if($userStatus==1){echo $superAdmin;} else {echo $member;} ?></td>
                                                                    <td class="dt-action text-center" data-label="Action">
                                                                        <a href="users-list.php?u_d=<?php echo $id;?>" onclick="return overlayconfirm();" data-toggle="tooltip" data-placement="left" title="Delete"><i class="fa fa-trash fa_ico txt-red"></i></a>
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