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
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-title text-center">
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="settings.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10">Add Member Role</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div class="role_dataWrap">
                                            <div class="role-datas">
                                                <div class="panel-wrap tabInput_wrap m-bt-10">
                                                    <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                        <h2 class="text-center l-space-2 f-s-14 font-bold">Register Member</h2>
                                                    </div>
                                                    <div class="data__view">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Member Role <sup>*</sup></label>
                                                                <select name="memberRole" class="form-control required">
                                                                    <option value="">Select Role</option>
                                                                    <option value="1">Super Admin</option>   
                                                                    <option value="2">View Member</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Username </label>
                                                                <input type="text" name="Username" class="input_value" placeholder="Username">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">First Name <sup>*</sup></label>
                                                                <input type="text" name="firstName" class="input_value required" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Last Name</label>
                                                                <input type="text" name="lastName" class="input_value" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Email <sup>*</sup></label>
                                                                <input type="email" name="userEmail" class="input_value email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Phone Number <sup>*</sup></label>
                                                                <input type="text" name="userPhone" class="input_value digits" placeholder="Phone Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Password <sup>*</sup></label>
                                                                <input type="password" name="password" class="input_value" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="input_lbl">Verify Password <sup>*</sup></label>
                                                                <input type="password" name="v_password" class="input_value" placeholder="Verify Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                            <div class="form-group">
                                                                <button type="submit" name="btnRegister" class="btn btn-danger">Add Member</button>
                                                                <a href="wardrobe-monitor.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
                                                            </div>
                                                        </div>
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