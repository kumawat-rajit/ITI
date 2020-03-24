<?php  include_once 'config/db_con.php';
include_once('header.php') ;
$database = new Database();
$conn = $database->getConnection();

$sql = "SELECT * FROM iti_papers order by id desc";
 $stmt = $conn->query($sql);
 $stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<div style="margin-bottom: 35px;"></div>


<div class="page-title">
    <div class="overlay"></div>   
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 page-title-container">
            
		<div class="breadcrumb-trail breadcrumbs">
			<span class="trail-browse"></span> <span class="trail-begin"><a href="index.php" title="Best ITI College in Rajastna | ITI Trade for Govt Job | Apply for  ITI Admission">Home</a></span>
			
			 <span class="sep">&gt;</span> <span class="trail-end">ITI & Competition Papers</span>
		</div> 
            <h1>ITI & Other Competition Exams Papers</h1>            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div>

<div class="container"> 
        <div class="row">

<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
											
	<div class="vc_wp_posts wpb_content_element">
		<div class="widget widget_recent_entries">
			
			<ul>
<?php  if($stmt->rowCount() > 0){ 
 while ($row = $stmt->fetch()) {
 	?>
 	<li>
<a href="uploads/<?php echo $row['file_name'] ?>" target="_blank"><?php echo $row['caption'] ?></a>
</li>
 	<?php
 }
}
 else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
	?>
</ul>
		</div>
		
	</div>
											
										</div>
										
									</div>
									
								</div>
							</div>
						</div>
<?php  include_once('footer.php') ;?>



