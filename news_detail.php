<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$recordperpage = 6;
	$pagenum = 1;
	if(isset($_GET['page'])){
	$pagenum = $_GET['page'];
	}
	$offset = ($pagenum - 1) * $recordperpage;
	
	echo $_GET['newsid'];
	
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bayelsa State Covid-19 Team News -  <?php echo $connect->show_news_title($_GET['newsid']);?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/ionicons.min.css">
    
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo $connection->url(); ?>/css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
   <?php include('includes/header.php');?>
	 

    
 
   

  
		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<?php echo $connect->show_news_detail($_GET['newsid']);?>
    	</div>
    </section>

		

		


   

		

    <?php include('includes/footer.php'); ?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo $connection->url(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/popper.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/aos.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo $connection->url(); ?>/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo $connection->url(); ?>/js/google-map.js"></script>
  
  <script src="<?php echo $connection->url(); ?>/js/main.js"></script>
    
  </body>
</html>