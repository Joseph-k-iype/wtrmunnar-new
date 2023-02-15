<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gallery | Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<!-- Begin: Gallery css-->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!-- End Gallery css-->
	
	<style>
	.fancybox-lock .fancybox-overlay { margin-top: 60px;}
	img.img-responsive { max-width: 100%;     border: 4px double #000;    margin-bottom: 25px;}
	img.icon {  width: 125px;margin: 0 0px 23px;}
	</style>
	
</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Gallery</h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">

               <div class="container">
						<center><img class="icon" src="images/icon.png"></center>
						<div class="row">
							
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img1.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img1.jpg" />
									</a>
								</div> 
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img2.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img2.jpg" />
									</a>
								</div>
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img3.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img3.jpg" />
									</a>
								</div>		
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img4.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img4.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img5.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img5.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img6.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img6.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img7.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img7.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img8.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img8.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img9.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img9.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img10.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img10.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img11.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img11.jpg" />
									</a>
								</div>	
								<div class="col-md-4">
									<a class="thumbnail fancybox" rel="ligthbox" href="images/gallery/img12.jpg">
										<img class="img-responsive" alt="" src="images/gallery/img12.jpg" />
									</a>
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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		<script>

			$(document).ready(function(){
				//FANCYBOX
				//https://github.com/fancyapps/fancyBox
				$(".fancybox").fancybox({
					openEffect: "none",
					closeEffect: "none"
				});
			});
	   
	  </script>

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