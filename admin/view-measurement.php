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
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group tTag">
                                                        <p class="view__output"><?php echo $clientID; ?></p>
                                                    </div>
                                                    <div class="form-group tTag flow-right">
                                                        <p class="view__output"><?php echo $createdDate; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 m-bt-20 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center text-uppercase l-space-2 f-s-14 font-bold">Top</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Shoulder">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Shoulder</label>
                                                                <p class="view__output"><?php echo $measureShoulder; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Chest">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Chest</label>
                                                                <p class="view__output"><?php echo $measureChest; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Short Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short L</label>
                                                                <p class="view__output"><?php echo $measureShortL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Short Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short SL</label>
                                                                <p class="view__output"><?php echo $measureShortSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Long Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Long L</label>
                                                                <p class="view__output"><?php echo $measureLongL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Long Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Long SL</label>
                                                                <p class="view__output"><?php echo $measureLongSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Agbada Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Agbada L</label>
                                                                <p class="view__output"><?php echo $measureAgbadaL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Agbada Sleeve Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Agbada SL</label>
                                                                <p class="view__output"><?php echo $measureAgbadaSleeveL; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Sleeves Round">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Sleeves Round</label>
                                                                <p class="view__output"><?php echo $measureSleeveRound; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Neck">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Neck</label>
                                                                <p class="view__output"><?php echo $measureNeck; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Cap">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Cap</label>
                                                                <p class="view__output"><?php echo $measureCap; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Sleeves Choice">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Sleeves Choice</label>
                                                                <p class="view__output"><?php echo $measureSleeveChoice; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 xs-pad-0">
                                                    <div class="panel-wrap clearfix m-bt-10">
                                                        <div class="featured-p-tag bg-grey pad-10 m-bt-20">
                                                            <h2 class="text-center text-uppercase l-space-2 f-s-14 font-bold">Trouser</h2>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Full Length">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Length</label>
                                                                <p class="view__output"><?php echo $measureTLength; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Short">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Short</label>
                                                                <p class="view__output"><?php echo $measureTShort; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Waist">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Waist</label>
                                                                <p class="view__output"><?php echo $measureTWaist; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Thigh">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Thigh</label>
                                                                <p class="view__output"><?php echo $measureTThigh; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Flap">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Flap</label>
                                                                <p class="view__output"><?php echo $measureTFlap; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Knee">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Knee</label>
                                                                <p class="view__output"><?php echo $measureTKnee; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Caf">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Caf</label>
                                                                <p class="view__output"><?php echo $measureTCaf; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">                                                        
                                                            <div class="form-group wrap__lst" data-toggle="tooltip" title="Trouser Bottom">
                                                                <label class="lbl__tag text-uppercase f-s-11 fw-6">Bottom</label>
                                                                <p class="view__output"><?php echo $measureTBottom; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-10 text-right">
                                                    <div class="form-group">
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