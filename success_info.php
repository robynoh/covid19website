<?php
require_once('classes/class.php');

 	$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
	$selectquery="";
	$message="";
    $score=$connect->encrypt_decrypt($_GET['scr'],false);
	
	$qck="SELECT * FROM `high_risk_case` WHERE phone='".$connect->encrypt_decrypt($_GET['pn'],false)."'";
    $rst=$connect->retrieve($qck);
	$num=$connect->numRows($rst);

    if($score>=0){
		
		$message='Your answers indicate that you are <b style="color:#ff0000">LOW RISK</b> of COVID-19. Drink water regularly and observe personal good hygiene. Pay attention to your health and redo test after two days..';
	}
	
	if($score>=7){
		
		$message='Your answers indicate that you are <b style="color:#ff0000">LOW RISK</b> of COVID-19. What you are feeling may be caused by stress or malaria. Drink water regularly and observe personal good hygiene. Call a doctor If your symptoms worsen.';
	}
	if($score>=10){
		
		$message='Your answers indicate that you are <b style="color:#ff0000">MEDIUM RISK</b> of COVID-19. Please visit the nearest health care facility for futher advise on your case';
	}
	if($score>=20){
		
		$message='Your answers indicate that you are <b style="color:#ff0000">MEDIUM RISK</b> of COVID-19. Please visit the nearest health care facility for futher advise on your case';
		}
	if($score>=25){
		
		if($num<1){
		$sql ="INSERT INTO high_risk_case (riskid,name,phone,address,lga,post_time) 
		VALUES (NULL,'".$connect->encrypt_decrypt($_GET['nm'],false)."','".$connect->encrypt_decrypt($_GET['pn'],false)."','".$connect->encrypt_decrypt($_GET['ad'],false)."','".$connect->encrypt_decrypt($_GET['lg'],false)."','".date('d-m-Y')."')";
    $connect->insertion($sql);
	
	//sendemail();
		}
		
	$message='Your answers indicate that you are <b style="color:#ff0000">HIGH RISK</b> of COVID-19, isolate yourself from friends and family, Immidiately call these emergency numbers 08039216821, 07019304970, 08151693570, 09010999972, 09010999969';


}
	if($score>=35){
		
		if($num<1){
		$sql2 ="INSERT INTO high_risk_case (riskid,name,phone,address,lga,post_time) 
		VALUES (NULL,'".$connect->encrypt_decrypt($_GET['nm'],false)."','".$connect->encrypt_decrypt($_GET['pn'],false)."','".$connect->encrypt_decrypt($_GET['ad'],false)."','".$connect->encrypt_decrypt($_GET['lg'],false)."','".date('d-m-Y')."')";
    $connect->insertion($sql2);
	//sendemail()
		}
		
		$message='Your answers indicate that you are <b style="color:#ff0000">HIGH RISK</b> of COVID-19, isolate yourself from friends and family, Immidiately call these emergency numbers 08039216821, 07019304970, 08151693570, 09010999972, 09010999969';
	
	
	}
	
	
	function sendemail(){
		
		
		
		require 'phpmailer/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.bysgcovid19library.ng';                    // Set the SMTP server to send through
	//$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'admin@bysgcovid19library.ng';                     // SMTP username
    $mail->Password   = 'bysgcovid19library';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    //$mail->Port       = 587;                                    // TCP port to connect to
	$mail->Port       = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('admin@bysgcovid19library.ng','Bayelsa State Government Covid-19 Library');
    $mail->addAddress("robinsonagaga@gmail.com");     // Add a recipient
                  // Name is optional
    //$mail->addReplyTo('mail@watawazi.com');
    $mail->addCC('robinsonagaga@yahoo.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
	
	$message.='<b style="font-size:18px">Good day Sir/Ma </b><br/> ';
	$subject=' COVID-19 High Risk Alert';
	$message.='<p>Please Contact <b>'.ucwords($_GET['nm']).'</b> on <b>'.$_GET['pn'].'</b>. The result of his assesment, using 
	our Online Self Assesment Tool show that he is <b>HIGH RISK </b>of COVID-19 </p> ';
	$message.='<p>His address is '.$_GET['ad'].','.$_GET['lga'].'</p> ';
	
	//$msg=$postorganise->alertMailTemplate($message);
	
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    //echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	
		
		
		
	}
	

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bayelsa Covid-19 Team | Success Message</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
   <?php include('includes/header.php');?>
	 

    

   

   <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
           <span class="subheading">Self Assesment Tool</span>
            <h2 class="mb-4">Take a Self Check</h2>
            
          </div>
        </div>
        <section class="jumbotron text-center">
		 <p style="text-align:left;color:#090;font-weight:bold;padding-left:10px">9 of 9 Completed</p>
    <div class="container">
	
	<span id="errormsg" style="text-align:left;color:#ff0000;font-size:22px"></span>
	
	<p style="font-size:20px;font-weight:bold;color:#000"><?php echo $message;?><p>
     <a  class="btn btn-primary my-2" href="self-check" >Restart TEST</a>
	</div>
  </section>
        
      </div>
    </section>

		

		


   

		

    <?php include('includes/footer.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
  <script>
  
  function one(){
	  
	  if(!$('#one input[type="checkbox"]').is(':checked')){
      $("#errormsg").text('Please answer question one before proceeding to the Next.');
      return false;
    }
	 else{
	
	$("#one").hide();
	$("#two").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  
  function two(){
	  
	  
	 if(!$('#two input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question two before proceeding to the Next.');
      return false;
    }else{
	
	$("#two").hide();
	$("#three").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  function three(){
	  
	  
	  if(!$('#three input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question three before proceeding to the Next.');
      return false;
    }else{
	
	$("#three").hide();
	$("#four").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  function four(){
	  
	  
	  if(!$('#four input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question four before proceeding to the Next.');
      return false;
    }else{
	
	$("#four").hide();
	$("#five").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  function five(){
	  
	  
	  if(!$('#five input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question five before proceeding to the Next.');
      return false;
    }else{
	
	$("#five").hide();
	$("#six").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  function six(){
	  
	  
	  if(!$('#six input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question six before proceeding to the Next.');
      return false;
    }else{
	
	$("#six").hide();
	$("#seven").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  function seven(){
	  
	  
	  if(!$('#seven input[type="radio"]').is(':checked')){
      $("#errormsg").text('Please answer question seven before proceeding to the Next.');
      return false;
    }else{
	
	$("#seven").hide();
	$("#eight").show();
	$("#errormsg").text('');
}
	  
	
  }
  
  
  function eight(){
	  
	  e.preventDefault();
	  
	 if($("#name").val()=''){
		//e.preventDefault();
		 $("#errormsg").text('Please complete all field.');
		 
	 }
	 if($("#email").val()=''){
		// e.preventDefault();
		 $("#errormsg").text('Please complete all field.');
		 
	 }
	 if($("#phone").val()=''){
		// e.preventDefault();
		 $("#errormsg").text('Please complete all field.');
		 
	 }
	 if($("#age").val()=''){
		// e.preventDefault();
		 
		 $("#errormsg").text('Please complete all field.');
		 
	 }
	
	  
	
  }
  
  </script>
    
  </body>
</html>