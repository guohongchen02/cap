<!-- Slideshow begin -->  
<article class="sl">
		
  <img class="mySlides w3-animate-left" src="<?php echo $image_path; ?>/p1.jpg">
  <img class="mySlides w3-animate-left" src="<?php echo $image_path; ?>/p2.jpg">
  <img class="mySlides w3-animate-left" src="<?php echo $image_path; ?>/p3.jpg">
  
</article>
		<!-- Javascript for slideshow begin -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4500);    
}
</script>
		<!-- Javascript for slideshow end -->
	  
	  <!-- Slideshow end --> 