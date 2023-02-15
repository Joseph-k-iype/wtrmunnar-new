<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Our Rooms | Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<style>

.imgBg {  border: 4px double #151514; border-radius: 6px;}
</style>

</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Our Rooms </h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container bottom-cont">
	
        <div class="row">
          <div class="col-md-4">
            <div class="imgBg"> <a href="honeymoon-cottage.php"><img src="images/rooms/img1.jpg" alt="" class="img-fluid" ></a> </div>
            <h2 class="mt-3">Honeymoon Cottage </h2>
            <p>The Cottages are a classic example of modern luxury and class. With fully furnished spacious rooms, indulge in a reminiscent comfortable stay while enjoying the luxury and service provided to you by the hospitable staff at the Cottages. The prime location, beautiful surroundings, and the highest standards of hospitality are some of the leading factors drawing tourists to this accessible Cottage.</p>
            <a href="honeymoon-cottage.php" class="more-link">READ MORE..</a> </div>
			
			  <div class="col-md-4">
				 <div class="imgBg"> <a href="family-suite.php"><img src="images/rooms/img2.jpg" alt="" class="img-fluid" ></a> </div>
				<h2 class="mt-3">Family Suite </h2>
				<p>Designed specially to pamper its guests, the suite rooms showcase a perfect blend of luxury in its accommodation with utmost security. The rooms bestow an elegant design combined with refined elegance and luxuriously appointed sleek accommodation. Tailor-made to meet the specific needs of the guests, the Suite Rooms offer accommodation that is more than just comfortable. <!--From glorious touches in the room, with state- of -the art amenities and services to enhanced top-notch privacy – suite rooms ensure that the travelers feel pampered and secure.--></p>
				<a href="family-suite.php" class="more-link">READ MORE..</a> 
			</div>
			  <div class="col-md-4">
				<div class="imgBg"> <a href="two-bedroom.php"><img src="images/rooms/img3.jpg" alt="" class="img-fluid" > </a></div>
				<h2 class="mt-3">2 Bedroom Cottage </h2>
				<p>A haven of indulgence, the spacious deluxe rooms is facilitated by a range of state-of-the-art amenities accompanied by warm and efficient services. WI-Fi enabled with ample broadband and the exclusive perks in the form of flat TVs, mini bar, electronic safe, modern luxurious Wash-rooms and of course a comfortable bed to relax & recharge yourself for the next day.</p>
				<a href="two-bedroom.php" class="more-link">READ MORE..</a> 
			</div>
        </div>
      </div>
    </div>
    
	<!-- Begin:footer-->
	
	<?php include 'include/footer.php'?>
	
	<!-- End:footer-->
	
  </section>
  
  <!-- Begin:Model-->
	
	<?php include 'include/model.php'?>
	
	<!-- End:Model-->
  
  
</div>
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-select.min.js"></script> 
<script src="js/carousel.js"></script> 

<script src="js/popper.min.js"></script> 
<script>
	$(document).ready(function(e) {
  $('.selectpicker').selectpicker();
});
	</script> 
<!--<script>
	$(document).ready(function() {
  $(window).on("scroll", function() {
    if ($(window).scrollTop() >= 20) {
      $(".navbar").addClass("compressed");
    } else {
      $(".navbar").removeClass("compressed");
    }
  });
});
	</script>--> 
<script>
      $(function() {
        var t0, t1;

        // Test to show that the carousel doesn't slide when the current tab isn't visible
        // Test to show that transition-duration can be changed with css
        $('#carousel-banner').on('slid.bs.carousel', function(event) {
          t1 = performance.now()
          console.log('transition-duration took' + (t1 - t0) + 'ms, slid at ', event.timeStamp)
        }).on('slide.bs.carousel', function() {
          t0 = performance.now()
        })
      })
    </script> 
<script>
        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
    </script> 
<script>
	$(document).click(function(e) {
	if (!$(e.target).is('.panel-body')) {
    	$('.collapse').collapse('hide');	    
    }
});
	</script>
</body>

</html>