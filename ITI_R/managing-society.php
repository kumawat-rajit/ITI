<?php  include_once('header.php') ;
 include_once 'config/db_con.php';

// get database connection
$database = new Database();
$conn = $database->getConnection();
?>

<div style="margin-bottom: 35px;"></div>

<?php  	
 $sql = "SELECT * FROM society";
 $stmt = $conn->query($sql);
 //$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$i=$stmt->rowCount(); 
                     ?>

<div class="page-title"> 
    <div class="container"> 
        <div class="row" >
            <div class="col-md-12 page-title-container" style="padding-left: 0;">
            
		<div class="breadcrumb-trail breadcrumbs">
			<span class="trail-browse"></span> <span class="trail-begin"><a href="index.php" title="Best ITI College in Jaipur, Rajasthan, Private ITI Institute">Home</a></span>
			 <span class="sep">&gt;</span> <a href="" title="About us">About us</a>
			 <span class="sep">&gt;</span> <span class="trail-end">Managing Society</span>
		</div> 
            <h1>Managing Society</h1>            </div><!-- /.col-md-12 -->  
        </div><!-- /.row -->  
    </div><!-- /.container -->                      
</div>


<div id="content" class="page-wrap fullwidth">
		<div class="container content-wrapper">
			<div class="row"><div class="col-md-12">

	<div id="primary" class="content-area fullwidth">
		<main id="main" class="post-wrap" role="main">

							
<article id="post-20" class="post-20 page type-page status-publish hentry">	

	
	<div class="entry-content">
		<div class="vc_row wpb_row vc_row-fluid themesflat_1582344969"><div class="row_overlay" style=""></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner " style="padding-left: 0px;padding-right: 0px;"><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h2><span style="color: #003366; font-family: georgia, palatino, serif;">PRABHAND SAMITI BHARTIYA VIDHYA MANDIR</span></h2>
<p><span style="font-family: arial, helvetica, sans-serif;"><strong>Roop Rajat Pvt. Industrial Training Institute, Bassi, Jaipur has managed by</strong>&nbsp;<strong>Educational Society&nbsp;Prabhand Samiti Bhartiya Vidhya Mandir</strong>&nbsp;(<a href="doc/reg_no.jpg">Click for Certificate/Registration Number</a>)</span></p>
<h3><strong>Chairman and Members</strong></h3>
<div style="overflow-x:auto;">
<table style="height: 862px; width: 0%; border-collapse: collapse; border-style: none;" border="#1d2542">
<tbody>
<tr style="background-color: #1d2542;">
<td style="width: 4.31127%; height: 46px;" width="50"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Sr. /No.</span></td>
<td style="width: 17.5357%; height: 46px;" width="153"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Name</span></td>
<td style="width: 17.5357%; height: 46px;" width="153"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Designation</span></td>
<td style="width: 13.0765%; height: 46px;" width="161"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Father’s Name/Husband's Name</span></td>
<td style="width: 21.5785%; height: 46px;" width="223"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Address</span></td>

<td style="width: 9.91296%; height: 46px;" width="120"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">Member of other Soc./Trust/cmp.</span></td>
<td style="width: 16.4233%; height: 46px;" width="56"><span style="font-family: arial, helvetica, sans-serif; font-size: 14pt; color: #ffffff;">If yes, details</span></td>
</tr>

<?php  if($stmt->rowCount() > 0){  
$i=1; 
  while ($row = $stmt->fetch()) {

	?>
<tr style="border-color: #1d2542;">
<td style="width: 4.31127%; height: 70px;" width="50"><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif; color: #000000;"><strong><?php echo $i ?></strong></span></td>
<td style="width: 17.5357%; height: 70px;" width="153"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['name']?></span></td>
<td style="width: 13.0765%; height: 70px;" width="161"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['designation']?></span></td>
<td style="width: 21.5785%; height: 70px;" width="223"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['fname']?></span></td>
<td style="width: 21.5785%; height: 70px;" width="223"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['address']?></span></td>
<td style="width: 9.91296%; height: 70px;" width="120"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['mem_other']?></span></td>
<td style="width: 16.4233%; height: 70px;" width="56"><span style="color: #000000; font-family: arial, helvetica, sans-serif; font-size: 12pt;"><?php echo $row['detail']?></span></td>
</tr>
<?php
$i++;
 } ?>
</tbody>
</table>
<?php
 } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        } ?>
</div>

		</div>
	</div>
</div></div></div></div>
			</div><!-- .entry-content -->

	
</article><!-- #post-## -->
				
			
		</main><!-- #main -->
	</div><!-- #primary -->

	

</div><!-- /.col-md-12 -->


            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
<?php  include_once('footer.php') ?>