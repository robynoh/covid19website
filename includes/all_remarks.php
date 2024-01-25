<?php

 $query2= "SELECT * FROM `remarks` where remark_id !='".$_GET['remarkid']."' order by remark_id DESC limit 4";
	$result2=$connection->retrieve($query2);
	$rows2=$connection->arrayFetch($result2);

	

?>


<div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar"><b>Other Remarks</b></h3>
			  <?php

 $query2= "SELECT * FROM `remarks` where remark_id !=".$_GET['remarkid'];
	$result2=$connection->retrieve($query2);
	$rows2=$connection->arrayFetch($result2);

	foreach($rows2 as $row2){ 

	echo'<div class="block-21 mb-4 d-flex">';
              
               echo' <div class="text" style="width:100%">';
                echo'<h3 class="heading"> <a href="'.$connection->url().'remark/'.$row2['remark_id'].'/'.str_replace(' ', '-',$row2['title']).'/">'. ucwords($row2['title']).'</a></h3>';
                  
                echo'</div>';
              echo'</div>';
	
	}

?>
			 
             
             
             
			
			   <div class="block-21 mb-4 d-flex"><a href="<?php echo $connection->url(); ?>remarks">View All</a></div></div>