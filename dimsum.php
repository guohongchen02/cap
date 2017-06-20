<?php require_once ('includes/config.php'); ?>

<?php require_once ('includes/header_meta.php'); ?>
	
<title>Dimsum | <?php echo $webname; ?></title>	
	
<meta name="keywords" content="<?php echo $dimsumkeywords; ?>">
<meta name="description" content="<?php echo $dimsumdescription; ?>">
	
<link rel="stylesheet" href="css/grid.css">
	
<?php require_once ('includes/header.php'); ?>

<?php require_once ('includes/slidershow.php'); ?>	
	
<?php require_once ('includes/nav.php'); ?>
	
<section>
	
	<article class="content2">
		
		<h2>Dim Sum!</h2>
		
		<p>Dim sum /ˈdimˈsʌm/ (simplified Chinese: 点心; traditional Chinese: 點心; pinyin: Diǎnxīn) is a style of Cantonese cuisine prepared as small bite-sized portions of food traditionally served in small steamer baskets or on small plates. Dim sum is also well known for the unique way it is served in some restaurants, whereby fully cooked and ready-to-serve dim sum dishes are carted around the restaurant for customers to choose their orders while seated at their tables.</p>
		
		
    </article>
	
	<!-- dimsum begin, image dimensions 320px*320px, image file type png or jpg -->
	<article class="section group dimsum">
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/BeefBalls.jpg" alt="Beef Balls"><figcaption>Beef Balls</figcaption></figure>
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/CharSiuRoastPork.jpg" alt=" Char Siu (Roast Pork)"><figcaption> Char Siu (Roast Pork)</figcaption></figure>
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/CharSiuBao.jpg" alt="Char Siu Bao"><figcaption>Char Siu Bao</figcaption></figure>
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/CheungFunRiceNoodleRolls.jpg" alt="Cheung Fun (Rice Noodle Rolls)"><figcaption>Cheung Fun (Rice Noodle Rolls)</figcaption></figure>
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/CurriedSquidorCurriedCuttlefish.jpg" alt="Beef Balls"><figcaption>Curried Squid or Curried Cuttlefish</figcaption></figure>
		<figure class="col span_4_of_12"><img src="<?php echo $image_path; ?>/HamSuiGokDeep-FriedCrescentDumplings.jpg" alt="Ham Sui Gok (Deep-Fried Crescent Dumplings)"><figcaption>Ham Sui Gok</figcaption></figure>

		
		
		
	
	  
	  
	</article>
	<!-- dimsum end -->
   
</section>
	
<?php require_once ('includes/footer.php'); ?>
