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
            <h2 class="mb-4">Self Check</h2>
            
          </div>
        </div>
        <section class="jumbotron text-center">
    <div class="container">
	
	
	<form  method="POST" action="tools/process_check">
	
	
	
	
	
	
	 
      
	
	
	
	
	
	
	
	
	
	<span id="errormsg" style="text-align:left;color:#ff0000;font-size:22px"></span>
	<div id="one">
	
	<p style="color:#090;font-weight:bold;padding-left:10px">1 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Have you traveled recently during the past 14 days?</h1>
	  
      <p class="lead text-muted" style="font-size:25px;font-weight:bold;">
	  
	  <span><input type="radio" name="country"  value=5 required> Yes</span>
	  <span><input type="radio" name="country"   value=0 required> No</span>
	  
	  </p>
	 
      <p>
        <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="one();">Next</a>
        
      </p>
	  
	  </div>
	  
	  <div id="two" style="display:none">
	  <p style="color:#090;font-weight:bold;padding-left:10px">2 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Have you been in contact with somebody who is sick with the following symptom?</h1>
	  <p class="lead text-muted" >
	  <ul style="font-size:25px;font-weight:bold;text-align:left;color:#000">
	  <li>	Sneezing</li>
<li>Coughing</li>
<li>Running a temperature</li>
<li>Complaining of chest pain</li>
<li>Sore throat</li>
</ul>

	  </p>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="contact"  value=30 required> Yes</span>
	  <span><input type="radio" name="contact"   value=0 required> No</span>
	  
	  </p>
      <p>
        <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="two();">Next</a>
        
      </p>
	  
	  </div>
	  
	  
	  
	  
	  
	  <div id="three" style="display:none">
	  
	   <p style="color:#090;font-weight:bold;padding-left:10px">3 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Are you having any chest pain?</h1>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="breathing" id="breathing" autocomplete="off" value=10 > Yes</span>
	  <span><input type="radio" name="breathing" id="breathing" autocomplete="off" value=0> No</span>
	  
	  </p>
      <p>
       <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="three();">Next</a>
      </p>
	  
	  </div>
	  
	  
	  <div id="four" style="display:none">
	   <p style="color:#090;font-weight:bold;padding-left:10px">4 of 9</p>
      <h1><img src="images/point.png" width="50px"/>Are you running a temperature?</h1>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="fever" id="fever" autocomplete="off" value=5 > Yes</span>
	  <span><input type="radio" name="fever" id="fever" autocomplete="off" value=0> No</span>
	  
	  </p>
      <p>
       <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="four();">Next</a>
        
      </p>
	  
	  </div>
	  
	  
	   <div id="five" style="display:none">
	    <p style="color:#090;font-weight:bold;padding-left:10px">5 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Do you have a new dry cough?</h1>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="cough" id="nose" autocomplete="off" value=5 > Yes</span>
	  <span><input type="radio" name="cough" id="nose" autocomplete="off" value=0> No</span>
	  
	  </p>
      <p>
       <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="five();">Next</a>
        
      </p>
	  
	  </div>
	  
	  
	  
	   <div id="six" style="display:none">
	    <p style="color:#090;font-weight:bold;padding-left:10px">6 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Have you lost your sense of smell or taste?</h1>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="muscle" id="muscle" autocomplete="off" value=2 > Yes</span>
	  <span><input type="radio" name="muscle" id="muscle" autocomplete="off" value=0> No</span>
	  
	  </p>
      <p>
       <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="six();">Next</a>
        
      </p>
	  
	  </div>
	  
	  
	   <div id="seven" style="display:none">
	    <p style="color:#090;font-weight:bold;padding-left:10px">7 of 9</p>
      <h1><img src="images/point.png" width="50px"/> Are you passing stool frequently?</h1>
      <p class="lead text-muted" style="font-size:25px;font-weight:bold">
	  
	  <span><input type="radio" name="vomiting" id="vomitting" autocomplete="off" value=2 > Yes</span>
	  <span><input type="radio" name="vomiting" id="vomitting" autocomplete="off" value=0> No</span>
	  
	  </p>
      <p>
        <a href="javascript:void(0);" class="btn btn-primary my-2" onclick="seven();">Next</a>
        
      </p>
	  
	  </div>
	  
	  
	  
	  
	  <div id="eight" style="display:none">
	   <p style="color:#090;font-weight:bold;padding-left:10px">8 of 9</p>
	  
	  <p style="font-size:20px;font-weight:bold;color:#000">Fill in your Information<p>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Fullname</label>
            <input type="text" class="form-control" name="name" placeholder="" required>
           
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Phone number</label>
            <input type="text" class="form-control" name="phone" placeholder="" value="" required>
           
          </div>
        </div>
		
		 <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">Local Government Area</label>
           <select class="custom-select d-block w-100" name="lga" required>
              <option value="">Choose...</option>
              <option>Yenagoa</option>
			  <option>Southern Ijaw</option>
			  <option>Kolokuma/Opokuma</option>
			  <option>Ogbia</option>
			  <option>Brass</option>
			  <option>Nembe</option>
			  <option>Ekeremor</option>
			  <option>Sagbama</option>
            </select>
           
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Home Address</label>
            <input type="text" class="form-control" name="address" placeholder="" value="" required>
           
          </div>
        </div>

       

        

       


       
       
       

       

        <hr class="mb-4">
        <button class="btn btn-primary my-2" type="submit">Get Check Result</button>
	  
	  </div>
	  
	  
	  </form>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </div>
  </section>
        
      </div>
    </section>

	<br/>	
	<br/>	
	<br/>	
	<br/>	
	<br/>
<br/>	
	<br/>	
	<br/>	
	<br/>	
	<br/>
<br/>	
	

	

		


   

		

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
	  
	  if(!$('#one input[type="radio"]').is(':checked')){
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
	
}
	  
	
  }
  
  
  
  
  </script>
    
  </body>
</html>