<?php 
require_once("classes/class.php");
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

    $q= "SELECT * FROM `covid_report`";
	$r=$connection->retrieve($q);
	$rows2=$connection->arrayFetch($r);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  
  /*
 * Off Canvas sidebar at medium breakpoint
 * --------------------------------------------------
 */
@media screen and (max-width: 992px) {

  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
  }

  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -33%;
  }

  .row-offcanvas-left.active {
    left: 33%;
    margin-left: -6px;
  }

  .sidebar-offcanvas {
    position: absolute;
    top: 0;
    width: 33%;
    height: 100%;
  }
}

/*
 * Off Canvas wider at sm breakpoint
 * --------------------------------------------------
 */
@media screen and (max-width: 34em) {
  .row-offcanvas-left
  .sidebar-offcanvas {
    left: -45%;
  }

  .row-offcanvas-left.active {
    left: 45%;
    margin-left: -6px;
  }
  
  .sidebar-offcanvas {
    width: 45%;
  }
}

.card {
    overflow:hidden;
}

.card-body .rotate {
    z-index: 8;
    float: right;
    height: 100%;
}

.card-body .rotate i {
    color: rgba(20, 20, 20, 0.15);
    position: absolute;
    left: 0;
    left: auto;
    right: -10px;
    bottom: 0;
    display: block;
    -webkit-transform: rotate(-44deg);
    -moz-transform: rotate(-44deg);
    -o-transform: rotate(-44deg);
    -ms-transform: rotate(-44deg);
    transform: rotate(-44deg);
}
  </style>
    <title>Bayelsa Covid-19 Team | Report</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta property="og:url"  content="https://www.bysgcovid19library.ng/report-dashboard" />
<meta property="og:type"     content="article" />
<meta property="og:title"    content="Case Summary in Bayelsa State as at <?php echo date("l jS \of F Y h:i:s A") ; ?>" />
<meta property="og:description" content="COVID-19 is an enemy we must fight until it is completely defeated. It is time for responsibility sharing not blame sharing – Gov. Diri" />
<meta property="og:image"  content="<?php echo $connection->url(); ?>images/report.png" />
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	 <link rel="icon" href="<?php echo $connection->url(); ?>images/favicon.png" sizes="16x16 32x32" type="image/png">

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
	 

    

   

   <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Case Summary in Bayelsa State as at <?php echo date("l jS \of F Y h:i:s A") ; ?></span>
            <h2 class="mb-4">Case of Coronavirus </h2>
            
          </div>
        </div>
        <div class="row d-flex">
		
		
		<ul id="users"></ul>
  
		
          
         
        <?php foreach($rows2 as $row){ ?>
		
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                  <i class="fa fa-ambulance fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">No. of Cases</h6>
                            <h1 class="display-4" style="color:#fff"><?php echo $row['cases'];  ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                              <i class="fa fa-stethoscope fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">No. of Active Cases</h6>
                            <h1 class="display-4" style="color:#fff"><?php echo $row['a_case'];  ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-medkit fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">No. of Discharged</h6>
                            <h1 class="display-4" style="color:#fff"><?php echo $row['d_case'];  ?></h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-user-md fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase">No. of Deaths</h6>
                            <h1 class="display-4" style="color:#fff"><?php echo $row['dt_case'];  ?></h1>
                        </div>
                    </div>
                </div>
       
		<?php }?>

        </div>
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
  
   <script type="text/javascript">
        $.getJSON('http://127.0.0.1:8000/api/sermons').done(function(data) {
            console.log(data)
        })
    </script>
  
   
  </body>
</html>