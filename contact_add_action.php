<?php require_once ('includes/config.php'); ?>

<?php require_once ('includes/header_meta.php'); ?>
	
<title>Contact | <?php echo $webname; ?></title>	
	
<meta name="keywords" content="<?php echo $contactkeywords; ?>">
<meta name="description" content="<?php echo $contactdescription; ?>">

<?php require_once ('includes/header.php'); ?>

<?php require_once ('includes/slidershow.php'); ?>	
	
<?php require_once ('includes/nav.php'); ?>
	
<section>
	
	<article class="content2">
		
		<h2>Contact Us!</h2>
		<p>Within close proximity to freeway I-205, the <?php echo $webname; ?> is centrally located in the heart of SE Portland shopping area. In addition to convenient access, there are ample parking spaces for you and your guests.</p>		
		
    </article>
	
	<article class="content2">
	<article class="left">
<?php
		
// ARRAYS

// -- CREATE ARRAY OF FORM FIELD NAMES SO WE CAN LOOP THROUGH THEM
//    This is an associative array, meaning that each of the variables in the array is given a name.

$form_fields=array();
		
$form_fields["name"]="text";
$form_fields["email"]="text";
$form_fields["subject"]="text";
$form_fields["message"]="textarea";



// ==========================================================		

include_once "admin/includes/functions.php";		
		
// -- CHECK EACH FIELD FOR MISSING DATA AND SANITIZE

foreach ($form_fields as $key => $value) { // Loop through form fields. Key is the name of the field, value is type of field

     check_submitted($key, $value, $missing_count);

     sanitize($key, $value, $_POST[$key]); // ESPECIALLY IMPORTANT NOW THAT WE ARE INSERTING INTO A DATABASE
     
}

// exit if missing data in any but checkboxes

if($missing_count > 0) {

     echo "<br />Please <a href='contact.php'>Go Back</a> and fill in the missing data.<br>";
     exit;

}
		
		
		
// ASSIGN DATA TO VARIABLES FOR EASIER HANDLING
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];



// CONNECT TO DATABASE (Step 1)

include_once "admin/includes/connection.php";

// SQL STATEMENT

$sql="INSERT INTO contact(name, email, subject, message)"
 . " VALUES('$name', '$email', '$subject', '$message');"; 

     
// Display SQL for learning and trouble-shooting
     
// echo "<p>2. Your message: " . $sql . "</p>";
echo "<p>2. Your message: <br>" . "Name: " . $name . "<br>Email" . $email . "<br>Subject: " . $subject . "<br>Message: " . $message . "</p>";		

// RUN QUERY
     
// Run a query
try {
     $result = $connection->query($sql);
     echo "<p>3. Your message has been successfully submitted!</p>";
} 
catch (PDOException $e) {
     die("<p>3. Query failed! </p>" . $e->getMessage());
}

// link to view guestbook page
echo "<p><a href='contact.php'>BACK!</a></p>";

?>
    </article>
  
		<aside>
		<iframe width="340" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3016+SE+82nd+Ave,+97266&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,56.25&amp;ie=UTF8&amp;hq=&amp;hnear=3016+SE+82nd+Ave,+Portland,+Multnomah,+Oregon+97266&amp;ll=45.500331,-122.578239&amp;spn=0.072191,0.102997&amp;z=12&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3016+SE+82nd+Ave,+97266&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,56.25&amp;ie=UTF8&amp;hq=&amp;hnear=3016+SE+82nd+Ave,+Portland,+Multnomah,+Oregon+97266&amp;ll=45.500331,-122.578239&amp;spn=0.072191,0.102997&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</aside>
	</article>
	
	<article class="content2">
	 <p>Address: 3016 Southeast 82nd Ave. Portland, OR 97266<br><br>
		 Email: info@oceancityportland.com<br><br>
		 Tel: (503) 771-2299<br><br>
		 Business Hours: Daily 9:30 AM ~ 12:00 AM<br>
		 Dim Sum Service Daily 9:30 AM ~ 3:00 PM</p>
	</article>
   
</section>
	
<?php require_once ('includes/footer.php'); ?>