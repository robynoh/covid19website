
<?php 
require_once('./classes/class.php');

$connect1 =new connection();
 	$connect1->connectTodatabase();
	$connect1->selectDatabase();
 ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <img src="<?php echo $connect1->url(); ?>/images/logo.png" width="60px" height="60px" /><span style="font-weight:bold;font-size:18px;color:#000"  >BAYELSA COVID-19 LIBRARY</span>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="<?php echo $connect1->url(); ?>" class="nav-link"><span>Home</span></a></li>
			  
			  <li class="nav-item"><a href="<?php echo $connect1->url(); ?>committee" class="nav-link"><span>Committee</span></a></li>
	          <li class="nav-item"><a href="<?php echo $connect1->url(); ?>updates" class="nav-link"><span>Updates</span></a></li>
	          <li class="nav-item"><a href="<?php echo $connect1->url(); ?>videos" class="nav-link"><span>Videos</span></a></li>
	          
	          <li class="nav-item"><a href="<?php echo $connect1->url(); ?>report-dashboard" class="nav-link"><span>Report Dashboard</span></a></li>
	         
	          <li class="nav-item"><a href="<?php echo $connect1->url(); ?>contact" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>