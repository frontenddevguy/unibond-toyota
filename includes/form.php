<?php
require_once("libraries/ValidForm/class.validform.php");

$objForm = new ValidForm("contactForm", "Please complete all fields.");
//*** A 'name' field, field type is string.
$objForm->addField("full_name", "Full name", VFORM_STRING, 
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
        "required" => TRUE
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
        "required" => TRUE
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
        "required" => TRUE
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
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your email too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Use the format name@domain.com"
    )
);

//*** A numeric field, field type is email.
$objForm->addField("mobile", "Mobile", VFORM_CUSTOM, 
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
$objForm->addField("house_name_number", "House name / number", VFORM_STRING, 
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
$objForm->addField("street", "Street", VFORM_STRING, 
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
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("town", "Town", VFORM_STRING, 
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
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your input is too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Enter only letters and spaces."
    )
);

//*** A 'name' field, field type is string.
$objForm->addField("postcode", "Postcode", VFORM_STRING, 
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
$objForm->addField("screwfix_invoice_number", "Screwfix invoice number", VFORM_STRING, 
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
        "required" => TRUE
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
        $objCheckboxes->addField("Henkel would like to send you further information about our range of trade products that might interest you. If you would prefer not to receive this information please tick here", "further_info_no_thanks");
		
		
		$objCheckboxes = $objForm->addField("share_info", "", VFORM_CHECK_LIST,
		        array(
		                "required" => false
		        ),
		        array(
		                "required" => "Please tell us WHY!"
		        )
		);
		        $objCheckboxes->addField("Henkel and Screwfix would like to share your information with other carefully selected companies whose products &amp; services we feel might interest you. If you would prefer not to receive this information please tick here
", "share_info_no_thanks");
        






//*** Setting the main alert.
$objForm->setMainAlert("One or more errors occurred. Check the marked fields and try again.");
//*** As this method already states, it sets the submit button's label.
$objForm->setSubmitLabel("Send");

// $strOutput = $objForm->toHtml();


$strOutput = "";

if ($objForm->isSubmitted() && $objForm->isValid()) {


	
	//the example of inserting data with variable from HTML form
	//input.php
	mysql_connect("localhost","root","admin");//database connection
	mysql_select_db("unibond-toyota_competition");

	//inserting data order
	$order = "INSERT INTO data_entries
				(full_name, your_trade)
				VALUES
				('$full_name',
				'$your_trade')";

	//declare in the order variable
	$result = mysql_query($user_info);	//order executes
	if($result){
		echo("<br>Input data is succeed");
	} else{
		echo("<br>Input data is fail");
	}
	
        
    //*** Set the output to a friendly thank you note.
	header("Location: thankyou.php",303);
	exit();
} else {
    //*** The form has not been submitted or is not valid.
    $strOutput = $objForm->toHtml();
}


?>