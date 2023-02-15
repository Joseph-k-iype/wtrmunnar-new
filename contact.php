<?php

if(isset($_POST['formsubmit'])){
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$privatekey = '6Ld9X2QaAAAAAC98CGtBfbDSAb8008OBu6eHao7L';
	$ch0 = curl_init();
	curl_setopt($ch0, CURLOPT_URL, $url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
	curl_setopt($ch0, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch0, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch0, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch0, CURLOPT_HTTPHEADER, array( 
		'Content-Type:application/json',
	));  
	$gresponse = curl_exec($ch0);
	$data = json_decode($gresponse, true);
	if($data['success'] == 1){
		$name		= strip_tags(trim($_POST["name"]));
		$email		= strip_tags(trim($_POST["email"]));
		$message	= strip_tags(trim($_POST["message"])); 
		$phone	= strip_tags(trim($_POST["phone"])); 
		$subject = trim($_POST["subject"]);
		
		$postfield = '{"subject":"Query from The Wild Trail Resorts ", "name":"'.$name.'", "email":"'.$email.'", "phone":"'.$phone.'", "message":"'.$message.'", "mailto":"thewildtrails@gmail.com", "mailcc":"juhi.d@asiatech.in", "mailbcc":"jayanti@asiatech.in"}';   

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://www.asiatech.in/booking_engine/emailsendpoint.php');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postfield);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Accept: application/json',
		));
		$json =curl_exec($ch);
		$jsondecode = json_decode($json, true);
		if($jsondecode['error']!=''){
			//header('Location: index1.php?captcha=other');
			echo '<script type="text/javascript">window.location.href = "contact.php?captcha=other";</script>';
        } else {
			//header('Location: index1.php?captcha=yes');
			echo '<script type="text/javascript">window.location.href = "contact.php?captcha=yes";</script>';
        }
	} else {
		//header('Location: index1.php?captcha=no');
		echo '<script type="text/javascript">window.location.href = "contact.php?captcha=no";</script>';
	}
} 

?>

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
.contact-add-panel p{ color:#fff;} 
.contact-add-panel h3 {text-align:center; color:#fff;}
.contact-add-panel li { color:#fff;}
img.icon2 { width: 105px;  margin-top: 20px; }
.intouch { margin-top: 40px;}
</style>

</head>

<body>
<div class="outwarp">
  
	   <!--  Begin: Header-->
	 
	 <?php  include 'include/header.php' ?>
	 
	 <!--  End: Header-->
  
  <div id="bannersection-in"> <img src="images/contact-banner.jpg" alt="" class="img-fluid">
    <div class="bannerin">
      <h2>Contact Us</h2>
      <p>The Wild Trail Resort</p>
    </div>
  </div>
  <section id="home-contents">
    <div class="container-fluid sections">
      <div class="container contact-det">
        <div class="row">
          <div class="col-md-8">
     
              <h2>Get in Touch</h2>
			  
			  <form action="" method="post">
				<?php

						if($_GET['captcha'] == 'yes'){
							echo '<div style="margin: 15px;" class="alert alert-success">Message Send</div>';
						} else if($_GET['captcha'] == 'no'){
							echo '<div style="margin: 15px;" class="alert alert-danger">Captcha Failed. Please try again!</div>';
						} else if($_GET['captcha'] == 'other'){
							echo '<div style="margin: 15px;" class="alert alert-danger">Oops! Something went wrong and we couldn\'t send your message.</div>';
						}
					
					?>
				<div class="form-group">
					<input type="text" class="form-control" id="txtName" name="name"  placeholder="Name *" required>
					<span id="lblError" style="color: red"></span> 
				  </div>
				  <div class="form-group">
					<input type="email" class="form-control" id = "txtEmail" name="email" placeholder="Email *" required>
					
				  </div>
				  <div class="form-group">
					<input type="text" class="form-control numeric" name="phone"  maxlength="10" placeholder="Phone *" required>
					<span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
				  </div>  
				  <div class="form-group">
						<textarea class="form-control"  name="message"  rows="3" placeholder="Comments" required></textarea>
				  </div>
				    <div class="form-group"> 
					
					<div class="g-recaptcha" data-sitekey="6Ld9X2QaAAAAANqB6-VMnIxAQ35V8nqcD-I9MUae"></div>
				
					</div>
				<button type="submit" name="formsubmit" class="btn btn-default" value="Send message">Submit</button>
			  </form>   
			  
          
            <div class="clearfix"></div>
				<div class="intouch">
				  <h2>Location</h2>
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.172411810692!2d76.94745731479487!3d10.084955192792929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA1JzA1LjgiTiA3NsKwNTYnNTguNyJF!5e0!3m2!1sen!2sin!4v1590733062641!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
          </div>
          <div class="col-md-4">
            <div class="contact-address"> <img src="images/addres-bg.jpg" alt="" class="img-fluid">
              <div class="contact-add-panel">
                <h2>The Wild Trail Resorts</h2>
                <h3>Viripara</h3>
				<ul>
					<li>Viripara, Off Kallar Mankulam Road , Munnar, Kerala - 685565</li>
					<li>Mobile No: Ajith Kumar , <a href="tel:9895490720">+91- 9895490720</a></li>
					<li>Email Id: <a href="mailto: thewildtrails@gmail.com">thewildtrails@gmail.com</li>
				</ul>
                  <!--<p><span>Viripara, Off Kallar Mankulam Road , Munnar <br> Kerala 685565 <br>
                 </span></p>
				  <p></p>
				  <p></p>-->
              </div>
			    <center><img class="icon2" src="images/icon.png"></center>
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
	

<!--validation-->
<script type="text/javascript">
    $(function () {
        $("#txtName").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only Alphabets allowed.");
            }
 
            return isValid;
        });
    });
</script>

<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function () {
            $(".numeric").bind("keypress", function (e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                $(".error").css("display", ret ? "none" : "inline");
                return ret;
            });
            $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
        });
    </script> 
<!--validation-->
</body>

</html>