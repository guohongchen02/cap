<?php

include_once "includes/html_top.php";

session_start();

include_once "login_check.php";

include_once "includes/php_header.php";

$heading = "Config Update";

include_once "includes/functions.php";

include_once "includes/html_header.php";

echo "<h1>" . $heading . "</h1>";
		
// ARRAYS

// -- CREATE ARRAY OF FORM FIELD NAMES SO WE CAN LOOP THROUGH THEM
//    This is an associative array, meaning that each of the variables in the array is given a name.

$form_fields=array();

$form_fields["webname"]="text";
$form_fields["tel"]="text";
$form_fields["address"]="text";
$form_fields["copyright"]="text";
$form_fields["email"]="text";
$form_fields["businesshours"]="text";
$form_fields["dimsumservice"]="text";
$form_fields["indexkeywords"]="textarea";
$form_fields["menukeywords"]="textarea";
$form_fields["dimsumkeywords"]="textarea";
$form_fields["cateringkeywords"]="textarea";
$form_fields["aboutkeywords"]="textarea";
$form_fields["contactkeywords"]="textarea";
$form_fields["indexdescription"]="textarea";
$form_fields["menudescription"]="textarea";
$form_fields["dimsumdescription"]="textarea";
$form_fields["cateringdescription"]="textarea";
$form_fields["aboutdescription"]="textarea";
$form_fields["contactdescription"]="textarea";
$form_fields["image_path"]="text";
$form_fields["style_path"]="text";
$form_fields["style_page"]="text";
$form_fields["programmer"]="text";


		
// -- CHECK EACH FIELD FOR MISSING DATA AND SANITIZE

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

// exit if missing data in any but checkboxes

if($missing_count > 0) {

     echo "<br />Please <a href='config.php'>Go Back</a> and fill in the missing data.<br>";
     exit;

}
		
		
		
// ASSIGN DATA TO VARIABLES FOR EASIER HANDLING
$webname=$_POST["webname"];
$tel=$_POST["tel"];
$address=$_POST["address"];
$copyright=$_POST["copyright"];
$email=$_POST["email"];
$businesshours=$_POST["businesshours"];
$dimsumservice=$_POST["dimsumservice"];
$indexkeywords=$_POST["indexkeywords"];
$menukeywords=$_POST["menukeywords"];
$dimsumkeywords=$_POST["dimsumkeywords"];
$cateringkeywords=$_POST["cateringkeywords"];
$aboutkeywords=$_POST["aboutkeywords"];
$contactkeywords=$_POST["contactkeywords"];
$indexdescription=$_POST["indexdescription"];
$menudescription=$_POST["menudescription"];
$dimsumdescription=$_POST["dimsumdescription"];
$cateringdescription=$_POST["cateringdescription"];
$aboutdescription=$_POST["aboutdescription"];
$contactdescription=$_POST["contactdescription"];
$image_path=$_POST["image_path"];
$style_path=$_POST["style_path"];
$style_page=$_POST["style_page"];
$programmer=$_POST["programmer"];

	
// CONNECT TO DATABASE (Step 1)

include_once "includes/connection.php";

// SQL STATEMENT
 
$sql="UPDATE config SET webname = '$webname', tel = '$tel', address = '$address', copyright = '$copyright', email = '$email', businesshours = '$businesshours', dimsumservice = '$dimsumservice', indexkeywords = '$indexkeywords', menukeywords = '$menukeywords', dimsumkeywords = '$dimsumkeywords', cateringkeywords = '$cateringkeywords', aboutkeywords = '$aboutkeywords', contactkeywords = '$contactkeywords', indexdescription = '$indexdescription', menudescription = '$menudescription', dimsumdescription = '$dimsumdescription', cateringdescription = '$cateringdescription', aboutdescription = '$aboutdescription', contactdescription = '$contactdescription', image_path = '$image_path', style_path = '$style_path', style_page = '$style_page', programmer = '$programmer' WHERE id = '1'";



// Display SQL for learning and trouble-shooting
     
echo "<p>Web config: <br>" . "webname: " . $webname . "<br>tel: " . $tel . "<br>address: " . $address . "<br>copyright: " . $copyright . "<br>email: " . $email . "<br>businesshours: " . $businesshours . "<br>dimsumservice: " . $dimsumservice . "<br>indexkeywords: " . $indexkeywords . "<br>$menukeywords: " . $menukeywords . "<br>dimsumkeywords: " . $dimsumkeywords . "<br>cateringkeywords: " . $cateringkeywords . "<br>aboutkeywords: " . $aboutkeywords . "<br>contactkeywords: " . $contactkeywords . "<br>indexdescription: " . $indexdescription . "<br>menudescription: " . $menudescription . "<br>dimsumdescription: " . $dimsumdescription . "<br>cateringdescription: " . $cateringdescription . "<br>aboutdescription: " . $aboutdescription . "<br>contactdescription: " . $contactdescription . "<br>image_path: " . $image_path . "<br>style_path: " . $style_path . "<br>style_page: " . $style_page . "<br>programmer: " . $programmer . "</p>";	



// RUN QUERY
     
// Run a query
try {
     $result = $connection->query($sql);
   
} 
catch (PDOException $e) {
     die("<p>Query failed! </p>" . $e->getMessage());
}

// link to view guestbook page
echo "<p><a href='config.php'>BACK!</a></p>";



// ===================================================== 
// FOOTER -->

include_once "includes/footer.php";

?>