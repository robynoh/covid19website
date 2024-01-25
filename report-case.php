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
            <span class="subheading">Report Case</span>
            <h2 class="mb-4">Report any suspected case</h2>
            
          </div>
        </div>
        
	  <form class="form-horizontal" method="POST" action="tools/report-process.php">
	  
	   <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" required>
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Phone:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="phone" placeholder="Enter your phone number" name="phone" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-4" for="email">Address of place where case is suspected :</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  placeholder="Address of place where case is suspected" name="address" required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Area where case is suspected</label>
      <div class="col-sm-10">
        <select class="form-control" name="lga" required>
		<option>Yenagoa</option>
		<option>Southern Ijaw</option>
		<option>Kolokuma/Opokuma</option>
		<option>Ogbia</option>
		<option>Nembe</option>
		<option>Brass</option>
		<option>Ekeremor</option>
		<option>Sagbama</option>
		
		
		</select>
      </div>
    </div>
	
	<div class="form-group">
  <label class="control-label col-sm-2" >Enter Detail</label>
  <textarea name="detail" class="form-control rounded-5" id="exampleFormControlTextarea1" rows="10" required></textarea>
</div>
    
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="report" class="btn btn-primary py-3 px-5">Submit</button>
      </div>
    </div>
  </form>
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
    
  </body>
</html>