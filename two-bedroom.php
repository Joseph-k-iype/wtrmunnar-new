<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Two Bedroom Cottage  | Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">


<style>
ul.amneties li {list-style:none;   line-height: 32px; list-style: none;  font-size: 18px; font-family: 'Federo', sans-serif;}
.amneties img {max-width:100%; width:25px; margin-right:10px;}
a.btnbg {
    border: 1px solid #9b6a28;
    padding: 10px 20px;
    margin: 10px 35px;
    background: #9b6a28;
    color: #fff;
    border-radius: 10px;
    display: inline-block;
    text-decoration: none;
    font-weight: 600;
    font-size: 18px;
	 font-family: 'Federo', sans-serif;
}

</style>
</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Two Bedroom Cottage </h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container contact-det">
		
		<div class="row">
				<div class="col-md-6">
					<h1>Two Bedroom Cottage </h1>
					<p>A haven of indulgence, the spacious deluxe rooms is facilitated by a range of state-of-the-art amenities accompanied by warm and efficient services. WI-Fi enabled with ample broadband and the exclusive perks in the form of flat TVs, mini bar, electronic safe, modern luxurious Wash-rooms and of course a comfortable bed to relax & recharge yourself for the next day.</p><br>
					
					<h1>Room Amenities</h1>
					<ul class="amneties">
						<li><img src="images/icon.png">Nature facing Balcony</li>
						<li><img src="images/icon.png">European King Size beds</li>
						<li><img src="images/icon.png">Tea /Coffee maker</li>
						<li><img src="images/icon.png">Spacious Modern Toilet / Shower Toiletries</li>
					</ul>
				</div>
				<div class="col-md-6">
					<div id="carouselExampleIndicators2" class="carousel slide carousel-fade" data-ride="carousel"> 
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol> 
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active" style="background-image: url('images/rooms/slider1.jpg')"></div>
							<div class="carousel-item" style="background-image: url('images/rooms/slider2.jpg')"></div>
							<div class="carousel-item" style="background-image: url('images/rooms/slider3.jpg')"></div>
						</div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev"> 
					  <span class="" aria-hidden="true"><img src="images/l-arrow.png" alt=""></span> 
					  <span class="sr-only">Previous</span> </a> 
					  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next"> <span class="" aria-hidden="true"><img src="images/r-arrow.png" alt=""></span> <span class="sr-only">Next</span> </a> 
					</div>
				</div>
			
			</div>
			<div class="row">
				
					<div class="col-xs-12 col-md-12">
							<a class="btnbg" href="#">Book Now</a>
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