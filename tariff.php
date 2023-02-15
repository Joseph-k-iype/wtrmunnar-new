<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tariff | Wild Trail Resort</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<style>
.table-responsive { margin-top: 50px;}
.table th { font-family: 'Akronim', cursive !important;   font-size: 22px !important;}
.table td, .table th { border: 1px solid #1f1f1e; font-size: 17px;     font-family: 'Federo', sans-serif;}
img.icon2 { width: 100px; margin: -10px 0 10px;}
</style>

</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Tariff</h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container contact-det">
	  <center><img class="icon2" src="images/icon.png"></center>
        <div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table">
							<tr>
								<th>Rooms Name </th>
								<th>Room Rate </th>
								<th>Extra Adult Rates </th>
								<th>Extra Child Rates </th>
							</tr>
							<tr>
								<td>Honeymoon cottage </td>
								<td>₹ 8500 + 18% tax</td>
								<td>₹ 800/-</td>
								<td>₹ 500/-</td>
							</tr>
							<tr>
								<td>Family Suite </td>
								<td>₹ 10500 + 18% tax</td>
								<td>₹ 800/-</td>
								<td>₹ 500/-</td>
							</tr>
							<tr>
								<td>2 Bedroom Cottage</td>
								<td>₹ 15500 + 18% tax</td>
								<td>₹ 800 /-</td>
								<td>₹ 500/-</td>
							</tr>
						
					</table>
				</div>
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
