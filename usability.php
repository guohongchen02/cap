<?php require_once ('includes/config.php'); ?>

<?php require_once ('includes/header_meta.php'); ?>
	
<title><?php echo $webname; ?></title>	
	
<meta name="keywords" content="<?php echo $indexkeywords; ?>">
<meta name="description" content="<?php echo $indexdescription; ?>">

<?php require_once ('includes/header.php'); ?>

<?php require_once ('includes/slidershow.php'); ?>	
	
<?php require_once ('includes/nav.php'); ?>
	
<section>
	
	<article class="content">
		
		<h2>Usability!</h2>
	
		<p>Hi, friends.<br>
			The website is completed. Let’s test the site today.<br>
			Let me go ahead to give you the information of the site.<br><br>
			
			Web address: http://capstone.saacan.com/ <br>
			Web Message Management: http://capstone.saacan.com/admin/login.php <br>
			User name: admin <br>
			Password: pass1234 <br><br>
			
			OK. Here you go. Let's start the test.<br><br>
			
			Script 1:<br>
			You are a new visitor on the site and need to find the Menu. When you found the Menu, please continue to find what chicken we can eat. <br>
			What the script is testing:<br>
			1.If the user can find the Menu.<br>
			2.If the user can find the chicken menu.<br><br>
			
			Script 2:<br>
			You are still an ordinary visitor.<br>
			Now you have questions and want to leave messages to the company. Please sign up a contact message.<br>
			What the script is testing:<br>
			1.If the user can leave a contact message.<br><br>
			Script 3:<br>
			OK, now you are the manager of this site.<br>
			Please log in the Web Management to read contact messages. Finally, please delete one contact record.<br>
			What the script is testing:<br>
			1.If the manager can view the contact message records.<br>
			2.If the manager can delete records.<br></p>		
		
    </article>
   
</section>
	
<?php require_once ('includes/footer.php'); ?>
