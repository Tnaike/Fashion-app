<?php
 $page = 'Clients';
 include ('header.php');
 ?>
    
        <div id="page-content-wrapper">
        	<div class="container-fluid">
            	<div class="row">
                	<div class="main-content m-bt-40">
                        <div class="page-header-wrap">
                            <ul class="nav">
                                <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dashboard-title text-center">
                                    <span class="back__link m-right-10 flow-left pad-10"><a href="clients.php"> <i class="fa fa-arrow-left"></i></a></span>                                    
                                    <span class="disp-inblock f-s-18 fw-6 pad-10"><?php echo $clientName; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">                                    
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?>
                                    <form action="" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div id="clientProfile" class="profile_dataWrap">
                                            <div class="profile-datas">
                                                <div class="blocPos clearfix">
                                                    <!-- <div class="col-md-12 col-sm-12 col-xs-12 m-bt-20">
                                                        <div><img src="../images/user_image.png" class="sample__view"></div>
                                                        <div class="form-group m-tp-10">
                                                            <label class="control-label">Upload Passport</label>
                                                            <input type="file" name="clientImage" id="clientImage" accept="image/*" class="inputbox">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group tTag">
                                                            <p class="view__output"><?php echo $createdDate; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 m-bt-20">
                                                        <div class="sample__view" style="background:url(../images/clients/<?php echo $clientPic; ?>); background-position:center; background-repeat:no-repeat;"></div>
                                                        <div class="form-group m-tp-10">
                                                            <label class="control-label">Upload Passport</label>
                                                            <input type="file" name="clientImage" id="clientImage" accept="image/*" class="inputbox">
                                                            <small class="txt-red">Max upload size (5MB).</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Client ID</label>
                                                            <input type="text" id="clientName" class="form-control" value="<?php echo $clientID; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Client Name <sup>*</sup></label>
                                                            <input type="text" name="clientName" id="clientName" class="form-control required" maxlength="50" value="<?php echo $clientName; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Other Name </label>
                                                            <input type="text" name="otherName" id="otherName" class="form-control" maxlength="50" value="<?php echo $otherName; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Email </label>
                                                            <input type="text" name="clientEmail" id="clientEmail" class="form-control email" value="<?php echo $clientEmail; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Phone Number <sup>*</sup></label>
                                                            <input type="text" name="clientPhone" id="clientPhone" maxlength="11" class="form-control digits" value="<?php echo $clientPhone; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Whatsapp Number</label>
                                                            <input type="text" name="clientwhatsapp" id="clientwhatsapp" maxlength="11" class="form-control digits" value="<?php echo $clientwhatsapp; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Other Phone</label>
                                                            <input type="text" name="clientOtherPhone" id="clientOtherPhone" maxlength="11" class="form-control digits" value="<?php echo $clientOtherPhone; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Gender</label>                                                
                                                            <div class="radio radio-info">
                                                                <div class="radio_horizontal">
                                                                    <input type="radio" name="clientGender" id="forMale" class="radio__box" <?php if($clientGender=='Male'){echo 'checked';} ?> value="Male">
                                                                    <label for="forMale" class="radio__lbl"> Male</label>
                                                                </div>
                                                                <div class="radio_horizontal">
                                                                    <input type="radio" name="clientGender" id="forFemale" class="radio__box" <?php if($clientGender=='Female'){echo 'checked';} ?> value="Female">
                                                                    <label for="forFemale" class="radio__lbl"> Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Locality <sup>*</sup></label>                                                            
                                                            <input type="text" name="clientLocality" id="clientLocality required" class="form-control" maxlength="50" value="<?php echo $clientLocality; ?>">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">State <sup>*</sup></label>
                                                            <select name="clientState" id="clientState" class="form-control required">
                                                                <option value="Abia" <?php if($clientState=='Abia'){echo 'selected';} ?>>Abia</option>                               	
                                                                <option value="Abuja"<?php if($clientState=='Abuja'){echo 'selected';} ?>>Abuja</option>
                                                                <option value="Adamawa" <?php if($clientState=='Adamawa'){echo 'selected';} ?>>Adamawa</option>
                                                                <option value="Anambra" <?php if($clientState=='Anambra'){echo 'selected';} ?>>Anambra</option>
                                                                <option value="Akwa Ibom" <?php if($clientState=='Akwa Ibom'){echo 'selected';} ?>>Akwa Ibom</option>
                                                                <option value="Bauchi" <?php if($clientState=='Bauchi'){echo 'selected';} ?>>Bauchi</option>
                                                                <option value="Bayelsa" <?php if($clientState=='Bayelsa'){echo 'selected';} ?>>Bayelsa</option>
                                                                <option value="Benue" <?php if($clientState=='Benue'){echo 'selected';} ?>>Benue</option>
                                                                <option value="Borno" <?php if($clientState=='Borno'){echo 'selected';} ?>>Borno</option>
                                                                <option value="Cross River" <?php if($clientState=='Cross River'){echo 'selected';} ?>>Cross River</option>
                                                                <option value="Delta" <?php if($clientState=='Delta'){echo 'selected';} ?>>Delta</option>
                                                                <option value="Ebonyi" <?php if($clientState=='Ebonyi'){echo 'selected';} ?>>Ebonyi</option>
                                                                <option value="Enugu" <?php if($clientState=='Enugu'){echo 'selected';} ?>>Enugu</option>
                                                                <option value="Edo" <?php if($clientState=='Edo'){echo 'selected';} ?>>Edo</option>
                                                                <option value="Ekiti" <?php if($clientState=='Ekiti'){echo 'selected';} ?>>Ekiti</option>
                                                                <option value="Gombe" <?php if($clientState=='Gombe'){echo 'selected';} ?>>Gombe</option>
                                                                <option value="Imo" <?php if($clientState=='Imo'){echo 'selected';} ?>>Imo</option>
                                                                <option value="Jigawa" <?php if($clientState=='Jigawa'){echo 'selected';} ?>>Jigawa</option>
                                                                <option value="Kaduna" <?php if($clientState=='Kaduna'){echo 'selected';} ?>>Kaduna</option>
                                                                <option value="Kano" <?php if($clientState=='Kano'){echo 'selected';} ?>>Kano</option>
                                                                <option value="Katsina" <?php if($clientState=='Katsina'){echo 'selected';} ?>>Katsina</option>
                                                                <option value="Kebbi" <?php if($clientState=='Kebbi'){echo 'selected';} ?>>Kebbi</option>
                                                                <option value="Kogi" <?php if($clientState=='Kogi'){echo 'selected';} ?>>Kogi</option>
                                                                <option value="Kwara" <?php if($clientState=='Kwara'){echo 'selected';} ?>>Kwara</option>
                                                                <option value="Lagos" <?php if($clientState=='Lagos'){echo 'selected';} ?>>Lagos</option>
                                                                <option value="Nasarawa" <?php if($clientState=='Nasarawa'){echo 'selected';} ?>>Nasarawa</option>
                                                                <option value="Niger" <?php if($clientState=='Niger'){echo 'selected';} ?>>Niger</option>
                                                                <option value="Ogun" <?php if($clientState=='Ogun'){echo 'selected';} ?>>Ogun</option>
                                                                <option value="Ondo"<?php if($clientState=='Ondo'){echo 'selected';} ?>>Ondo</option>
                                                                <option value="Osun" <?php if($clientState=='Osun'){echo 'selected';} ?>>Osun</option>
                                                                <option value="Oyo" <?php if($clientState=='Oyo'){echo 'selected';} ?>>Oyo</option>
                                                                <option value="Plateau"<?php if($clientState=='Plateau'){echo 'selected';} ?>>Plateau</option>
                                                                <option value="Rivers" <?php if($clientState=='Rivers'){echo 'selected';} ?>>Rivers</option>
                                                                <option value="Sokoto" <?php if($clientState=='Sokoto'){echo 'selected';} ?>>Sokoto</option>
                                                                <option value="Taraba" <?php if($clientState=='Taraba'){echo 'selected';} ?>>Taraba</option>
                                                                <option value="Yobe" <?php if($clientState=='Yobe'){echo 'selected';} ?>>Yobe</option>
                                                                <option value="Zamfara" <?php if($clientState=='Zamfara'){echo 'selected';} ?>>Zamfara</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <input type="text" name="clientAddress" id="clientAddress" class="form-control" value="<?php echo $clientAddress; ?>" maxlength="100">
                                                        </div>
                                                    </div>
                                                    <div class="formDivider"></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Company </label>                                                            
                                                            <input type="text" name="clientCompany" id="clientCompany" class="form-control" maxlength="100" value="<?php echo $clientCompany; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Facebook URL</label>
                                                            <input type="text" name="clientFacebook" id="clientFacebook" class="form-control" placeholder="e.g. https://www.facebook.com/clientbaze" value="<?php echo $clientFacebook; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Twitter URL</label>
                                                            <input type="text" name="clientTwitter" id="clientTwitter" class="form-control" placeholder="e.g. https://www.twitter.com/clientbaze" value="<?php echo $clientTwitter; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Instagram URL</label>
                                                            <input type="text" name="clientInstagram" id="clientInstagram" class="form-control" placeholder="e.g. https://www.instagram.com/clientbaze" value="<?php echo $clientInstagram; ?>">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                        <div class="form-group">
                                                            <button type="submit" name="btnUpdateClient" class="btn btn-danger">Update Profile</button>
                                                            <a href="client-profile.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
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