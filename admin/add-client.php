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
                                    <span class="disp-inblock f-s-18 fw-6 pad-10">Add Client</span>
                                </li>
                            </ul>
                        </div>
                        <div class="content-data-wrap">
                            <div class="data_summary-wrap">
                                <div class="board-Section inputWrap animated fadeIn">
                                <?php include('../errors.php'); ?> 
                                    <form action="add-client.php" method="post" id="form__input" enctype="multipart/form-data">                                            
                                        <div id="addClient" class="profile_dataWrap">
                                            <div class="client-datas">
                                                <div class="blocPos clearfix">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Client Name <sup>*</sup></label>
                                                            <input type="text" name="clientName" id="clientName" class="form-control required" maxlength="50">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Other Name </label>
                                                            <input type="text" name="otherName" id="otherName" class="form-control" maxlength="50">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Email </label>
                                                            <input type="text" name="clientEmail" id="clientEmail" class="form-control email">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Phone Number<sup>*</sup></label>
                                                            <input type="text" name="clientPhone" id="clientPhone" maxlength="11" class="form-control digits">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Whatsapp Number</label>
                                                            <input type="text" name="clientwhatsapp" id="clientwhatsapp" maxlength="11" class="form-control digits">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">                                                        
                                                        <div class="form-group">
                                                            <label class="control-label">Other Phone</label>
                                                            <input type="text" name="clientOtherPhone" id="clientOtherPhone" maxlength="11" class="form-control digits">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Gender</label>                                                
                                                            <div class="radio radio-info">
                                                                <div class="radio_horizontal">
                                                                    <input type="radio" name="clientGender" id="forMale" class="radio__box" value="Male" checked>
                                                                    <label for="forMale" class="radio__lbl"> Male</label>
                                                                </div>
                                                                <div class="radio_horizontal">
                                                                    <input type="radio" name="clientGender" id="forFemale" class="radio__box" value="Female">
                                                                    <label for="forFemale" class="radio__lbl"> Female</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Locality <sup>*</sup></label>                                                            
                                                            <input type="text" name="clientLocality" id="clientLocality" class="form-control" maxlength="50">
                                                        </div>
                                                    </div> 
                                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">State <sup>*</sup></label>                                                            
                                                            <select name="clientState" id="clientState" class="form-control">
                                                                <option value="">Select State</option>                                	
                                                                <option value="Abia">Abia</option>                               	
                                                                <option value="Abuja">Abuja</option>
                                                                <option value="Adamawa">Adamawa</option>
                                                                <option value="Anambra">Anambra</option>
                                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                                <option value="Bauchi">Bauchi</option>
                                                                <option value="Bayelsa">Bayelsa</option>
                                                                <option value="Benue">Benue</option>
                                                                <option value="Borno">Borno</option>
                                                                <option value="Cross River">Cross River</option>
                                                                <option value="Delta">Delta</option>
                                                                <option value="Ebonyi">Ebonyi</option>
                                                                <option value="Enugu">Enugu</option>
                                                                <option value="Edo">Edo</option>
                                                                <option value="Ekiti">Ekiti</option>
                                                                <option value="Gombe">Gombe</option>
                                                                <option value="Imo">Imo</option>
                                                                <option value="Jigawa">Jigawa</option>
                                                                <option value="Kaduna">Kaduna</option>
                                                                <option value="Kano">Kano</option>
                                                                <option value="Katsina">Katsina</option>
                                                                <option value="Kebbi">Kebbi</option>
                                                                <option value="Kogi">Kogi</option>
                                                                <option value="Kwara">Kwara</option>
                                                                <option value="Lagos">Lagos</option>
                                                                <option value="Nasarawa">Nasarawa</option>
                                                                <option value="Niger">Niger</option>
                                                                <option value="Ogun">Ogun</option>
                                                                <option value="Ondo">Ondo</option>
                                                                <option value="Osun">Osun</option>
                                                                <option value="Oyo">Oyo</option>
                                                                <option value="Plateau">Plateau</option>
                                                                <option value="Rivers">Rivers</option>
                                                                <option value="Sokoto">Sokoto</option>
                                                                <option value="Taraba">Taraba</option>
                                                                <option value="Yobe">Yobe</option>
                                                                <option value="Zamfara">Zamfara</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <input type="text" name="clientAddress" id="clientAddress" class="form-control" maxlength="100">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12 m-bt-20">                                                       
                                                        <label class="control-label">Upload Passport</label>
                                                        <div class="form-group m-tp-10">
                                                            <input type="file" name="clientImage" id="clientImage" accept="image/*" class="inputbox">
                                                        </div>
                                                    </div>
                                                    <div class="formDivider"></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Company Name</label>                                                            
                                                            <input type="text" name="clientCompany" id="clientCompany" class="form-control" maxlength="100">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Facebook URL</label>
                                                            <input type="text" name="clientFacebook" id="clientFacebook" class="form-control" placeholder="e.g. https://www.facebook.com/clientbaze" data-toggle="tooltip" data-placement="bottom" title="Enter facebook address e.g. https://www.facebook.com/clientbaze">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Twitter URL</label>
                                                            <input type="text" name="clientTwitter" id="clientTwitter" class="form-control" placeholder="e.g. https://www.twitter.com/clientbaze" data-toggle="tooltip" data-placement="bottom" title="Enter twitter address e.g. https://www.twitter.com/clientbaze">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Instagram URL</label>
                                                            <input type="text" name="clientInstagram" id="clientInstagram" class="form-control" placeholder="e.g. https://www.instagram.com/clientbaze" data-toggle="tooltip" data-placement="bottom" title="Enter instagram address e.g. https://www.instagram.com/clientbaze">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-tp-20 text-right">
                                                        <div class="form-group">
                                                            <input type="submit" name="btnAddClient" class="btn btn-danger" id="saveClient" value="Save">
                                                            <a href="clients.php" name="cancel" class="btn btn-primary m-left-10">Cancel</a>
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