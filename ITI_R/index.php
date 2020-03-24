<?php  
include_once 'config/db_con.php';
include_once('header.php') ;

$database = new Database();
$conn = $database->getConnection();
/*$sql = "select update_time from information_schema.tables where table_schema = 'roop_rajat_iti' order by update_time desc limit 1 ";
 $stmt = $conn->query($sql);
 //$stmt->execute();
//$stmt->setFetchMode(PDO::FETCH_ASSOC);
$lastmodified=null;
if($stmt->rowCount() > 0)
{
	$row=$stmt->fetch();
	//print_r($row);
	$lastmodified=$row['UPDATE_TIME'];
	//$arr=implode(" ",$lastmodified);  
	echo $lastmodified;
}*/
 $sql = "SELECT * FROM news_notification order by id desc limit 5";
 $stmt = $conn->query($sql);
 $stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

?>
<!-- bodiy content -->
<div id = "content" class="page-wrap fullwidth">
	<div class="container content-wrapper">
		<div class="row">
			<div class="md12">
				<div class="content-area-front-page">
					<main class="site-main" role="main">
						<div class="entry-content">
							<div style="margin-bottom: 100px;">
								<!--main slider -->

								<div class="container">
	<div id="content-slider">
    	<div id="slider">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            
            <img src="img/slide1.jpg" alt="Cougar"/>
           
           
            </li>

            <li id="second" class="secondanimation">
          
            <img src="img/slide2.jpg" alt="Lions"/>
          
           
            </li>
            
            <li id="third" class="thirdanimation">
           
            <img src="img/slide3.jpg" alt="Snowalker"/>
           
           
            </li>
                        
            <li id="fourth" class="fourthanimation">
            
            <img src="img/slide4.jpg" alt="Howling"/>
           
          
            </li>
                        
            <li id="fifth" class="fifthanimation">
           
            <img src="img/slide5.jpg" alt="Sunbathing"/>
           
           
            </li>
            </ul>
            </div>
            <div class="progress-bar"></div>
        </div>
    </div>
</div>
							</div>



							<div class="vc_row wpb_row vc_row-fluid themesflat_1582165917">
								<div class="row_overlay" style=""></div>
								<div class="wpb_column vc_column_container vc_col-sm-8">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											
											<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
											<div id="rev_slider_5_2_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin: 0px auto; background: transparent none repeat scroll 0% 0%; padding: 0px; height: 342px; overflow: visible;">
<div id="slideshow">
   <div>
	<img src="gallary/img1.jpg">
</div>
<div>
	<img src="gallary/img2.jpg">
</div>
<div>
	<img src="gallary/img3.jpg">
</div>
<div>
	<img src="gallary/img4.jpg">
</div>
<div>
	<img src="gallary/img5.jpg">
</div>
</div>
												
											</div>


										</div>
									</div>
									
								</div>


								<div class="wpb_column vc_column_container vc_col-sm-4">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div class="vc_empty_space" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
											<div class="vc_btn3-container vc_btn3-center">
	<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-danger" href="new-notification.php" title="">News &amp; Informations</a></div>
	<div class="vc_wp_posts wpb_content_element">
		<div class="widget widget_recent_entries">
			<h2 class="widgettitle">Latest News</h2>
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

			<!--<ul>
											<li>
					<a href="#">Parents  Instructor Meeting</a>
									</li>
											<li>
					<a href="#">Details about Industrial Training Institute Courses</a>
									</li>
											
											
											<li>
					<a href="#">Career Opportunities for ITI Students in Rajasthan</a>
									</li>
					</ul>-->
		</div>
		
	</div>
											
										</div>
										
									</div>
									
								</div>

							</div>

							<div class="clearfix" style="margin-top: 50px;"></div>
							<div class="vc_row wpb_row vc_row-fluid vc_custom_1532077387433">
								<div class="row_overlay"></div>
								<div class="wpb_column vc_column_container vc_col-sm-12">
									<div class="vc_column-inner vc_custom_1491986066126">
										<div class="wpb_wrapper">
											<h2 style="font-size: 30px;color: #e80b72;text-align: left;font-family:Abel;font-weight:400;font-style:normal" class="vc_custom_heading">Welcome to Rooprajat ITI</h2>

										<div class="wpb_text_column wpb_content_element ">
										<div class="wpb_wrapper">
											<p>Welcome to Roop Rajat Private Industrial Training Institute, it is situated at prime location in district Jaipur. It is established in 2013 with intake of 120 trainees. Its run by Parband Samati Bhartiya Vidhya Mandir. Institute has all infrastructure facilities needed for overall development of skilled manpower, like Workshops, theory rooms, library, Playground, Audio Visual Aids, and Hi-Tech Computer labs for awareness about computer to trainees of all trades. There is Electrician Trade of two year's duration, with 120 intakes per session. Roop Rajat Pvt. ITI,Jaipur has been setup with the sole objective of imparting vocational&nbsp; training to aspiring technicians&nbsp; offering an environment where young&nbsp; minds can&nbsp; grow to&nbsp; their full&nbsp; potential and become disciplined and skilled&nbsp; Technicians.</p>
								<p>The institutes is also&nbsp; striving&nbsp; for reducing unemployment among educated youth by equipping them with suitable skills for employment and satisfy the requirements&nbsp; of Industries&nbsp; both for manufacturing&nbsp; and service&nbsp; sectors. Quality Training and 100% Placement support has been key factors in making Roop Rajat ITI as the Best ITI in Bassi, Jaipur.</p>
								
								<p>The&nbsp; Directorate&nbsp; General&nbsp; of&nbsp; Training,&nbsp; Ministry of&nbsp; Skill&nbsp; Development&nbsp; and Entrepreneurship recognized the performance of the Top 10 Government and Top 10&nbsp; Private ITIs&nbsp; according&nbsp; to the National&nbsp; level ITI&nbsp; Grading concluded recently.&nbsp;  Placement Cell of Institute who performed their best to impart quality training and supported the trainees in getting suitable employment.</p>

										</div>


					</div>
