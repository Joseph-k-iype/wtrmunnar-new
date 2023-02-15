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