<?php
if($_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])){
    header('HTTP/1.0 403 Forbidden', TRUE, 403);
    die(header('location: 404.php'));
        
    session_destroy();
}

session_start();

// inactive in 1Hour destory session
$inactive = 3600;
if(!isset($_SESSION['timeout']))
$_SESSION['timeout'] = time() + $inactive;
$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive){
    session_destroy();
    header('location: ../login.php');
}
$_SESSION['timeout']=time();

require ('conn.php');
$id = "";
$clientID = "";
$username = "";
$clientname = "";
$activedate = "";
$lastactive = "";
$errors = array();
$successes = array();
$dateNow =  date("Y-m-d H:i:s");
$created_date = date("Y-m-d H:i:s");
$modifyDate = date("Y-m-d H:i:s");
$last_active = date("Y-m-d H:i:s");
$success = "<span class='success-symb'> Success</span>";
$pending = "<span class='pending-symb'> Pending</span>";
$superAdmin = "Super Admin";
$member = "Member";

// LOGIN
if(isset($_POST['btnLogin'])){
    $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // ENSURING FORM FIELDS ARE FILLED PROPERLY 
    if(empty($userEmail)){
        array_push($errors, "Email is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }

    if(count($errors) == 0){
        //Converts Password to binary for case-sensitive check.
        $result = mysqli_query($conn, "SELECT * FROM users WHERE email='".$userEmail."' AND BINARY password='".$password."'");

        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['id'] = $row['id'];
            $_SESSION['userName'] = $row['username'];
            $lastactive = strtotime($row['last_active']) + 3600; // add +1 hour (3600)
            $activedate = date('M d, Y h:iA', $lastactive);
            $_SESSION['last_active'] = $activedate;
            $_SESSION['fullname'] = $row['firstname'].' '.$row['lastname'];            
            $fname_1 = $row['firstname'];           
            $lname_1 = $row['lastname'];
            $uStatus = $row['user_status'];
            $strName = ($fname_1[0]) . ($lname_1[0]);
            $_SESSION['strName'] = $strName;
            $_SESSION['user_status'] = $uStatus;

            $id = $_SESSION['id'];

            $upquery = "UPDATE users SET last_active ='".$last_active."' WHERE id='".$id."'";
                mysqli_query($conn, $upquery);
                mysqli_close($conn);

                if($uStatus==1){
                    header('location: admin/dashboard.php');
                }
                else{
                    header('location: member/dashboard.php');
                }
        }
        else{            
            array_push($errors, "Username or password is not valid");
        }
    }
}
// PENDING WARDROBE COUNT
$countResult = mysqli_query($conn, "SELECT COUNT(delivery_status) AS countPend FROM wardrobe WHERE delivery_status LIKE '0%'");
$countrow = mysqli_fetch_assoc($countResult);
$pendPackage = $countrow['countPend'];

// USERS COUNT
$query = mysqli_query($conn, "SELECT id FROM users");
$userCount=mysqli_num_rows($query);

// CLIENT COUNT
$query = mysqli_query($conn, "SELECT id FROM client");
$countNum=mysqli_num_rows($query);


// MEASUREMENT COUNT
$query = mysqli_query($conn, "SELECT id FROM measurement");
$countMNum=mysqli_num_rows($query);

// WARDROBE COUNT
$query = mysqli_query($conn, "SELECT id FROM wardrobe");
$wardNum=mysqli_num_rows($query);

// INFLOW AMOUNT
$result = mysqli_query($conn, "SELECT SUM(amount) AS amount_sum FROM wardrobe");
$row = mysqli_fetch_assoc($result);
$amtSum = $row['amount_sum'];

// OUTSTANDING AMOUNT
$result = mysqli_query($conn, "SELECT SUM(amount-amount_paid) AS outstandSum FROM wardrobe");
$row = mysqli_fetch_assoc($result);
$outstandSum = $row['outstandSum'];

// REGISTER
if(isset($_POST['btnRegister'])){
    $memberRole = mysqli_real_escape_string($conn, $_POST['memberRole']);
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $userEmail = mysqli_real_escape_string($conn, $_POST['userEmail']);
    $userPhone = mysqli_real_escape_string($conn, $_POST['userPhone']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $vpassword = mysqli_real_escape_string($conn, $_POST['v_password']);

    // ENSURE THAT FORM FIELDS ARE FILLED PROPERLY 
    if(empty($memberRole)){
        array_push($errors, "Member's Role is required");
    }
    if(empty($firstName)){
        array_push($errors, "First Name is required");
    }
    if(empty($userEmail)){
        array_push($errors, "Email is required");
    }
    if(empty($userPhone)){
        array_push($errors, "Phone Number is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if($password != $vpassword){
        array_push($errors, "Passwords not matching");
    }

    if(count($errors) == 0) {
        $sqlslt="SELECT * FROM users WHERE email='$userEmail';";
        $rowcheck = mysqli_query($conn, $sqlslt);
        $row = mysqli_fetch_assoc($rowcheck);
            if($userEmail==$row['email'])
            {
                array_push($errors, "Email already exists.");
            }
            elseif($Username==$row['username']){
                array_push($errors, "Username already exists.");
            }
            else{
              //$password = md5($password); // encrpty password before storing in database (security)
              $sql = "INSERT INTO users (username, firstname, lastname, email, phone, password, user_status, created_date) VALUES('$Username', '$firstName','$lastName', '$userEmail', '$userPhone', '$password', '$memberRole', '$created_date')";
              
              if (mysqli_query($conn, $sql)) {
                  array_push($successes, "Account created successfully");
              } else {            
                array_push($errors, "Registeration unsuccessful!");
              }
            }
            mysqli_close($conn);
    }
}
           
// CHANGE PASSWORD
if (isset($_POST['updatePassword'])){
    $newPassword = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['v_password']);
    
    $id = $_SESSION['id'];
    if(empty($newPassword)){
        array_push($errors, "Password is required");
    }
    if($newPassword != $confirmPassword){
        array_push($errors, "Passwords not matching");
    }
    if (count($errors) == 0){
        $query = mysqli_query($conn, "SELECT * FROM users WHERE id='".$id."'");
        $row = mysqli_fetch_assoc($query);

        if(mysqli_num_rows($query) == 1)
        {
            $upquery = "UPDATE users SET password='$newPassword', modified_date='$modifyDate' WHERE id='$id'";

            if (mysqli_query($conn, $upquery)) {
                array_push($successes, "Record updated successfully");
                mysqli_close($conn);
            } else {
                array_push($errors, "Error updating record ") .$conn->error;
            }
        }else{            
            array_push($errors, "This Password can't be change. Contact Admin!");
        }
    }
}

// ADD CLIENT TO LIST
if (isset($_POST['btnAddClient'])){
    $clientName = mysqli_real_escape_string($conn, $_POST['clientName']);
    $otherName = mysqli_real_escape_string($conn, $_POST['otherName']);
    $clientEmail = mysqli_real_escape_string($conn, $_POST['clientEmail']);
    $clientPhone = mysqli_real_escape_string($conn, $_POST['clientPhone']);
    $clientwhatsapp = mysqli_real_escape_string($conn, $_POST['clientwhatsapp']);
    $clientOtherPhone = mysqli_real_escape_string($conn, $_POST['clientOtherPhone']);
    $clientLocality = mysqli_real_escape_string($conn, $_POST['clientLocality']);
    $clientState = mysqli_real_escape_string($conn, $_POST['clientState']);
    $clientGender = mysqli_real_escape_string($conn, $_POST['clientGender']);
    // $clientDOB = mysqli_real_escape_string($conn, $_POST['clientDOB']);
    $clientAddress = mysqli_real_escape_string($conn, $_POST['clientAddress']);
    $clientCompany = mysqli_real_escape_string($conn, $_POST['clientCompany']);
    $clientFacebook = mysqli_real_escape_string($conn, $_POST['clientFacebook']);
    $clientTwitter = mysqli_real_escape_string($conn, $_POST['clientTwitter']);
    $clientInstagram = mysqli_real_escape_string($conn, $_POST['clientInstagram']);

    // clientID    
    $idDate = date('m');
    $randomDigit = '';
    $digits = '0123456789';
    $digitsLenght = strlen($digits);
    for ($x = 0; $x < 4; $x++){
        $randomDigit .=$digits[rand(0, $digitsLenght - 1)];
    }
    $clientID = 'RC'.($idDate).($randomDigit);

    //clientIMG
    $filename = $_FILES["clientImage"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.'));
	$file_ext = substr($filename, strripos($filename, '.'));
	$filesize = $_FILES["clientImage"]["size"];
    $allowed_file_types = array('.png','.jpg','jpeg');
    if (in_array($file_ext,$allowed_file_types) && ($filesize < 5242880))
	{
        $imgDate = date("YmdHis");
        $characters = '0123456789_';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 3; $i++) { 
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $clientPic = 'client-'.($imgDate).($randomString) . $file_ext;
        move_uploaded_file($_FILES["clientImage"]["tmp_name"], "../images/clients/" . $clientPic);
	}
	elseif ($filesize > 5242880) // if more than 5MB 
	{	
        array_push($errors, "The file you are trying to upload is too large.");	
	}
	else
	{
        $clientPic = "user_image.png";
    }

    //Validating form required fields
    if(empty($clientName)){
        array_push($errors, "Client Name is required");
    }
    if(empty($clientPhone)){
        array_push($errors, "Phone Number is required");
    }
    if(empty($clientLocality)){
        array_push($errors, "Locality is required");
    }
    if(empty($clientState)){
        array_push($errors, "State is required");
    }

    if(count($errors) == 0){
        $selectdata = "SELECT * FROM client WHERE client_name = '$clientName';";
        $rowcheck = mysqli_query($conn, $selectdata);
        $row = mysqli_fetch_assoc($rowcheck);
        if($clientName==$row['client_name'])
        {
            array_push($errors, "Client Name already exists.");
        }
        else{
          $sql = "INSERT INTO client (client_id, client_name, other_name, client_email, client_phone, whatsapp, client_phone2, address, locality, state, gender, client_img, company_name, facebook_url, twitter_url, instagram_url, created_date) VALUES('$clientID', '$clientName', '$otherName', '$clientEmail', '$clientPhone', '$clientwhatsapp', '$clientOtherPhone', '$clientAddress', '$clientLocality', '$clientState', '$clientGender', '$clientPic', '$clientCompany', '$clientFacebook', '$clientTwitter', '$clientInstagram', '$created_date')";
           
          if (mysqli_query($conn, $sql)) {
              array_push($successes, "Client Registered successfully");
                mysqli_close($conn);
          }
        }
    }
}

// GET ID FROM DATABASE
if(isset($_GET['edit_id'])){
    $sqlQuery = "SELECT * FROM client WHERE id =".$_GET['edit_id'];
    $rowQuery = mysqli_query($conn, $sqlQuery);
    $row = mysqli_fetch_array($rowQuery);
    
    $created_date = strtotime($row['created_date']) + 3600; // add +1 hour (3600)
    $createdDate = date('M d, Y h:iA', $created_date);
    // $createdDate = date('d-M-Y', $created_date);
    $clientID = $row['client_id'];
    $clientPic = $row['client_img'];
    $clientName = $row['client_name'];
    $otherName = $row['other_name'];
    $clientEmail = $row['client_email'];
    $clientPhone = $row['client_phone'];
    $clientwhatsapp = $row['whatsapp'];
    $clientOtherPhone = $row['client_phone2'];
    $clientAddress = $row['address'];
    $clientLocality = $row['locality'];
    $clientState = $row['state'];
    $clientGender = $row['gender'];
    $clientCompany = $row['company_name'];
    $clientFacebook = $row['facebook_url'];
    $clientTwitter = $row['twitter_url'];
    $clientInstagram = $row['instagram_url']; 
    
    // UPDATE RECORD
    if(isset($_POST['btnUpdateClient'])){
        $clientName = mysqli_real_escape_string($conn, $_POST['clientName']);
        $otherName = mysqli_real_escape_string($conn, $_POST['otherName']);
        $clientEmail = mysqli_real_escape_string($conn, $_POST['clientEmail']);
        $clientPhone = mysqli_real_escape_string($conn, $_POST['clientPhone']);
        $clientwhatsapp = mysqli_real_escape_string($conn, $_POST['clientwhatsapp']);
        $clientOtherPhone = mysqli_real_escape_string($conn, $_POST['clientOtherPhone']);
        $clientLocality = mysqli_real_escape_string($conn, $_POST['clientLocality']);
        $clientState = mysqli_real_escape_string($conn, $_POST['clientState']);
        $clientGender = mysqli_real_escape_string($conn, $_POST['clientGender']);
        // $clientDOB = mysqli_real_escape_string($conn, $_POST['clientDOB']);
        $clientAddress = mysqli_real_escape_string($conn, $_POST['clientAddress']);
        $clientCompany = mysqli_real_escape_string($conn, $_POST['clientCompany']);
        $clientFacebook = mysqli_real_escape_string($conn, $_POST['clientFacebook']);
        $clientTwitter = mysqli_real_escape_string($conn, $_POST['clientTwitter']);
        $clientInstagram = mysqli_real_escape_string($conn, $_POST['clientInstagram']);

        //clientIMG
        $filename = $_FILES["clientImage"]["name"];
        $file_basename = substr($filename, 0, strripos($filename, '.'));
        $file_ext = substr($filename, strripos($filename, '.'));
        $filesize = $_FILES["clientImage"]["size"];
        $allowed_file_types = array('.png','.jpg','jpeg');
        if (in_array($file_ext,$allowed_file_types) && ($filesize < 5242880))
        {
            $imgDate = date("YmdHis");
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 3; $i++) { 
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $clientPic = 'IMG-'.($imgDate).($randomString) . $file_ext;
            move_uploaded_file($_FILES["clientImage"]["tmp_name"], "../images/clients/" . $clientPic);
        }
        if ($filesize > 5242880) // if more than 5MB 
        {	
            array_push($errors, "The file you are trying to upload is too large. Kindly upload below 5MB");	
            //mysqli_close($conn);
        }
        if(count($errors) == 0){       
            $update = mysqli_query($conn, "UPDATE client SET client_name='$clientName', other_name='$otherName', client_email='$clientEmail', client_phone='$clientPhone', whatsapp='$clientwhatsapp', client_phone2='$clientOtherPhone', address='$clientAddress', locality='$clientLocality', state='$clientState', gender='$clientGender', client_img='$clientPic', company_name='$clientCompany', facebook_url='$clientFacebook', twitter_url='$clientTwitter', instagram_url='$clientInstagram', modified_date='$modifyDate' WHERE  id=".$_GET['edit_id']);
            if($update){
                array_push($successes, "Successfully Updated.");
                mysqli_close($conn);
            }
        }
    }
}

// DELETE RECORD
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sqlQuery = mysqli_query($conn, "DELETE FROM client WHERE id='".$id."'");
    if($sqlQuery){
        array_push($successes, "Record Deleted Successfully!");
        mysqli_close($conn);
        header('location: clients.php');
    }
}

/* ***************************
    MEASUREMENT SECTION
****************************** */
// ADD CLIENT MEASUREMENT TO LIST
if (isset($_POST['addMeasurement'])){
    $clientID = mysqli_real_escape_string($conn, $_POST['clientID']);
    $measureShoulder = mysqli_real_escape_string($conn, $_POST['measureShoulder']);
    $measureChest = mysqli_real_escape_string($conn, $_POST['measureChest']);
    $measureShortL = mysqli_real_escape_string($conn, $_POST['measureShortL']);
    $measureShortSleeveL = mysqli_real_escape_string($conn, $_POST['measureShortSleeveL']);
    $measureLongL = mysqli_real_escape_string($conn, $_POST['measureLongL']);
    $measureLongSleeveL = mysqli_real_escape_string($conn, $_POST['measureLongSleeveL']);
    $measureAgbadaL = mysqli_real_escape_string($conn, $_POST['measureAgbadaL']);
    $measureAgbadaSleeveL = mysqli_real_escape_string($conn, $_POST['measureAgbadaSleeveL']);
    $measureSleeveRound = mysqli_real_escape_string($conn, $_POST['measureSleeveRound']);
    $measureNeck = mysqli_real_escape_string($conn, $_POST['measureNeck']);
    $measureCap = mysqli_real_escape_string($conn, $_POST['measureCap']);
    $measureSleeveChoice = mysqli_real_escape_string($conn, $_POST['measureSleeveChoice']);
    $measureTLength = mysqli_real_escape_string($conn, $_POST['measureTLength']);
    $measureTShort = mysqli_real_escape_string($conn, $_POST['measureTShort']);
    $measureTWaist = mysqli_real_escape_string($conn, $_POST['measureTWaist']);
    $measureTThigh = mysqli_real_escape_string($conn, $_POST['measureTThigh']);
    $measureTFlap = mysqli_real_escape_string($conn, $_POST['measureTFlap']);
    $measureTKnee = mysqli_real_escape_string($conn, $_POST['measureTKnee']);
    $measureTCaf = mysqli_real_escape_string($conn, $_POST['measureTCaf']);
    $measureTBottom = mysqli_real_escape_string($conn, $_POST['measureTBottom']);

    if(empty($clientID)){
        array_push($errors, "Client ID is required");
    }

    if(count($errors) == 0){
        $sltdata = "SELECT * FROM measurement WHERE client_id = '$clientID';";
        $rowcheck = mysqli_query($conn, $sltdata);
        $row = mysqli_fetch_assoc($rowcheck);
        if($clientID==$row['client_id'])
        {
            array_push($errors, "Client's Measurement already exist.");
        }

        if(count($errors) == 0){
            $sltdata = "SELECT * FROM client WHERE client_id = '$clientID';";
            $rowcheck = mysqli_query($conn, $sltdata);
            $row = mysqli_fetch_assoc($rowcheck);
            if($clientID==$row['client_id'])
            {
            $sql = "INSERT INTO measurement (client_id, top_shoulder, top_chest, top_shortL, top_shortSleeveL, top_longL, top_longSleeveL, top_agbadaL, top_agbadaSleeveL, top_sleevesRound, top_neck, cap, top_sleevesType, trouser_length, trouser_short, trouser_waist, trouser_thigh, trouser_flap, trouser_knee, trouser_caf, trouser_bottom, created_date) VALUES('$clientID', '$measureShoulder', '$measureChest', '$measureShortL', '$measureShortSleeveL', '$measureLongL', '$measureLongSleeveL', '$measureAgbadaL', '$measureAgbadaSleeveL', '$measureSleeveRound', '$measureNeck', '$measureCap', '$measureSleeveChoice', '$measureTLength', '$measureTShort', '$measureTWaist', '$measureTThigh', '$measureTFlap', '$measureTKnee', '$measureTCaf', '$measureTBottom', '$created_date')";
            
            if (mysqli_query($conn, $sql)) {
                array_push($successes, "Client's Measurement Registered successfully");
                    mysqli_close($conn);
            }
            }
            else{
                array_push($errors, "Client's ID does not exist.");
            }
        }
        
    }
}
// GET ID FOR MEASUREMENT
if(isset($_GET['client_id'])){
    // $sqlQuery = "SELECT * FROM client WHERE id =".$_GET['client_id'];
    $sqlQuery = "SELECT c.client_name, c.client_phone, m.* FROM client c, measurement m WHERE c.client_id = m.client_id AND m.id =".$_GET['client_id'];
    $rowQuery = mysqli_query($conn, $sqlQuery);
    $row = mysqli_fetch_array($rowQuery);
    
    $created_date = strtotime($row['created_date']) + 3600;
    $createdDate = date('M d, Y', $created_date);
    $clientID = $row['client_id'];
    $clientName = $row['client_name'];
    $clientPhone = $row['client_phone'];
    $measureShoulder = $row['top_shoulder'];
    $measureChest = $row['top_chest'];
    $measureShortL = $row['top_shortL'];
    $measureShortSleeveL = $row['top_shortSleeveL'];
    $measureLongL = $row['top_longL'];
    $measureLongSleeveL = $row['top_longSleeveL'];
    $measureAgbadaL = $row['top_agbadaL'];
    $measureAgbadaSleeveL = $row['top_agbadaSleeveL'];
    $measureSleeveRound = $row['top_sleevesRound'];
    $measureNeck = $row['top_neck'];
    $measureCap = $row['cap'];
    $measureSleeveChoice = $row['top_sleevesType'];
    $measureTLength = $row['trouser_length'];
    $measureTShort = $row['trouser_short'];
    $measureTWaist = $row['trouser_waist'];
    $measureTThigh = $row['trouser_thigh'];
    $measureTFlap = $row['trouser_flap'];
    $measureTKnee = $row['trouser_knee'];
    $measureTCaf = $row['trouser_caf'];
    $measureTBottom = $row['trouser_bottom'];
    
    // UPDATE MEASUREMENT RECORD
    if(isset($_POST['updateMeasurement'])){
        $clientID = mysqli_real_escape_string($conn, $_POST['clientID']);
        $measureShoulder = mysqli_real_escape_string($conn, $_POST['measureShoulder']);
        $measureChest = mysqli_real_escape_string($conn, $_POST['measureChest']);
        $measureShortL = mysqli_real_escape_string($conn, $_POST['measureShortL']);
        $measureShortSleeveL = mysqli_real_escape_string($conn, $_POST['measureShortSleeveL']);
        $measureLongL = mysqli_real_escape_string($conn, $_POST['measureLongL']);
        $measureLongSleeveL = mysqli_real_escape_string($conn, $_POST['measureLongSleeveL']);
        $measureAgbadaL = mysqli_real_escape_string($conn, $_POST['measureAgbadaL']);
        $measureAgbadaSleeveL = mysqli_real_escape_string($conn, $_POST['measureAgbadaSleeveL']);
        $measureSleeveRound = mysqli_real_escape_string($conn, $_POST['measureSleeveRound']);
        $measureNeck = mysqli_real_escape_string($conn, $_POST['measureNeck']);
        $measureCap = mysqli_real_escape_string($conn, $_POST['measureCap']);
        $measureSleeveChoice = mysqli_real_escape_string($conn, $_POST['measureSleeveChoice']);
        $measureTLength = mysqli_real_escape_string($conn, $_POST['measureTLength']);
        $measureTShort = mysqli_real_escape_string($conn, $_POST['measureTShort']);
        $measureTWaist = mysqli_real_escape_string($conn, $_POST['measureTWaist']);
        $measureTThigh = mysqli_real_escape_string($conn, $_POST['measureTThigh']);
        $measureTFlap = mysqli_real_escape_string($conn, $_POST['measureTFlap']);
        $measureTKnee = mysqli_real_escape_string($conn, $_POST['measureTKnee']);
        $measureTCaf = mysqli_real_escape_string($conn, $_POST['measureTCaf']);
        $measureTBottom = mysqli_real_escape_string($conn, $_POST['measureTBottom']);
        if(empty($clientID)){
            array_push($errors, "Client ID is required");
        }

        if(count($errors) == 0){       
            $update = mysqli_query($conn, "UPDATE measurement SET top_shoulder='$measureShoulder', top_chest='$measureChest', top_shortL='$measureShortL', top_shortSleeveL='$measureShortSleeveL', top_longL='$measureLongL', top_longSleeveL='$measureLongSleeveL', top_agbadaL='$measureAgbadaL', top_agbadaSleeveL='$measureAgbadaSleeveL', top_sleevesRound='$measureSleeveRound', top_neck='$measureNeck', cap='$measureCap', top_sleevesType='$measureSleeveChoice', trouser_length='$measureTLength', trouser_short='$measureTShort', trouser_waist='$measureTWaist', trouser_thigh='$measureTThigh', trouser_flap='$measureTFlap', trouser_knee='$measureTKnee', trouser_caf='$measureTCaf', trouser_bottom='$measureTBottom', modified_date='$modifyDate' WHERE  id=".$_GET['client_id']);
            if($update){
                array_push($successes, "Successfully Updated.");
                mysqli_close($conn);
            }
        }
    }
}
// DELETE MEASUREMENT RECORD
if(isset($_GET['m_d'])){
    $id = $_GET['m_d'];
    $sqlQuery = mysqli_query($conn, "DELETE FROM measurement WHERE id='".$id."'");
    if($sqlQuery){
        array_push($successes, "Record Deleted Successfully!");
        mysqli_close($conn);
        header('location: clients-measurement.php');
    }
}

/* ***************************
    WARDROBE SECTION
****************************** */
// ADD PACKAGE TO WARDROBE
if (isset($_POST['addPackage'])){
    $clientID = mysqli_real_escape_string($conn, $_POST['clientID']);
    $receivedDate = mysqli_real_escape_string($conn, $_POST['receivedDate']);
    // $uploadMaterial = mysqli_real_escape_string($conn, $_POST['uploadMaterial']);
    $outfitType = mysqli_real_escape_string($conn, $_POST['outfitType']);
    $packageAmount = mysqli_real_escape_string($conn, $_POST['amount']);
    $amountPaid = mysqli_real_escape_string($conn, $_POST['amountPaid']);
    $deliveryDate = mysqli_real_escape_string($conn, $_POST['deliveryDate']);
    $clientNote = mysqli_real_escape_string($conn, $_POST['clientNote']);

    if(empty($clientID)){
        array_push($errors, "Client ID is required");
    }
    //clientIMG
    $filename = $_FILES["uploadMaterial"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.'));
	$file_ext = substr($filename, strripos($filename, '.'));
	$filesize = $_FILES["uploadMaterial"]["size"];
    $allowed_file_types = array('.png','.jpg','jpeg');
    if (in_array($file_ext,$allowed_file_types) && ($filesize < 5242880))
	{
        $imgDate = date("YmdHis");
        $characters = '0123456789_';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 3; $i++) { 
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $materialPix = 'package-'.($imgDate).($randomString) . $file_ext;
        move_uploaded_file($_FILES["uploadMaterial"]["tmp_name"], "../images/" . $materialPix);
    }
	elseif ($filesize > 5242880)
	{	
        array_push($errors, "The file you are trying to upload is too large.");	
	}
	else
	{
        $materialPix = "default-material.jpg";
    }

    if(count($errors) == 0){
        $sltdata = "SELECT * FROM measurement WHERE client_id = '$clientID';";
        $rowcheck = mysqli_query($conn, $sltdata);
        $row = mysqli_fetch_assoc($rowcheck);
        if($clientID==$row['client_id'])
        {
          $sql = "INSERT INTO wardrobe (client_id, outfit_type, amount, amount_paid, received_date, delivery_date, material_image, outfit_note, created_date) VALUES('$clientID', '$outfitType', '$packageAmount', '$amountPaid', '$receivedDate', '$deliveryDate', '$materialPix', '$clientNote', '$created_date')";
           
          if (mysqli_query($conn, $sql)) {
              array_push($successes, "Package added to Wardrobe successfully");
                mysqli_close($conn);
          }
        }
        else{            
            array_push($errors, "Client's ID or Measurement does not exist.");
        }
    }
}
// GET ID FOR WARDROBE
if(isset($_GET['package-id'])){
    $sqlQuery = "SELECT c.client_name, c.client_phone, w.* FROM client c, wardrobe w WHERE c.client_id = w.client_id AND w.id =".$_GET['package-id'];
    $rowQuery = mysqli_query($conn, $sqlQuery);
    $row = mysqli_fetch_array($rowQuery);
    
    $created_date = strtotime($row['created_date']) + 3600;
    $createdDate = date('M d, Y', $created_date);
    $clientID = $row['client_id'];
    $clientName = $row['client_name'];
    $materialPix = $row['material_image'];
    $receivedate = date_create($row['received_date']);
    $receivedDate = date_format($receivedate, 'Y-m-d');  
    $outfitType = $row['outfit_type'];
    $packageAmount = $row['amount'];
    $amountPaid = $row['amount_paid'];
    $deliveredStatus = $row['delivery_status'];
    $deliverdate = date_create($row['delivery_date']);
    $deliveryDate = date_format($deliverdate, 'Y-m-d'); 
    $deliveredBy = $row['delivered_by']; 
    $deliverOther = $row['delivered_other']; 
    $note = $row['outfit_note'];
    
    // UPDATE WARDROBE PACKAGE RECORD
    if(isset($_POST['updatePackage'])){
        // $clientID = mysqli_real_escape_string($conn, $_POST['clientID']);
        $outfitType = mysqli_real_escape_string($conn, $_POST['outfitType']);
        $packageAmount = mysqli_real_escape_string($conn, $_POST['packageAmount']);
        $amountPaid = mysqli_real_escape_string($conn, $_POST['packageAmtPaid']);
        $deliveredStatus = (isset($_POST['deliveredStatus'])) ? 1 : 0;
        $deliveryDate = mysqli_real_escape_string($conn, $_POST['deliveryDate']);
        $deliveredBy = mysqli_real_escape_string($conn, $_POST['deliveredBy']);
        $deliverOther = mysqli_real_escape_string($conn, $_POST['deliveryName']);
        $note = mysqli_real_escape_string($conn, $_POST['clientNote']);
        //clientIMG
        $filename = $_FILES["uploadMaterial"]["name"];
        $file_ext = substr($filename, strripos($filename, '.'));
        $filesize = $_FILES["uploadMaterial"]["size"];
        $allowed_file_types = array('.png','.jpg','jpeg');
        if (in_array($file_ext,$allowed_file_types) && ($filesize < 5242880))
        {
            $imgDate = date("YmdHis");
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 3; $i++) { 
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $materialPix = 'QTpackage-'.($imgDate).($randomString) . $file_ext;
            move_uploaded_file($_FILES["uploadMaterial"]["tmp_name"], "../images/" . $materialPix);
        }
        if ($filesize > 5242880)
        {	
            array_push($errors, "The file you are trying to upload is too large. Kindly upload below 5MB");
        }

        if(count($errors) == 0){
            $update = mysqli_query($conn, "UPDATE wardrobe SET outfit_type='$outfitType', amount='$packageAmount', amount_paid='$amountPaid', delivery_date='$deliveryDate', delivery_status='$deliveredStatus', delivered_by='$deliveredBy', delivered_other='$deliverOther', material_image='$materialPix', outfit_note='$note', modified_date='$modifyDate' WHERE  id=".$_GET['package-id']);
            
            if($update){
                array_push($successes, "Successfully Updated.");
                mysqli_close($conn);
            }
        }
    }
}

// DELETE PACKAGE FROM WARDROBE RECORD
if(isset($_GET['w_d'])){
    $id = $_GET['w_d'];
    $sqlQuery = mysqli_query($conn, "DELETE FROM wardrobe WHERE id='".$id."'");
    if($sqlQuery){
        array_push($successes, "Package Deleted Successfully!");
        mysqli_close($conn);
        header('location: wardrobe-monitor.php');
    }
}

// DELETE USER RECORD
if(isset($_GET['u_d'])){
    $id = $_GET['u_d'];
    $sqlQuery = mysqli_query($conn, "DELETE FROM users WHERE id='".$id."'");
    if($sqlQuery){
        array_push($successes, "Member Deleted Successfully!");
        mysqli_close($conn);
        header('location: users-list.php');
    }
}

// LOG OUT
if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
    unset($_SESSION['userName']);
    header('location: ../login.php');
    mysqli_close($conn);
}
?>