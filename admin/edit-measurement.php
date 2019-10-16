<?php
 $page = 'Measurement';
 include ('header.php');
 ?>
    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-title text-center">
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="clients-measurement.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10"><?php echo $clientName; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section linBod inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?>
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div class="measurement_dataWrap">
                                            <div class="measurement-datas">
                                                <div class="floatPos blocPos m-bt-30">                                                    
                                                    <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 text-center">
                                                        <div class="form-group">
                                                            <label class="control-label font-bold">Client ID</label>
                                                            <input type="text" name="clientID" id="clientID" class="form-control text-center text-uppercase required" value="<?php echo $clientID; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m-bt-20 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center l-space-2 f-s-14 font-bold">Top</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Shoulder</label>
                                                                <input type="number" name="measureShoulder" id="measureShoulder" maxlength="5" class="form-control" data-toggle="tooltip" title="Shoulder" value="<?php echo $measureShoulder; ?>">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Chest</label>
                                                                <input type="number" name="measureChest" id="measureChest" maxlength="5" class="form-control" data-toggle="tooltip" title="Chest" value="<?php echo $measureChest; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short L</label>
                                                                <input type="number" name="measureShortL" id="measureShortL" maxlength="5" class="form-control" data-toggle="tooltip" title="Short Length" value="<?php echo $measureShortL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short SL</label>
                                                                <input type="number" name="measureShortSleeveL" id="measureShortSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Short Sleeve Length" value="<?php echo $measureShortSleeveL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Long L</label>
                                                                <input type="number" name="measureLongL" id="measureLongL" maxlength="5" class="form-control" data-toggle="tooltip" title="Long Length" value="<?php echo $measureLongL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Long SL</label>
                                                                <input type="number" name="measureLongSleeveL" id="measureLongSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Long Sleeve Length" value="<?php echo $measureLongSleeveL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Agbada L</label>
                                                                <input type="number" name="measureAgbadaL" id="measureAgbadaL" maxlength="5" class="form-control" data-toggle="tooltip" title="Agbada Length" value="<?php echo $measureAgbadaL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Agbada SL</label>
                                                                <input type="number" name="measureAgbadaSleeveL" id="measureAgbadaSleeveL" maxlength="5" class="form-control" data-toggle="tooltip" title="Agbada Sleeve Length" value="<?php echo $measureAgbadaSleeveL; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Sleeves Round</label>
                                                                <input type="number" name="measureSleeveRound" id="measureSleeveRound" maxlength="5" class="form-control" data-toggle="tooltip" title="Sleeves Round" value="<?php echo $measureSleeveRound; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Neck</label>
                                                                <input type="number" name="measureNeck" id="measureNeck" maxlength="5" class="form-control" data-toggle="tooltip" title="Neck" value="<?php echo $measureNeck; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Cap</label>
                                                                <input type="number" name="measureCap" id="measureCap" maxlength="5" class="form-control" data-toggle="tooltip" title="Cap" value="<?php echo $measureCap; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Sleeves Choice</label>
                                                                <select name="measureSleeveChoice" id="measureSleeveChoice" class="form-control">
                                                                    <option value="Any" <?php if($measureSleeveChoice=='Any'){echo 'selected';} ?>>Any</option>
                                                                    <option value="Long Sleeves" <?php if($measureSleeveChoice=='Long Sleeves'){echo 'selected';} ?>>Long Sleeves</option>
                                                                    <option value="Short Sleeves" <?php if($measureSleeveChoice=='Short Sleeves'){echo 'selected';} ?>>Short Sleeves</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-pad-0">
                                                        <div class="panel-wrap clearfix m-bt-10">
                                                            <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                                <h2 class="text-center l-space-2 f-s-14 font-bold">Trouser</h2>
                                                            </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Length</label>
                                                                <input type="number" name="measureTLength" id="measureTLength" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Full Length" value="<?php echo $measureTLength; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Short</label>
                                                                <input type="number" name="measureTShort" id="measureTShort" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Short" value="<?php echo $measureTShort; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Waist</label>
                                                                <input type="number" name="measureTWaist" id="measureTWaist" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Waist" value="<?php echo $measureTWaist; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Thigh</label>
                                                                <input type="number" name="measureTThigh" id="measureTThigh" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Thigh" value="<?php echo $measureTThigh; ?>">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Flap</label>
                                                                <input type="number" name="measureTFlap" id="measureTFlap" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Flap" value="<?php echo $measureTFlap; ?>">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Knee</label>
                                                                <input type="number" name="measureTKnee" id="measureTKnee" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Knee" value="<?php echo $measureTKnee; ?>">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Caf</label>
                                                                <input type="number" name="measureTCaf" id="measureTCaf" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Caf" value="<?php echo $measureTCaf; ?>">
                                                            </div>
                                                        </div>  
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Bottom</label>
                                                                <input type="number" name="measureTBottom" id="measureTBottom" maxlength="5" class="form-control" data-toggle="tooltip" title="Trouser Bottom" value="<?php echo $measureTBottom; ?>">
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                    <div class="form-group">
                                                        <button type="submit" name="updateMeasurement" class="btn btn-danger" id="updateMeasurement">Update</button>
                                                        <a href="clients-measurement.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
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