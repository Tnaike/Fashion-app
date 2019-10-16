<?php
 $page = 'Wardrobe';
 include ('header.php');
 ?>
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-title text-center">
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="wardrobe-monitor.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10">Add To Wardrobe</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div class="measurement_dataWrap">
                                            <div class="measurement-datas">
                                                <div class="panel-wrap tabInput_wrap m-bt-10">
                                                    <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                        <h2 class="text-center l-space-2 f-s-14 font-bold">Package Details</h2>
                                                    </div>
                                                    <div class="data__view">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Client ID <sup>*</sup></label>
                                                                <input type="text" name="clientID" id="clientID" class="form-control required">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Received Date <sup>*</sup></label>
                                                                <input type="text" name="receivedDate" id="receivedDate" class="form-control required">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Upload Material</label>
                                                                <input type="file" name="uploadMaterial" id="uploadMaterial" accept="image/*" class="inputbox">
                                                                <small class="txt-red">Max upload size (5MB).</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Outfit Type <sup>*</sup></label>
                                                                <select name="outfitType" id="outfitType" class="form-control required">
                                                                    <option value="">Select Type</option>
                                                                    <option value="Complete Pack">Complete Pack</option>   
                                                                    <option value="Top & Trouser">Top &amp; Trouser</option>   
                                                                    <option value="Top Only">Top Only</option>  
                                                                    <option value="Trouser Only">Trouser Only</option>
                                                                    <option value="Others">Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Amount (&#8358;) <sup>*</sup></label>
                                                                <input type="text" name="amount" id="amount" class="form-control required digits">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Paid (&#8358;) <sup>*</sup></label>
                                                                <input type="text" name="amountPaid" id="amountPaid" class="form-control required digits">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Delivery Date</label>
                                                                <input type="text" name="deliveryDate" id="deliveryDate" class="form-control required">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Note: <small>(if any, drop note)</small></label>
                                                                <textarea name="clientNote" id="clientNote" rows="6" class="form-control" maxlength="160" placeholder="Write a short note here while receiving."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                    <div class="form-group">
                                                        <button type="submit" name="addPackage" class="btn btn-danger" id="addPackage">Add</button>
                                                        <a href="wardrobe-monitor.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
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