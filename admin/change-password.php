<?php
 $page = 'Change-Password';
 include ('header.php');
 ?>
    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">                        
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-5 col-md-5 col-sm-12 col-xs-12 dashboard-title">
                                    <h4 class="m-right-10">Change Password</h4>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="change-password.php" method="post" id="form__input" enctype="multipart/form-data">                                                                             
                                        <div id="changePassword" class="formWrapper">                                        
                                            <div class="panel_heading">Change Password</div>
                                            <div class="userPWD_dataWrap">
                                                <div class="userPWD_datas">                                                    
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">New Password </label>
                                                            <input type="password" name="password" id="password" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Verify Password </label>
                                                            <input type="password" name="v_password" id="v_password" class="form-control">
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 m-tp-20 text-right">
                                            <div class="form-group">
                                                <input type="submit" name="updatePassword" class="btn btn-danger" id="updatePassword" value="Update Password">
                                                <a href="dashboard.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
<?php include ('footer.php');?>