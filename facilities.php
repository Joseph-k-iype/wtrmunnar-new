<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Facilities | Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<style>
.ttBg { padding: 20px 0px;}
.ttBg p{ text-align:left !important;}
.ttBg h3{ margin-bottom:15px;  font-size: 24px;}
</style>
</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Our Facilities</h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container contact-det">
        <div class="row">
          <div class="col-md-12">
				<div class="ttBg">
					<h3>Rain Dance </h3>
					<p>The Wild Trails is the only resort in Munnar to offer RAIN DANCE -An extravaganza of mist,light and music</p>
				</div>
				<div class="ttBg">
					<h3>The Wild Creek  </h3>
					<p>The Wild Creek is a natural pool in the Wild, within our property and is fed by a natural stream</p>
				</div>
				<div class="ttBg">
					<h3>Her Abode </h3>
					<p>A powerfully consecrated energy space for Yoga & Meditation and is intended for human well being</p>
				</div>
				<div class="ttBg">
					<h3>The Wild Fire</h3>
					<p>Campfire , BBQ Party Spot</p>
				</div>
				
            <div class="clearfix"></div>  
            
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