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
		<p>Within close proximity to freeway I-205, the Ocean City Seafood Restaurant is centrally located in the heart of SE Portland shopping area. In addition to convenient access, there are ample parking spaces for you and your guests.</p>		
		
    </article>
	<article class="content2">
		<article class="left">
			<form id="form1" name="form1" method="post" action="contact_add_action.php">
			<label for="Name">*Name:</label>
			<input type="text" name="name" id="name" required="required" placeholder="your name">
			<label for="myEmail">*E-mail address:</label>
			<input type="email" name="email" id="email" required="required" placeholder="your email">
			<label for="Subject">*Subject</label>
			<input type="text" name="subject" id="subject" required="required" placeholder="your subject">
			<label for="Message">*Message:</label>
			<textarea name="message" id="message" required="required" placeholder="your message"></textarea>
			<input type='submit' class="buttonc" name='Submit' value='Submit'>
		</form>
		</article>
		<aside>
		<iframe width="340" height="240" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3016+SE+82nd+Ave,+97266&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,56.25&amp;ie=UTF8&amp;hq=&amp;hnear=3016+SE+82nd+Ave,+Portland,+Multnomah,+Oregon+97266&amp;ll=45.500331,-122.578239&amp;spn=0.072191,0.102997&amp;z=12&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3016+SE+82nd+Ave,+97266&amp;sll=37.0625,-95.677068&amp;sspn=39.235538,56.25&amp;ie=UTF8&amp;hq=&amp;hnear=3016+SE+82nd+Ave,+Portland,+Multnomah,+Oregon+97266&amp;ll=45.500331,-122.578239&amp;spn=0.072191,0.102997&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</aside>
	</article>
	
	<article class="content2">
	 <p>Address: <?php echo $address; ?><br><br>
		 Email: <?php echo $email; ?><br><br>
		 Tel: <?php echo $tel; ?><br><br>
		 Business Hours: <?php echo $businesshours; ?><br>
		 Dim Sum Service: <?php echo $dimsumservice; ?></p>
	</article>
   
</section>
	
<?php require_once ('includes/footer.php'); ?>