<!--about ITI-->
	<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1575876828613 vc_row-has-fill">
		<div class="wpb_column vc_column_container vc_col-sm-6">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">

					<div class="themesflat_iconbox  inline-left transparent  vc_custom_1575877801824">
						<div class="iconbox-icon" style="width: px;height: px;background-color:">
							<div class="icon"><span class="icon-bulb" style="line-height: px;color:;font-size: px			"></span>
							
							
							</div>
						</div>
					<div class="iconbox-content">
							<h4 class="title" style="">
									<a href="electrician.php">ELECTRICIAN</a>
							</h4>
			
							<div class="sub-title">
									Duration of Training : 2 Years
							</div>
								<p><span style="color: #000000;">Passed 10th class examination under 10+2 System 	of education with subjects Science and Maths. or its equivalent.</span></p>

								
								<p><a class="themesflat-button no-background" href="electrician.php">Read More<i class="readmore-icon "></i></a></p>
					</div>
					
					</div>
<!--  second content-->
<!--
<div class="themesflat_iconbox  inline-left transparent themesflat_1532080926">
		
		<div class="iconbox-icon" style="width: px;height: px;background-color:"><div class="icon"><span class="icon-grid" style="line-height: px;color:;font-size: px"></span></div></div>
		<div class="iconbox-content">
			<h4 class="title" style="font-size: px;font-weight:">
				<a href="/refrigeration-air-conditioning/">REFRIGERATION &amp; AC</a>
			</h4>
			
			<div class="sub-title">
				Duration of Training : 2 Years
			</div>
			<p><span style="color: #000000;">Passed 10th class examination under 10+2 System of education with Science and Mathematics or its equivalent.</span></p>

			
				<p><a class="themesflat-button no-background" href="/refrigeration-air-conditioning/">Read More<i class="readmore-icon "></i></a></p>
		</div>
	</div>
-->
				
				</div>
			</div>
		</div>


<div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="themesflat_iconbox  inline-left transparent  vc_custom_1575876866334">
		<!--
		<div class="iconbox-icon" style="width: px;height: px;background-color:"><div class="icon"><span class="icon-wrench" style="line-height: px;color:;font-size: px"></span></div></div>
		
		<div class="iconbox-content">
			<h4 class="title" style="font-size: px;font-weight:">
				<a href="/fitter/">FITTER</a>
			</h4>
			
			<div class="sub-title">
				Duration of Training : 2 years
			</div>
			<p><span style="color: #000000;">Passed 10th class examination under 10+2 System of education with Science and Mathematics subjects or its equivalent.</span></p>

			
				<p><a class="themesflat-button no-background" href="/fitter/">Read More<i class="readmore-icon "></i></a></p>
		</div>
-->

	</div>
	<!--
	<div class="themesflat_iconbox  inline-left transparent themesflat_1532081024">
		
		<div class="iconbox-icon" style="width: px;height: px;background-color:"><div class="icon"><span class="icon-settings" style="line-height: px;color:;font-size: px"></span></div></div>
		<div class="iconbox-content">
			<h4 class="title" style="font-size: px;font-weight:">
				<a href="/mechanic-diesel/">MECHANIC DIESEL</a>
			</h4>
			
			<div class="sub-title">
				Duration of Training : 1 Year
			</div>
			<p><span style="color: #000000;">Passed 10th class examination under 10+2 System of education with Science and Mathematics subjects or its equivalent.</span></p>

			
				<p><a class="themesflat-button no-background" href="/mechanic-diesel/">Read More<i class="readmore-icon "></i></a></p>
		</div>
	</div>
-->
</div></div></div>

	</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</main>
					
				</div>
				
			</div>
		</div>
		
	</div>

</div>


<?php  include_once('footer.php') ?>


