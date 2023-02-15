<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<script src='https://www.google.com/recaptcha/api.js'></script> 
<style>

.imgBg {  border: 4px double #151514; border-radius: 6px;}
img.icon { margin: -50px 0 20px;width: 70px;}
img.icon2 { width: 80px; margin: 0px 0 18px;}
</style>

</head>

<body>
<div class="outwarp">
 
 <!--  Begin: Header-->
 
 <?php  include 'include/header.php' ?>
 
 <!--  End: Header-->
 
  <div id="bannersection">
    <div class="bannercontent">
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel"> 
			<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				   <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner" role="listbox"> 
			  <!-- Slide One - Set the background image for this slide in the line below -->
				<div class="carousel-item active" style="background-image: url('images/banner-img-1.jpg')">
					<div class="carousel-caption d-md-block">
						<div class="banner-f">
							 <img src="images/logo-banner.png" alt="" class="img-fluid">
							<h2>THE WILD TRAILS</h2>
							<p>RESORTS, MUNNAR</p>
						</div>
					</div>
				</div>
				  <!-- Slide Two - Set the background image for this slide in the line below -->
				  <div class="carousel-item" style="background-image: url('images/banner-img-2.jpg')"> 
						<!--<div class="carousel-caption d-md-block">
							<div class="banner-f">
								 <img src="images/logo-banner.png" alt="" class="img-fluid">
								<h2>THE WILD TRAILS</h2>
								<p>RESORTS, MUNNAR</p>
							</div>
						</div>-->
				  </div>
				  <div class="carousel-item" style="background-image: url('images/banner-img-3.jpg')"></div>
				  <div class="carousel-item" style="background-image: url('images/banner-img-4.jpg')"></div>
				 <div class="carousel-item" style="background-image: url('images/banner-img-5.jpg')"></div>
				<div class="carousel-item" style="background-image: url('images/banner-img-6.jpg')"></div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="" aria-hidden="true"><img src="images/l-arrow.png" alt=""></span> 
			<span class="sr-only">Previous</span> </a> 
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="" aria-hidden="true"><img src="images/r-arrow.png" alt=""></span> 
			<span class="sr-only">Next</span> </a> 
		</div>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container">
        <h1>The Wild Trail Resorts</h1>
		<center><img class="icon2" src="images/icon.png"></center>
		<p>Engulfed between the Kallar Mankulam Forest and the Kannan Devan Tea Plantations , The Wild Trails Munnar (WTR) is a nature friendly luxury resort located in the hamlet of Viripara and is a magnificent drive through forests, cardamom plantations, tea plantations and several waterfalls /bathing spots on the way thus offering a spectacular delight to its guests.The Resort is rich in its Flora and Fauna and is home to several types of birds and rare species of animals.</p>
		<p>The Resort has 6 uniquely designed luxury cottages in few acres of land ,thus providing utmost privacy to its guests. All cottages have different designs and capacities and are designed to meet the needs of most travellers be it honeymoon couples, families or groups.</p>
		<!--<p>The Wild Trails is engulfed between the Kallar Mankulam Forest and the Kannan Devan Tea Plantations ,thus offering a spectacular delight to its guests.The Resort is a heaven for nature lovers who wish to stay away from the madding crowd and close to nature without compromising on the luxury aspect. The Resort has 6 uniquely designed luxury cottages in few  acres of land ,thus providing utmost privacy to its guests. The Resort has a full fledged restaurant :RASA THALA ,offering both South & North Indian cuisine.</p>
        <p>Engulfed between the Kallar Mankulam Forest and the Kannan Devan Tea Plantations , The Wild Trails Munnar is located in the hamlet of Viripara and is a magnificent drive through forests, cardamom plantations and several waterfalls /bathing spots on the way. The Resort is rich in its Flora and Fauna and is home to several types of birds and rare species of animals.</p>-->
      </div>
      <div class="container resort-det">
        <div class="row">
          <div class="col-md-4">
            <h2>Cottages</h2>
		
            <div class="round-images"> <img src="images/resort.jpg" alt="" class="img-fluid" > <a href="rooms.php" class="overlay"> <span class="plus"><img src="images/link-icon.png" alt=""></span> </a> </div>
          </div>
          <div class="col-md-4">
            <h2>Facilities</h2>
            <div class="round-images"> <img src="images/facilities.jpg" alt="" class="img-fluid" > <a href="facilities.php" class="overlay"> <span class="plus"><img src="images/link-icon.png" alt=""></span> </a> </div>
          </div>
          <div class="col-md-4">
            <!--<h2>Rejuvenate</h2>-->
            <h2>Attractions</h2>
		
            <div class="round-images"> <img src="images/rejuvanate.jpg" alt="" class="img-fluid" > <a href="attraction.php" class="overlay"> <span class="plus"><img src="images/link-icon.png" alt=""></span> </a> </div>
          </div>
        </div>
		
      </div>
    </div>
    <div class="container-fluid sections-nobg">
      <div class="container links-sec">
        <div class="row">
          <div class="col-md-3"><a href="package.php"><img src="images/package-icon.png" alt="">
            <p><span>Attractive<br>
              Packages</span></p>
            </a></div>
          <div class="col-md-3"><a href="https://g.page/the-wild-trails-resort-Munnar?share"><img src="images/location-icon.png" alt="">
            <p>How to<br>
              Reach Us</p>
            </a></div>
          <div class="col-md-3"><a href="#quickEnq" data-toggle="modal"><img src="images/enquiry-icon.png" alt="">
            <p>Quick<br>
              Enquiry</p>
            </a></div>
          <div class="col-md-3"><a href="tel:+91- 9895490720"><img src="images/contact-icon.png" alt="">
            <p>Contact<br>
              Wild Trail</p>
            </a></div>
        </div>
      </div>
    </div>
    <div class="container-fluid sections" style=" border-bottom: 1px dashed #bab9b3;">
      <div class="container bottom-cont">
		<center><h1 style="margin-bottom:50px;">Our Rooms</h1></center>
		<center><img class="icon" src="images/icon.png"></center>
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
	
	
	<div class="container-fluid sections">
      <div class="container bottom-cont">
        <div class="row">
          <div class="col-md-3">
            <div class="round-images"> <img src="images/ourstory.jpg" alt="" class="img-fluid" > </div>
            <h2 class="mt-3">Our Story</h2>
            <p>The Resort offers Cottage type accommodation of various kinds with private balconies and interconnection suites keeping in view the growing needs of the traveler.
              Our inhouse restaurant “Rasa Thala” offers a variety of authentic vegetarian and non-vegetarian delicacies of Kerala...</p>
            <a href="about.php" class="more-link">READ MORE..</a> </div>
			  <div class="col-md-3">
				<div class="round-images"> <img src="images/testimonial.jpg" alt="" class="img-fluid" > </div>
				<h2 class="mt-3">Testimonials</h2>
				<p>“ Suspendisse vehicula finibus ligula, vitae efficitur lorem bibendum sed. Curabitur eget lacus quis risus congue congue. Quisque at nibh vestibulum, tristique arcu ac, finibus tellus. Suspendisse nec blandit justo. ac egestas velit. ”<br>
				  <strong>Donec Turpis, Germany</strong></p>
				<a href="https://www.tripadvisor.in/Hotel_Review-g303881-d23035868-Reviews-The_Wild_Trails_Munnar-Munnar_Idukki_District_Kerala.html" class="more-link">READ MORE..</a> 
			</div>
          <div class="col-md-6">
            <div id="carouselExampleIndicators2" class="carousel slide carousel-fade" data-ride="carousel"> 
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style="background-image: url('images/slider-img-1.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-2.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-3.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-4.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-5.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-6.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-7.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-8.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-9.jpg')"></div>
					<div class="carousel-item" style="background-image: url('images/slider-img-10.jpg')"></div>
				</div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev"> 
			  <span class="" aria-hidden="true"><img src="images/l-arrow.png" alt=""></span> 
			  <span class="sr-only">Previous</span> </a> 
			  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next"> <span class="" aria-hidden="true"><img src="images/r-arrow.png" alt=""></span> <span class="sr-only">Next</span> </a> 
			</div>
            <a href="gallery.php" class="more-link">More Photos..</a> </div>
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