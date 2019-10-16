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
                                    <span class="disp-inblock f-s-18 fw-6 pad-10"><?php echo $clientName; ?></span>
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
                                                    <div class="blocPos clearfix">
                                                        <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-center m-bt-20">
                                                            <p><img src="../images/Agbada_complete.jpg" class="sample__view"></p> 
                                                        </div> -->
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group tTag">
                                                                <p class="view__output"><?php echo $createdDate; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12 m-bt-20">
                                                            <div class="sample__view" style="background:url(../images/<?php echo $materialPix; ?>); background-position:center; background-repeat:no-repeat;"></div>
                                                            <div class="form-group m-tp-10">
                                                                <label class="control-label">Upload Material</label>
                                                                <input type="file" name="uploadMaterial" id="uploadMaterial" accept="image/*" class="inputbox" data-toggle="tooltip" data-placement="bottom" title="Upload Material Sample.">
                                                                <small class="txt-red">Max upload size (5MB).</small>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Client ID</label>
                                                                <input type="text" name="clientID" id="clientID" class="form-control required" value="<?php echo $clientID; ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Received Date:</label>
                                                                <input type="text" name="receivedDate" id="receivedDate" class="form-control required" value="<?php echo $receivedDate; ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Outfit Type</label>
                                                                <select name="outfitType" id="outfitType" class="form-control">
                                                                    <option value="Complete Pack" <?php if($outfitType=='Complete Pack'){echo 'selected';} ?>>Complete Pack</option>   
                                                                    <option value="Top & Trouser" <?php if($outfitType=='Top & Trouser'){echo 'selected';} ?>>Top &amp; Trouser</option>   
                                                                    <option value="Top Only" <?php if($outfitType=='Top Only'){echo 'selected';} ?>>Top Only</option>
                                                                    <option value="Trouser Only" <?php if($outfitType=='Trouser Only'){echo 'selected';} ?>>Trouser Only</option>
                                                                    <option value="Others" <?php if($outfitType=='Others'){echo 'selected';} ?>>Others</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Amount (&#8358;)</label>
                                                                <input type="text" name="packageAmount" id="packageAmount" class="form-control required digits" value="<?php echo $packageAmount; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Paid (&#8358;)</label>
                                                                <input type="text" name="packageAmtPaid" id="packageAmtPaid" class="form-control digits" value="<?php echo $amountPaid; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Delivered</label>
                                                                <div class="switch_btn blocPos m-tp-10 m-bt-20">
                                                                    <input type="checkbox" name="deliveredStatus" id="deliveredStatus" class="tsw_toggle tsw_toggle-round" <?php if($deliveredStatus==1){echo 'checked';} ?>>
                                                                    <label for="deliveredStatus" data-toggle="tooltip" data-placement="right" title="Switch ON/OFF for Delivery Status"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Delivery Date:</label>
                                                                <input type="text" name="deliveryDate" id="deliveryDate" class="form-control" value="<?php echo $deliveryDate; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Delivered By</label>
                                                                <select name="deliveredBy" id="deliveredBy" class="form-control" onchange="dispField(this)">
                                                                    <option value="0" <?php if($deliveredBy==0){echo 'selected';} ?>>Select</option>  
                                                                    <option value="1" <?php if($deliveredBy==1){echo 'selected';} ?> id="bySelfDeliver">Self Delivery</option>
                                                                    <option value="2" <?php if($deliveredBy==2){echo 'selected';} ?> id="bySelfPick">Self Pickup</option>   
                                                                    <option value="3" <?php if($deliveredBy==3){echo 'selected';} ?> id="byOther">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div id="deliveredOtherName" class="col-md-6 col-sm-6 col-xs-12" <?php if($deliveredBy==3){echo 'style="display: block"';}else{echo 'style="display: none"';}?> >
                                                            <div class="form-group">
                                                                <label class="control-label">Delivery Name:</label>
                                                                <input type="text" name="deliveryName" id="deliveryName" class="form-control" value="<?php echo $deliverOther; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <label class="control-label">Note: <small>(if any, drop note)</small></label>
                                                                <textarea name="clientNote" id="clientNote" rows="6" class="form-control" maxlength="160" placeholder="Write a short note here on any complain from client on delivery or while receiving."><?php echo $note; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                    <div class="form-group">
                                                        <button type="submit" name="updatePackage" class="btn btn-danger">Update</button>
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