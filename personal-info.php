<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bayelsa Covid-19 Team | Home</title>
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
    <div class="container">
	
	
    <div class="container">
	
	<span id="errormsg" style="text-align:left;color:#ff0000;font-size:22px"></span>
	
	<p style="font-size:20px;font-weight:bold;color:#000">This tool is not meant to take the place of consultation with your health care provider or to diagnose or treat conditions. If you're in an emergency medical situation, call 08039216821, 07019304970, 08151693570, 09010999972, 09010999969<p>
    <p><a href="self-check" class="btn btn-primary px-5 py-3 mt-3">Continue</a></p>
	</div>
   
	
	
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