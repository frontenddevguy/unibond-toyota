<?php
require_once("libraries/ValidForm/class.validform.php");

$objForm = new ValidForm("contactForm", "Required fields are printed in bold.");
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
        "required" => TRUE
    ), 
    array(
        "maxLength" => "Your email too long. A maximum of %s characters is OK.", 
        "required" => "This field is required.", 
        "type" => "Use the format name@domain.com"
    ), array(
        "tip" => "name@domain.com"
    )
);

//*** A numeric field, field type is email.
$objForm->addField("mobile", "Mobile", VFORM_NUMERIC, 
    array(
        "maxLength" => 20, 
        "required" => TRUE
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
        // "required" => TRUE
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
        // "required" => TRUE
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
        // "required" => TRUE
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
        // "required" => TRUE
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
        // "required" => TRUE
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
		        $objCheckboxes->addField("Henkel and Screwfix would like to share your information with other carefully selected companies whose products & services we feel might interest you. If you would prefer not to receive this information please tick here
", "share_info_no_thanks");
        






//*** Setting the main alert.
$objForm->setMainAlert("One or more errors occurred. Check the marked fields and try again.");
//*** As this method already states, it sets the submit button's label.
$objForm->setSubmitLabel("Send");

$strOutput = $objForm->toHtml();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ValidForm Builder: Tutorial 2 - Advanced Contact Form >> Note 1</title>

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />

<link type="text/css" rel="stylesheet" href="../css/default.css" />
<link type="text/css" rel="stylesheet" href="css/validform.css" />
<link type="text/css" rel="stylesheet" href="css/validform-custom.css" />

<script type="text/javascript" src="libraries/jquery.js"></script>
<script type="text/javascript" src="libraries/validform.js"></script>

</head>
<body>
<div id="wrapper">
	<h1>ValidForm Builder: Tutorial 2 - Advanced Contact Form >> Note 1</h1>
	<?php echo $strOutput; ?>
	
	<a href="">linky</a>
</div>
</body>
</html>

