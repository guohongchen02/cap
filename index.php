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
		
		<h2>Welcome!</h2>
		
		<img src="<?php echo $image_path; ?>/restaurant.jpg" alt="<?php echo $webname; ?> offers the best Chinese food">
		<br>
		<p><?php echo $webname; ?> is truly family style, giving you a Chinese dining experience that is best enjoyed with a variety of dishes. Our recipes are influenced by the different regions of China. Our recipes and Asian inspired dishes possess flavors that represent the best in traditional and contemporary cooking styles.</p>
		<p>Our dim sum, which means a “Touch of Heart”, offers you an eclectic variety of mouth-watering dishes. Our fried and steamed dumplings contain a wide array of fillings served in tiers of steamers or small sized plates, and arrive in small carts allowing you to pick and sample a variety of dishes at the same time.</p>
		<p>We are committed to providing you with an exceptional dining experience every time you walk through our doors. Come in and experience the <?php echo $webname; ?> where the tasteful blend of Chinese tradition and contemporary comfort create the ultimate dining experience whether you are here for dim sum, dinner or a banquet celebration!</p>		
		
    </article>
   
</section>
	
<?php require_once ('includes/footer.php'); ?>
