<?php
require_once("libraries/ValidForm/class.validform.php");

$objForm = new ValidForm("contactForm", "Required fields*");
//*** A 'name' field, field type is string.
$objForm->addField("full_name", "Full name*", VFORM_STRING, 
    array(
        "maxLength" => 60, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your name is too long. A maximum of %s characters is OK.", 
        "required" => "Please enter your full name.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("your_trade", "Your trade", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "Please enter a valid email address", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("business_name", "Business name", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("business_type", "Business type (e.g. builder, plumber)", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** An e-mail field, field type is email.
$objForm->addField("email", "Email address", VFORM_EMAIL, 
    array(
        "maxLength" => 255, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your email too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Use the format name@domain.com"
    )
);

//*** A numeric field, field type is email.
$objForm->addField("mobile", "Telephone / Mobile*", VFORM_CUSTOM, 
    array(
        "maxLength" => 30, 
        "required" => TRUE,
    
	// The custom regular expression for validation
	     // "validation" => "((?:[a-z][a-z0-9_]*\+))"
	), 
    array(
        "maxLength" => "Your number is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only numbers."
	)
);

//*** A 'name' field, field type is string.
$objForm->addField("house_name_number", "House name / number*", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("street", "Street*", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("street_cont", "Street (cont.)", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        "required" => FALSE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("town", "Town*", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("county", "County", VFORM_STRING, 
    array(
        "maxLength" => 255, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("postcode", "Postcode*", VFORM_STRING, 
    array(
        "maxLength" => 8, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your post code is too long. A maximum of %s characters is OK.", 
        "required" => "Please enter a postcode", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("screwfix_invoice_number", "Screwfix invoice number*", VFORM_STRING, 
    array(
        "maxLength" => 50, 
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your invoice number is too long. A maximum of %s characters is OK.", 
        "required" => "Please enter a screwfix invoice number", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("screwfix_store", "Screwfix store", VFORM_STRING, 
    array(
        "maxLength" => 50, 
        // "required" => TRUE
    ), 
    array(
        "maxLength" => "Your store name is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

$objForm->addField("form_type", "form_type", VFORM_HIDDEN, 
    array(
        "maxLength" => 50, 
        "required" => FALSE
    ), 
    array(
        "maxLength" => "Your store name is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

$objCheckboxes = $objForm->addField("further_info", "", VFORM_CHECK_LIST,
        array(
                "required" => false
        ),
        array(
                "required" => "Please tell us WHY!"
        )
);
        $objCheckboxes->addField("Henkel would like to send you further information about our range of trade products that might interest you. If you would prefer not to receive this information please tick here", "No");
		
		
		$objCheckboxes = $objForm->addField("share_info", "", VFORM_CHECK_LIST,
		        array(
		                "required" => false
		        ),
		        array(
		                "required" => "Please tell us WHY!"
		        )
		);
		        $objCheckboxes->addField("Henkel and Screwfix would like to share your information with other carefully selected companies whose products &amp; services we feel might interest you. If you would prefer not to receive this information please tick here
", "No");
        
//*** Setting the main alert.
$objForm->setMainAlert("One or more errors occurred. Check the marked fields and try again.");
//*** As this method already states, it sets the submit button's label.
$objForm->setSubmitLabel("Submit");

// $strOutput = $objForm->toHtml();


$strOutput = "";

if ($objForm->isSubmitted() && $objForm->isValid()) {
	
$full_name = $_POST['full_name'];
$your_trade = $_POST['your_trade'];
$business_name = $_POST['business_name'];
$business_type = $_POST['business_type'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$house_name_number = $_POST['house_name_number'];
$street = $_POST['street'];
$street_cont = $_POST['street_cont'];
$town = $_POST['town'];
$county = $_POST['county'];
$postcode = $_POST['postcode'];
$screwfix_invoice_number = $_POST['screwfix_invoice_number'];
$screwfix_store = $_POST['screwfix_store'];
$further_info_arr = $_POST['further_info'];
$further_info = $further_info_arr[0];
$share_info_arr = $_POST['share_info'];
$share_info = $share_info_arr[0];

if($share_info != 'No'){
	$share_info = 'Yes';
}

if($further_info != 'No'){
	$further_info = 'Yes';
}
	//the example of inserting data with variable from HTML form
	//input.php
	mysql_connect("mysql.positive-internet.com","unibscrw","4opera24");//database connection
	mysql_select_db("unibscrw");
    $email_arr = array();
	
	$selectemail = "SELECT email from Form where email = '$email'";
	//echo $selectemail."<br/>";
	$selresult = mysql_query($selectemail);
	while($row = mysql_fetch_assoc($selresult)){
	$emailres = $row['email'];	
	//echo "emailres:: ".$emailres."<br/>";
	$email_arr[] = $emailres;
	}
	//print_r($email_arr);
	$emailcount = count($email_arr);
	//echo "emailcount:: " .$emailcount."<br>";
	if($emailcount >= 15){
		// do nothing
		//$objForm->setMainAlert("You have already applied for this offer!");
 
		//$strOutput = $objForm->toHtml();
		header("Location: thankyou.php",303);
	exit();
	} else{
	//inserting record in db
	$addRecord = "INSERT INTO Form VALUES ('NULL',
									   '$formtype',
									   '$full_name',
									   '$your_trade',
									   '$business_name',
									   '$business_type',
									   '$email', 					               
									   '$mobile',
									   '$house_name_number',									   
									   '$street',
									   '$street_cont',
									   '$town',
									   '$county',
									   '$postcode',
									   '$screwfix_invoice_number',
									   '$screwfix_store',
									   '$further_info',
									   '$share_info')";

	$result = mysql_query($addRecord);	//sql query executes
	//*** Set the output to a friendly thank you note.
	header("Location: thankyou.php?carType=$formtype",303);
	exit();
	}
}
	else {
    //*** The form has not been submitted or is not valid.
    $strOutput = $objForm->toHtml();
         }


?>