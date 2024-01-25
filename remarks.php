<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$query= "SELECT * FROM `remarks`  where status=1 order by remark_id DESC limit 10";
	$result=$connection->retrieve($query);
	$rows=$connection->arrayFetch($result);
	

$recordperpage = 6;
	$pagenum = 1;
	if(isset($_GET['page'])){
	$pagenum = $_GET['page'];
	}
	$offset = ($pagenum - 1) * $recordperpage;
	
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bayelsa Covid-19 Team | Remarks</title>
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
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">GOVERNOR'S REMARKS ON THE CORONAVIRUS PANDEMIC  </span>
            <h2 class="mb-4">REMARKS </h2>
            
          </div>
        </div>
        <div class="row d-flex">
          
         
        

<table class="table table-hover" >
  
  <tbody >
  <?php foreach($rows as $row){ ?>
    <tr>
   
      <td><b style="color:#000;font-size:20px"><?php echo ucwords($row['title']); ?></b><br/>
	 
	  <?php echo strip_tags( substr( $row['remark'],0,200)) ;?>...<a href="<?php echo $connection->url();  ?>remark/<?php echo $row['remark_id']; ?>/<?php echo str_replace(' ', '-',$row['title'])?>/" > Read More</a> 
	  
	  <br/><a href="#"><b style="font-size:13px;">Date : <?php echo $row['time_of_event'];?></a></b>
    </td>
	</tr>
	<?php }?>
	
  </tbody>
</table>
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
<br/>
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
    
  </body>
</html>