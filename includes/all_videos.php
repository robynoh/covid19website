<?php

 $query2= "SELECT * FROM `videos` where video_id !='".$_GET['videoid']."' order by video_id limit 4";
	$result2=$connection->retrieve($query2);
	$rows2=$connection->arrayFetch($result2);

	

?>


<div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar"><b>Other Videos</b></h3>
			  <?php

 $query2= "SELECT * FROM `videos` where video_id !=".$_GET['videoid'];
	$result2=$connection->retrieve($query2);
	$rows2=$connection->arrayFetch($result2);

	foreach($rows2 as $row2){ 

	echo'<div class="block-21 mb-4 d-flex">';
               echo' <a href="'.$connection->url().'clips/'.$row2['day'].'/'.$row2['month'].'/'.$row2['year'].'/'.str_replace(' ', '-',$row2['title']).'/'.$row2['video_id'].'" class="blog-img mr-4" style="background-image:url('.$connection->url().'mgt/video_photos/'.$row2['img'].')"></a>';
               echo' <div class="text">';
                echo'<h3 class="heading"><a href="'.$connection->url().'clips/'.$row2['day'].'/'.$row2['month'].'/'.$row2['year'].'/'.str_replace(' ', '-',$row2['title']).'/'.$row2['video_id'].'">'. ucwords($row2['title']).'</a></h3>';
                  
                echo'</div>';
              echo'</div>';
	
	}

?>
			 
             
             
             
			
			   <div class="block-21 mb-4 d-flex"><a href="<?php echo $connection->url(); ?>videos">View All</a></div></div>